<?php

class HorarioController extends \BaseController {

	public function index()
	{	$semestre = semestre::all();
		$ciclo = Ciclo::where('status', '=', 1)->get();
		return View::make('horario.ciclo.index', compact('ciclo', 'semestre'));
	}

	public function carrera()
	{	
		$data = Carrera::where('status', '=', 1)->get();
		return View::make('horario.carrera.index', compact('data'));
	}

	public function grupo($id)
	{
		$data = DB::table('grupos')
			->join('turnos', 'turno_id', '=', 'turnos.id')
			->join('semestres', 'semestre_id', '=', 'semestres.id')
			->join('carreras', 'carrera_id', '=', 'carreras.id')
			->select('grupo', 'turno', 'semestre', 'carrera', 'grupos.id as g_id', 'carreras.id as c_id')
			->where('grupos.status', '=', 1)
			->where('carrera_id', '=', $id)
			->get();

		return View::make('horario.grupo.index', compact('data'));
	}
	
	public function horario($id)
	{
		return View::make('horario.horario.index', compact('id'));
	}

	public function pdf($id)
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
			and grupo_id = ?
			group By hora_id, dia_id',
			[$id]);
		$html = View::make('horario.pdf.index', compact('$horario'));
		return PDF::load($html, 'A4', 'portrait')->download('my_pdf');
	}
}