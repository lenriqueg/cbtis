<?php

class DiaController extends \BaseController {

	public function index()
	{
		$data = Dia::paginate(3);

		if (count($data) == 0) {
			$link = route('dia.new');
			$title = 'Nuevo dia';
			return View::make('null', compact('link', 'title'));
		}
		
		return View::make('dia.index', compact('data'));
	}

	public function create()
	{
		return View::make('dia.create');
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = ['dia'	=> 'required | unique:dias,dia'];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$dia = new dia();
			$dia->dia = Input::get('dia');
			$dia->save();

			return Redirect::route('dia.show', $dia->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
	}

	public function show($id)
	{
		$data = Dia::find($id);
		return View::make('dia.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dia/{id}/edit
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
	 * PUT /dia/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		try{
			$data = Dia::find($id);
			$data->destroy($id);
			return Redirect::route('dias');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}