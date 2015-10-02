<?php

class GrupoController extends \BaseController {

	public function index($id)
	{
		$data = DB::table('grupos')
			->join('turnos', 'turno_id', '=', 'turnos.id')
			->join('semestres', 'semestre_id', '=', 'semestres.id')
			->join('carreras', 'carrera_id', '=', 'carreras.id')
			->select('grupo', 'carreras.id as carrera_id', 'turno', 'semestre', 'carrera', 'grupos.status', 'grupos.id as g_id', 'semestres.id as s_id')
			->where('carrera_id', '=', $id)
			->orderBy('turno')
			->orderBy('grupo')
			->paginate(6);

		if (count($data) == 0) {
			$link = URL::route('grupo.new', $id);
			$title = 'Nuevo grupo';
			return View::make('null', compact('link', 'title'));
		}
		return View::make('grupo.index', compact('data', 'id'));
	}

	public function create($id)
	{
		$data = Carrera::find($id);
		$turno = Turno::all();
		$semestre = Semestre::where('status', '=', '1')->get();
		return View::make('grupo.create', compact('data', 'turno', 'semestre'));
	}

	public function store()
	{
		$data = Input::except('_token');

		$rules = [
			'grupo'			=> 'required | unique:grupos,grupo',
			'carrera_id'	=> 'required',
			'turno_id'		=> 'required',
			'semestre_id'	=> 'required'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			$grupo = new grupo();
			$grupo->grupo = Input::get('grupo');
			$grupo->carrera_id = Input::get('carrera_id');
			$grupo->turno_id = Input::get('turno_id');
			$grupo->semestre_id = Input::get('semestre_id');
			$grupo->save();
			
			return Redirect::route('grupo.show', $grupo->id);
		 } 

		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function show($id)
	{
		$data = Grupo::find($id);
		return View::make('grupo.show', compact('data'));
	}

	public function status()
	{
		$data = Input::get('semestre');

		if ($data) {
			foreach ($data as $d) {
				Grupo::where('semestre_id', '!=', [$d])
					->update(['status' => 0]);
			}
			foreach ($data as $d) {
				Grupo::where('semestre_id', '=', [$d])
					->update(['status' => 1]);
			}
			return Redirect::back();
		}
		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /grupo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			$data = Grupo::find($id);
			$data->destroy($id);
			return Redirect::route('especialidades');
		}catch(\Illuminate\Database\QueryException $e){
			return Redirect::back()
				->with('mensaje_error', 'Información relacionada')
				->withInput();
			
		}
	}

}