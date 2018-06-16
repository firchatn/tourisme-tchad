<?php

class Home extends \CodeIgniter\Controller
{
    protected $helpers = ['url'];

	public function index()
	{
		echo view('admin/index');
	}
}
