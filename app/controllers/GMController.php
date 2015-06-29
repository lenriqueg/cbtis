<?php

class GMController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pivot
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$data = Grupo::find($id);
		return View::make('grupo_materia.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pivot/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pivot
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pivot/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Grupo::find($id)->carrera;
		return View::make('grupo_materia.index', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pivot/{id}/edit
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
	 * PUT /pivot/{id}
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
	 * DELETE /pivot/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}