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

	public function edit($id)
	{
		$data = Carrera::find($id);

		return View::make('carrera.edit', compact('data'));
	}

	public function update($id)
	{
		$data = Input::except('_token');
		$rules = ['carrera' => 'required'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			$carrera = Carrera::find($id);
			$carrera->carrera = Input::get('carrera');
			$carrera->save();

			return Redirect::route('esp.show', $id);
		}

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}
	
	public function status($id)
	{
		$carrera = Carrera::find($id);

		if ($carrera->status == 1) 
		{
			$carrera->status = 0;
			$carrera->save();
			
			return Redirect::action('CarreraController@show', $id);
		}

		$carrera->status = 1;
		$carrera->save();

		return Redirect::action('CarreraController@show', $id);

	}

	public function destroy($id)
	{
		DB::beginTransaction(function($id){
			$data = Carrera::find($id);
			$data->destroy($id);

			DB::commit();
			return Redirect::route('especialidades');
		});

		// return Redirect::back()
		// 	->with('mensaje_error', 'Existen informacion relacionada')
		// 	->withInput();;
	}

}