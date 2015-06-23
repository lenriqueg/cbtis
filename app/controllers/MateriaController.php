<?php

class MateriaController extends \BaseController {

	public function index()
	{
        $data = Materia::paginate(5);
        return View::make('materia.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /materia/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /materia
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
        $data = Materia::find($id);
        return View::make('materia.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /materia/{id}/edit
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
	 * PUT /materia/{id}
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
	 * DELETE /materia/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}