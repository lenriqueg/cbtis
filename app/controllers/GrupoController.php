<?php

class GrupoController extends \BaseController {

	public function index($id)
	{
		$data = Carrera::find($id)->grupo;

		if (count($data) == 0) {
			$link = URL::route('grupo.new', $id);
			$title = 'Nuevo grupo';
			return View::make('null', compact('link', 'title'));
		}
		return View::make('grupo.index', compact('data', 'id'));
	}

	public function create($id)
	{
		$data = Carrera::find($id);
		$turno = Turno::all();
		$semestre = Semestre::where('status', '=', '1')->get();
		return View::make('grupo.create', compact('data', 'turno', 'semestre'));
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'grupo'			=> 'required | unique:grupos,grupo',
			'carrera_id'	=> 'required',
			'turno_id'		=> 'required',
			'semestre_id'	=> 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			$grupo = new grupo();
			$grupo->grupo = Input::get('grupo');
			$grupo->carrera_id = Input::get('carrera_id');
			$grupo->turno_id = Input::get('turno_id');
			$grupo->semestre_id = Input::get('semestre_id');
			$grupo->save();
			
			return Redirect::route('grupo.show', $grupo->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Grupo::find($id);
		return View::make('grupo.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /grupo/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /grupo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /grupo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			$data = Grupo::find($id);
			$data->destroy($id);
			return Redirect::route('especialidades');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}