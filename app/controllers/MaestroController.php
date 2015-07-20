<?php

class MaestroController extends \BaseController {

	public function index()
	{
        $data = Maestro::paginate(5);

        if (count($data) == 0) {
			$link = route('mtr.new');
			$title = 'Nuevo maestro';
			return View::make('null', compact('link', 'title'));
		}

		return View::make('maestro.index', compact('data'));
	}

	public function create()
	{
		return View::make('maestro.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'clave' => 'required | unique:maestros,clave',
			'nombres' => 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$maestro = new Maestro;

			$maestro->clave = Input::get('clave');
			$maestro->nombres = Input::get('nombres');
			$maestro->status = 1;
			$maestro->save();

			return Redirect::action('MaestroController@show', $maestro->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Maestro::find($id);
        return View::make('maestro.show', compact('data'));
	}

	public function edit($id)
	{
		$data = Maestro::find($id);
		return View::make('maestro.edit', compact('data'));
	}

	public function update($id)
	{
		$data = Input::except('_token');

		$rules = ['nombres' => 'required'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$maestro = Maestro::find($id);

			$maestro->nombres = Input::get('nombres');
			$maestro->save();

			return Redirect::route('mtr.show', $maestro->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function status($id)
	{
		$data = Maestro::find($id);

		if ($data->status == 1) 
		{
			$data->status = 0;
			$data->save();
			
			return Redirect::action('MaestroController@show', $id);
		}

		$data->status = 1;
		$data->save();

		return Redirect::action('MaestroController@show', $id);

	}

	public function destroy($id)
	{
		try{
			$data = Maestro::find($id);
			$data->destroy($id);
			return Redirect::route('maestros');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}