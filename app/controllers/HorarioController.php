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

	public function save()
	{
		$data = Input::all();

		return Response::json($data);
	}
}