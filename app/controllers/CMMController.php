<?php

class CMMController extends \BaseController {

	public function index($id)
	{
		$data = DB::table('maestro_materia')
			->join('maestros', 'maestro_materia.maestro_id', '=', 'maestros.id')
			->join('materias', 'maestro_materia.materia_id', '=', 'materias.id')
			->join('ciclos', 'maestro_materia.ciclo_id', '=', 'ciclos.id')
			->select('maestro_materia.id', 'maestro_id as m_id', 'nombres', 'materia', 'ciclo')
			->where('maestro_id', '=', $id)
			->where('ciclos.status', 1)
			->orderBy('ciclo_id')
			->orderBy('materia')
			->paginate(6);
		return View::make('maestro_materia.index', compact('data', 'id'));
	}

	public function create($id)
	{
		$maestro =  Maestro::find($id);
		$materia = DB::table('grupo_materia')
			->join('materias', 'materias.id', '=', 'materia_id')
			->join('grupos', 'grupos.id', '=', 'grupo_id')
			->where('grupos.status', '=', 1)
			->select('materia', 'materias.id as id')
			->distinct('materia')
			->where('materias.status', '<>', 0)
			->orderBy('grupo')
			->orderBy('materia')
			->get();
		$ciclo = Ciclo::where('status', '=', 1)->limit(1)->get();
		return View::make('maestro_materia.create', compact('maestro', 'materia', 'ciclo'));
		// return $materia;
	}

	public function store()
	{	
		$data = Input::except('_token');

		$rules = [
			'materia_id'	=> 'required',
			'id'			=> 'required',
			'ciclo_id'		=>'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$maestro = Input::get('id');
			$materia = Input::get('materia_id');
			$ciclo = Input::get('ciclo_id');

			$x = DB::table('maestro_materia')
				->where('maestro_id', '=', $maestro)
				->where('materia_id', '=', $materia)
				->where('ciclo_id', '=', $ciclo)->get();

			$y = DB::table('maestro_materia')
				->where('materia_id', '=', $materia)
				->where('ciclo_id', '=', $ciclo)->get();

			if (!$x) {

				if (!$y) {
					
					DB::table('maestro_materia')
						->insertGetId([
							'ciclo_id'		=> $ciclo,
							'materia_id'	=> $materia,
							'maestro_id'	=> $maestro
						]);

					return Redirect::route('cmms' ,$maestro);

				}
				return Redirect::back()
					->with('mensaje_error', 'La materia ha sido asignada a otro docente')
					->withInput();

			}
			return Redirect::back()
				->with('mensaje_error', 'El registro ya existe')
				->withInput();

		}
			
		return Redirect::back()->withInput()->withErrors($validator->messages());
		
	}

	public function destroy($id, $m)
	{
		DB::table('maestro_materia')
			->where('id', '=', $id)
			->delete();

		return Redirect::route('cmms', $m);
	}

}