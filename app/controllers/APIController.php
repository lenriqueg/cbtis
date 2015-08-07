<?php

class APIController extends \BaseController {

	public function ciclo()
	{
		$data = Ciclo::where('status', '=', 1)->get();
		return Response::json($data);
	}

	public function hora()
	{
		$data = Hora::all();
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

			if (!$sql || !$sql2 || $sql3) {
				return true;
			}

			return false;
		}

		function maxHrs($hora, $c, $materia)
		{
			$materia = Materia::find($materia);
			$materiaHrsTotal = $materia->hrs_practicas;

			$horas = DB::table('horarios')
				->where('materia_id', '=', $materia)
				->where('ciclo_id', '=', $c)->count();

			if ($materiaHrsTotal <= $horas) {
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

		function fusion($hora, $materia, $dia, $c, $grupo, $aula)
		{
			$type = Hora::find($hora);

			if ($type->turno_id != 3) {
				DB::table('horarios')
					->insert([
							'hora_id'		=> $hora,
							'materia_id'	=> $materia,
							'grupo_id'		=> $grupo,
							'aula_id'		=> $aula,
							'dia_id'		=> $dia,
							'ciclo_id'		=> $c
						]);

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

			return false;

		}

		if (validar($data)) {
			if (empalme($hora, $dia, $aula, $c, $grupo)) {
				if (maxHrs($hora, $c, $materia)) {
					if (maestro($dia, $hora, $materia, $c)) {
						if (fusion($hora, $materia, $dia, $c, $grupo, $aula)) {
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

}