<?php

class AulaController extends \BaseController {

	public function index()
	{
		$data = Aula::paginate(7);
		return View::make('aula.index', compact('data'));
	}

	public function create()
	{
		return View::make('aula.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = ['aula' => 'required | unique:aulas,aula'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$aula = new Aula;

			$aula->aula = Input::get('aula');
			$aula->descripcion = Input::get('descripcion');
			$aula->status = 1;
			$aula->save();

			return Redirect::action('AulaController@show', $aula->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Aula::find($id);
		return View::make('aula.show', compact('data'));
	}

	public function edit($id)
	{
		$data = Aula::find($id);
		return View::make('aula.edit', compact('data'));
	}

	public function update($id)
	{
		$data = Input::except('_token');

		$rules = [
			'aula' => 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) 
		{
			$aula = Aula::find($id);
			$aula->aula = Input::get('aula');
			$aula->descripcion = Input::get('descripcion');
			$aula->save();

			return Redirect::action('AulaController@show', $id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());;
	}

	public function status($id)
	{
		$data = Aula::find($id);

		if ($data->status == 1) 
		{
			$data->status = 0;
			$data->save();
			
			return Redirect::action('AulaController@show', $id);
		}

		$data->status = 1;
		$data->save();

		return Redirect::action('AulaController@show', $id);

	}

	public function destroy($id)
	{
		try{
			$data = Aula::find($id);
			$data->destroy($id);
			return Redirect::route('aulas');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}