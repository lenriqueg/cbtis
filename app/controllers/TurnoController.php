<?php

class TurnoController extends \BaseController {

	public function index()
	{
		$data = Turno::paginate(3);

		if (count($data) == 0) {
			$link = route('turno.new');
			$title = 'Nuevo turno';
			return View::make('null', compact('link', 'title'));
		}

		return View::make('turno.index', compact('data'));
	}


	public function create()
	{
		return View::make('turno.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = ['turno'	=> 'required | unique:turnos,turno'];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$turno = new Turno();
			$turno->turno = Input::get('turno');
			$turno->save();

			return Redirect::route('turno.show', $turno->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
	}

	public function show($id)
	{
		$data = Turno::find($id);
		return View::make('turno.show', compact('data'));
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		try{
			$data = Turno::find($id);
			$data->destroy($id);
			return Redirect::route('turnos');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}