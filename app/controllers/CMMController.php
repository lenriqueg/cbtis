<?php

class CMMController extends \BaseController {

	public function index($id)
	{
		$data = Maestro::find($id);
		return View::make('maestro_materia.index', compact('data'));
	}

	public function create($id)
	{
		$maestro =  Maestro::find($id);
		$materia = Materia::where('status', '=', 1)->get();
		$ciclo = Ciclo::where('status', '=', 1)->limit(1)->get();
		return View::make('maestro_materia.create', compact('maestro', 'materia', 'ciclo'));
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

			if (!$x) {

				$ciclo = Ciclo::find($ciclo);
				$ciclo->materia()->attach($materia);
				$ciclo->maestro()->attach($maestro);

				return 'Listo para gurdar';
			}
			return Redirect::back()
				->with('mensaje_error', 'El registro ya existe')
				->withInput();

		}
			
		return Redirect::back()->withInput()->withErrors($validator->messages());
		
	}

	public function destroy($id)
	{
		//
	}

}