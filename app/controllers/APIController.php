<?php

class APIController extends \BaseController {

	public function index($id)
	{
		$g = Grupo::find($id);
		$m = $g->materia;
		return Response::json(['grupo' => $g]);
	}

}