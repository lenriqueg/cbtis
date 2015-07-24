<?php

class HorarioController extends \BaseController {

	public function index()
	{	
		$data = Ciclo::where('status', '=', 1)->get();
		return View::make('horario.ciclo.index', compact('data'));
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
			->select('grupo', 'turno', 'semestre', 'carrera', 'grupos.id as g_id')
			->where('carrera_id', '=', $id)
			->get();

		return View::make('horario.grupo.index', compact('data'));
	}
	

}