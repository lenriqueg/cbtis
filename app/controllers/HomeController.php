<?php

class HomeController extends BaseController {

	public function index()
	{
		return Response::JSON(Carrera::find(1));
	}

}
