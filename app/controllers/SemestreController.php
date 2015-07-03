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

		if (count($data) == 0) {
			$link = route('sem.new');
			$title = 'Nuevo semestre';
			return View::make('null', compact('link', 'title'));
		}

        return View::make('semestre.index', compact('data'));
	}

	public function create()
	{
		return View::make('semestre.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /semestre
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::except('_token');

		$rules = ['semestre'	=> 'required | unique:semestres,semestre'];

		$validacion = Validator::make($data, $rules);

		if ($validacion->passes()) {
			$semestre = new Semestre();
			$semestre->semestre = Input::get('semestre');
			$semestre->status = 1;
			$semestre->save();

			return Redirect::route('sem.show', $semestre->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validacion->messages());
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

	public function status($id)
	{
		$data = Semestre::find($id);

		if ($data->status == 1) 
		{
			$data->status = 0;
			$data->save();
			
			return Redirect::action('SemestreController@show', $id);
		}

		$data->status = 1;
		$data->save();

		return Redirect::action('SemestreController@show', $id);

	}

	public function destroy($id)
	{
		try{
			$data = Semestre::find($id);
			$data->destroy($id);
			return Redirect::route('semestres');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
		}
	}

}