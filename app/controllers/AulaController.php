<?php

class AulaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /aula
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Aula::paginate(5);
		return View::make('aula.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aula/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aula
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aula/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Aula::find($id);
		return View::make('aula.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /aula/{id}/edit
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
	 * PUT /aula/{id}
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
	 * DELETE /aula/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}