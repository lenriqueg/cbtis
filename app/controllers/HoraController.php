<?php

class HoraController extends \BaseController {

	public function index()
	{
		$data = Hora::paginate(7);

		if (count($data) == 0) {
			$link = route('hora.new');
			$title = 'Nueva hora';
			return View::make('null', compact('link', 'title'));
		}

		return View::make('hora.index', compact('data'));
	}

	public function create()
	{
		$turno = Turno::all();
		return View::make('hora.create', compact('turno'));
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'hora'		=> 'required | unique:horas,hora',
			'turno_id'	=> 'required'
		];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$hora = new Hora();
			$hora->hora 	= Input::get('hora');
			$hora->turno_id	= Input::get('turno_id');
			$hora->save();

			return Redirect::route('hora.show', $hora->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
	}

	public function show($id)
	{
		$data = DB::select('select hora, horas.id as id, turno from horas
			join turnos
				on turnos.id = horas.turno_id
			where horas.id = ?', [$id]);
		return View::make('hora.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hora/{id}/edit
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
	 * PUT /hora/{id}
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
	 * DELETE /hora/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			$data = Hora::find($id);
			$data->destroy($id);
			return Redirect::route('horas');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}