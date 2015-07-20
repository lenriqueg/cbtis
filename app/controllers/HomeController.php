<?php

class HomeController extends BaseController {

	public function index()
	{
		if (Request::ajax()) {
			return 'ajax';
		}
		return View::make('hello');
	}

}
