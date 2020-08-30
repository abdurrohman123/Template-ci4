<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Dashboard', 'isi' => 'dashboard'
		];
		echo view ('layout/wrapper', $data);
	}

	//--------------------------------------------------------------------

}
