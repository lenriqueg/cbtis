<?php

class MaestroController extends \BaseController {

	public function index()
	{
        $data = Maestro::paginate(5);
		return View::make('maestro.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /maestro/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /maestro
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
		$data = Maestro::find($id);
        return View::make('maestro.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /maestro/{id}/edit
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
	 * PUT /maestro/{id}
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
	 * DELETE /maestro/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}