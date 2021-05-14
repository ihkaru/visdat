<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'dashboard'=>'index',
			'judul' => 'Ekonomi dan Covid 19'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

	public function covid(){
		$data = [
			'dashboard'=>'covid',
			'judul' => 'Covid 19'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

	public function ekonomi()
	{
		$data = [
			'dashboard'=>'ekonomi',
			'judul' => 'Ekonomi'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

}