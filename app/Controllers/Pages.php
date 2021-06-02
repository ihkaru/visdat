<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function sumber()
	{
		$data = [
			'judul' => 'Sumber Data',
			'activenav'=>'sumber'
		];
		return view('page/data',$data);
	}
	public function kami()
	{
		$data = [
			'judul' => 'Tentang Kami',
			'activenav'=>'kami'
		];
		return view('page/kami',$data);
	}
}