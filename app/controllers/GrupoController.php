<?php

class GrupoController extends \BaseController {

	public function index($id)
	{
		$data = Carrera::find($id)->grupo;

		if (count($data) == 0) {
			$link = URL::route('grupo.new');
			$title = 'Nuevo grupo';
			return View::make('null', compact('link', 'title'));
		}
		return View::make('grupo.index', compact('data'));
	}

	public function create()
	{
		$data = Carrera::find($id)->grupo;
		return View::make('grupo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /grupo
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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