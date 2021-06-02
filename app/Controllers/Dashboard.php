<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'dashboard'=>'index',
			'judul' => 'Ekonomi dan Covid 19 Indonesia (Maret 2020 - Maret 2021)',
			'activenav'=>'index'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

	public function covid(){
		$data = [
			'dashboard'=>'covid',
			'judul' => 'Covid 19',
			'activenav'=>'covid'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

	public function ekonomi()
	{
		$data = [
			'dashboard'=>'ekonomi',
			'judul' => 'Ekonomi',
			'activenav'=>'ekonomi'
		];
		return view('dash/'.$data['dashboard'],$data);
	}

}