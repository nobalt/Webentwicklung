<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Aktuelle_Projekte extends BaseController
{
	public function index()
	{
		echo view('Templates/header.php');
		echo view('Aktuelle_Projekte.php');
		echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
