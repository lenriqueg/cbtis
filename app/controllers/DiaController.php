<?php

class DiaController extends \BaseController {

	public function index()
	{
		$data = Dia::paginate(3);
		return View::make('dia.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dia/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dia
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dia/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}