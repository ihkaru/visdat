<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		return view('dash/index');
	}

	public function covid(){
		return view('dash/covid');
	}

	public function ekonomi()
	{
		return view('dash/ekonomi');
	}

}