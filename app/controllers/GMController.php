<?php

class GMController extends \BaseController {

	public function index($id)
	{
		$data = Grupo::find($id);

		return View::make('grupo_materia.index', compact('data'));
	}

	public function create($id)
	{
		$materia = Materia::where('status', '=', 1)->get();
		$grupo = Grupo::find($id);
		return View::make('grupo_materia.create', compact('materia', 'grupo'));
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'materia_id'	=> 'required',
			'id'			=> 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$g = Input::get('id');
			$m = Input::get('materia_id');
			$x = DB::table('grupo_materia')
				->where('grupo_id', '=', $g)
				->where('materia_id', '=', $m)->get();

			if (!$x) {

				$grupo = Grupo::find($g);
				$grupo->materia()->attach($m);

				return Redirect::route('gms', $g);
			}
			return Redirect::back()
				->with('mensaje_error', 'El registro ya existe')
				->withInput();

		}
			
		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Grupo::find($id)->carrera;
		return View::make('grupo_materia.index', compact('data'));
	}

	

	public function destroy($g, $m)
	{
		$grupo = Grupo::find($g);
		$grupo->materia()->detach($m);

		return Redirect::route('gms', $g);
	}

}