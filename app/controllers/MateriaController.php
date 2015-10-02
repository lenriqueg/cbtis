<?php

class MateriaController extends \BaseController {

	public function index()
	{
        $data = Materia::paginate(5);

        if (count($data) == 0) {
			$link = route('mat.new');
			$title = 'Nueva materia';
			return View::make('null', compact('link', 'title'));
		}

        return View::make('materia.index', compact('data'));
	}

	public function create()
	{
		return View::make('materia.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'materia' => 'required | unique:materias,materia',
			'hrs_practicas' => 'required | integer',
			'hrs_teoricas' 	=> 'required | integer',
			'color'			=> 'required | unique:materias,color'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$materia = new Materia;

			$materia->materia = Input::get('materia');
			$materia->hrs_practicas = Input::get('hrs_practicas');
			$materia->hrs_teoricas = Input::get('hrs_teoricas');
			$materia->color = Input::get('color');
			$materia->status = 1;
			$materia->save();

			return Redirect::route('mat.show', $materia->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
        $data = Materia::find($id);
        return View::make('materia.show', compact('data'));
	}

	public function edit($id)
	{
		$data = Materia::find($id);

		return View::make('materia.edit', compact('data'));
	}

	public function update($id)
	{
		
		$data = Input::except('_token');

		$rules = [
			'materia' 		=> 'required',
			'hrs_practicas' => 'integer',
			'hrs_teoricas' 	=> 'integer',
			'color'			=> 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			
			$materia = Materia::find($id);

			$materia->materia 		= Input::get('materia');
			$materia->hrs_practicas = Input::get('hrs_practicas');
			$materia->hrs_teoricas 	= Input::get('hrs_teoricas');
			$materia->color			= Input::get('color');

			//dd(Input::all());
			$materia->save();

			return Redirect::route('mat.show', $materia->id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function status($id)
	{
		$data = Materia::find($id);

		if ($data->status == 1) 
		{
			$data->status = 0;
			$data->save();
			
			return Redirect::route('mat.show', $id);
		}

		$data->status = 1;
		$data->save();

		return Redirect::route('mat.show', $id);

	}

	public function destroy($id)
	{
		try{
			$data = Materia::find($id);
			$data->destroy($id);
			return Redirect::route('materias');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}