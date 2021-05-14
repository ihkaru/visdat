<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function sumber()
	{
		$data = [
			'judul' => 'Sumber Data'
		];
		return view('page/data',$data);
	}
	public function kami()
	{
		$data = [
			'judul' => 'Sumber Data'
		];
		return view('page/kami');
	}
}