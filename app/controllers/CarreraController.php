<?php

class CarreraController extends \BaseController {

	public function index()
	{
		$data = Carrera::paginate(3);
		return View::make('carrera.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /carrera/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /carrera
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
		$data = Carrera::find($id);
		return View::make('carrera.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /carrera/{id}/edit
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
	 * PUT /carrera/{id}
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
	 * DELETE /carrera/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}