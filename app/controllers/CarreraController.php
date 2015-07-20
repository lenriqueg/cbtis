<?php

class CarreraController extends \BaseController {

	public function index()
	{
		$data = Carrera::paginate(3);

		if (count($data) == 0) {
			$link = route('esp.new');
			$title = 'Nueva especialidad';
			return View::make('null', compact('link', 'title'));
		}

		return View::make('carrera.index', compact('data'));
	}

	public function create()
	{
		return View::make('carrera.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = ['carrera' => 'required | unique:carreras,carrera'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$carrera = new carrera;

			$carrera->carrera = Input::get('carrera');
			$carrera->status = 1;
			$carrera->save();

			return Redirect::action('CarreraController@show', $carrera->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Carrera::find($id);
		return View::make('carrera.show', compact('data'));
	}

	public function edit($id)
	{
		$data = Carrera::find($id);

		return View::make('carrera.edit', compact('data'));
	}

	public function update($id)
	{
		$data = Input::except('_token');
		$rules = ['carrera' => 'required'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			$carrera = Carrera::find($id);
			$carrera->carrera = Input::get('carrera');
			$carrera->save();

			return Redirect::route('esp.show', $id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}
	
	public function status($id)
	{
		$data = Carrera::find($id);

		if ($data->status == 1) 
		{
			$data->status = 0;
			$data->save();
			
			return Redirect::action('CarreraController@show', $id);
		}

		$data->status = 1;
		$data->save();

		return Redirect::action('CarreraController@show', $id);

	}

	public function destroy($id)
	{
		try{
			$data = Carrera::find($id);
			$data->destroy($id);
			return Redirect::route('especialidades');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}

	}

}