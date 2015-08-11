<?php

class APIController extends \BaseController {

	public function ciclo()
	{
		$data = Ciclo::where('status', '=', 1)->get();
		return Response::json($data);
	}

	public function hora($id)
	{
		$grupo = Grupo::find($id);
		$data = DB::select('SELECT * from horas where turno_id IN (?, 3)', [$grupo->turno_id]);
		return Response::json($data);
	}

	public function dia()
	{
		$data = Dia::all();
		return Response::json($data);
	}

	public function grupo_materia($id)
	{
		$data = Grupo::find($id)->materia;
		return Response::json($data);
	}

	public function aula()
	{
		$data = Aula::all();
		return Response::json($data);
	}

	public function save()
	{
		$data = Input::all();

		$hora = Input::get('hora_id');
		$materia =Input::get('materia_id');
		$grupo =Input::get('grupo_id');
		$aula =Input::get('aula_id');
		$dia =Input::get('dia_id');
		$ciclo = Ciclo::where('status', '=', 1)->get();

		foreach ($ciclo as $d) {
			$c = $d->id;
		}

		function validar($data)
		{
			$rules = [
				'grupo_id' 	=>	'required',
				'dia_id'	=> 'required',
				'hora_id'	=> 'required',
				'materia_id'	=> 'required',
				'aula_id'		=> 'required'
			];
			
			$validator = Validator::make($data, $rules);

			if ($validator->passes()) {
				return true;
			}

			return false;
		}

		function empalme($hora, $dia, $aula, $c, $grupo)
		{
			$sql = DB::table('horarios')
				->where('hora_id', '=', $hora)
				->where('dia_id', '=', $dia)
				// ->where('aula_id', '=', $aula)
				->where('grupo_id', '=', $grupo)
				->where('ciclo_id', '=', $c)->get();

			$sql2 = DB::table('horarios')
				->where('hora_id', '=', $hora)
				->where('dia_id', '=', $dia)
				->where('aula_id', '=', $aula)
				// ->where('grupo_id', '=', $grupo)
				->where('ciclo_id', '=', $c)->get();

			$sql3 = DB::table('horarios')
				->where('hora_id', '=', $hora)
				->where('dia_id', '=', $dia)
				// ->where('aula_id', '=', $aula)
				// ->where('grupo_id', '=', $grupo)
				->where('ciclo_id', '=', $c)->get();

			if (!$sql) {
				return true;
			}

			return false;
		}

		function maxHrs($c, $materia)
		{
			$m = Materia::find($materia);
			$materiaHrsTotal = $m->hrs_practicas + $m->hrs_teoricas;

			$horas = DB::table('horarios')
				->where('materia_id', '=', $materia)
				->where('ciclo_id', '=', $c)->count();

			if ($horas < $materiaHrsTotal) {
				return true;
			}
			return false;
		}

		function maestro($dia, $hora, $materia, $c)
		{
			$sql = DB::table('horarios')
				->where('ciclo_id', '=', $c)->get();

			if ($sql == null) {
				return true;
			}

			$maestro = DB::table('materias')
				->join('maestro_materia', 'materias.id', '=', 'maestro_materia.materia_id')
				->where('materia_id', '=', $materia)
				->select('materia', 'materia_id', 'maestro_id')
				->get();

			foreach ($maestro as $d) {
				$m = $d->maestro_id;
			}

			if (isset($m)) {
				$sql = DB::table('maestro_materia')
					->join('materias' ,'maestro_materia.materia_id', '=', 'materias.id')
					->join('maestros' ,'maestro_materia.maestro_id', '=', 'maestros.id')
					->join('horarios' ,'materias.id', '=', 'horarios.materia_id')
					->where('hora_id', '=', $hora)
					->where('horarios.ciclo_id', '=', $c)
					->where('dia_id', '=', $dia)
					->where('maestros.id', '=', $m)
					->get();

				if ($sql == null) {
					return true;
				}
			}



			return false;
		}

		function safe($hora, $materia, $dia, $c, $grupo, $aula)
		{
			function clon($hora, $materia, $dia, $c, $grupo, $aula)
			{
				
				$count = DB::table('clon_horarios')
					->where('grupo_id', '=', $grupo)->count();
				if ($count < 1) {
					$g = Grupo::find($grupo);
					$x = DB::select('SELECT * from horas where turno_id IN (?, 3)', [$g->turno_id]);

					$dias = Dia::all();

					foreach ($dias as $d) {
						foreach($x as $y) {
							DB::table('clon_horarios')
								->insert([
									'hora_id'		=> $y->id,
									'materia_id'	=> 0,
									'grupo_id'		=> $grupo,
									'aula_id'		=> 0,
									'dia_id'		=> $d->id,
									'ciclo_id'		=> $c
								]);
						}
					}

				}


				DB::update('UPDATE clon_horarios 
					SET hora_id = ?, materia_id = ?, grupo_id = ?, aula_id = ?, dia_id = ?
					where ciclo_id = ? and hora_id = 0 limit 1', [$hora, $materia, $grupo, $aula, $dia, $c]);
				
				return true;
			}

			$save = DB::table('horarios')
				->insert([
						'hora_id'		=> $hora,
						'materia_id'	=> $materia,
						'grupo_id'		=> $grupo,
						'aula_id'		=> $aula,
						'dia_id'		=> $dia,
						'ciclo_id'		=> $c
					]);
				clon($hora, $materia, $dia, $c, $grupo, $aula);

			return true;

		}

		// return maxHrs($c, $materia);

		if (validar($data)) {
			if (empalme($hora, $dia, $aula, $c, $grupo)) {
				if (maxHrs($c, $materia)) {
					if (maestro($dia, $hora, $materia, $c)) {
						if (safe($hora, $materia, $dia, $c, $grupo, $aula)) {
							return 'guardado';
						}
						return Response::json(['error' => 'hora de empalme']);
					}
					return Response::json(['error' => 'el maestro ya fue asignado en la misma hora en otro lugar']);
				}
				return Response::json(['error' => 'maestro no asignado o horas al limite']);
			}
			return Response::json(['error' => 'empalme de salones y hora']);
		}
		return Response::json(['error' => 'validator fail']);
	}

	public function horario($id)
	{
		$horario = DB::select('SELECT hora, hora_id, materia, materia_id, grupo, grupo_id, aula, aula_id, dia, dia_id, ciclo from clon_horarios
			LEFT OUTER JOIN horas
				on horas.id = clon_horarios.hora_id
			LEFT OUTER JOIN materias
				on materias.id = clon_horarios.materia_id
			LEFT OUTER JOIN grupos
				on grupos.id = clon_horarios.grupo_id
			LEFT OUTER JOIN aulas
				on aulas.id = clon_horarios.aula_id
			LEFT OUTER JOIN dias
				on dias.id = clon_horarios.dia_id
			LEFT OUTER JOIN ciclos
				on ciclos.id = clon_horarios.ciclo_id
			where ciclo_id = 2
			and grupo_id = ?', [$id]);

			return Response::json($horario);
	}

}