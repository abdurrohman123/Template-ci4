<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $data=[
		// 	'title' => 'Dashboard', 'isi' => 'dashboard'
		// ];
		// return view ('layout/wrapper', $data);
		$data = [];
		return view('index');
		// echo view ('/index', $data);

	}

	//--------------------------------------------------------------------

}
