<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Projekte extends BaseController
{
	public function index()
	{
        echo view('Templates/header.php');
        echo view('Projekte.php');
        echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
