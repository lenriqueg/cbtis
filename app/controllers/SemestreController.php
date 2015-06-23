<?php

class SemestreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /semestre
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Semestre::paginate(5);
        return View::make('semestre.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /semestre/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /semestre
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
        $data = Semestre::find($id);
        return View::make('semestre.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /semestre/{id}/edit
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
	 * PUT /semestre/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /semestre/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}