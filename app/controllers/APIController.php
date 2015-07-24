<?php

class APIController extends \BaseController {

	public function especialidad()
	{
		$data = Carrera::all();
		return Response::json($data);
	}

}