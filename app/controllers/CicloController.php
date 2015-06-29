<?php

class CicloController extends \BaseController {


	public function index()
	{
		$data = Ciclo::paginate(5);

		return View::make('ciclo.index', compact('data'));
	}

	public function create()
	{
		return View::make('ciclo.create');
	}

	public function store()
	{
		$data = [
			'ciclo'		=> Input::get('ciclo').Input::get('periodo'),
			'periodo' 	=> Input::get('periodo')
		];

		$rules = [
			'ciclo'	=> 'required | unique:ciclos,ciclo',
			'periodo' => 'required'
		];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$ciclo = new Ciclo();
			$ciclo->ciclo = Input::get('ciclo').Input::get('periodo');
			$ciclo->status = 0;
			$ciclo->save();

			return Redirect::route('ciclo.show', $ciclo->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
	}

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

	public function status($id)
	{
		$data = DB::table('ciclos')->update(['status' => false]);

		$ciclo = Ciclo::find($id);

		$ciclo->status = 1;
		$ciclo->save();

		return Redirect::action('CicloController@show', $id);

	}
	public function destroy($id)
	{
		try{
			$data = Ciclo::find($id);
			$data->destroy($id);
			return Redirect::route('ciclos');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}