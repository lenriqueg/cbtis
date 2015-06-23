<?php

class CicloController extends \BaseController {


	public function index()
	{
		$data = Ciclo::paginate(5);

		return View::make('ciclo.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ciclo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ciclo
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ciclo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Ciclo::find($id);
		return View::make('ciclo.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ciclo/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'Esto es put';
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ciclo/{id}
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
	 * DELETE /ciclo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}