<?php

class TurnoController extends \BaseController {

	public function index()
	{
		$data = Turno::paginate(3);
		return View::make('turno.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /turno/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /turno
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
		$data = Turno::find($id);
		return View::make('turno.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /turno/{id}/edit
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
	 * PUT /turno/{id}
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
	 * DELETE /turno/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}