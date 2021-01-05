<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Aufgaben extends BaseController
{
	public function index()
	{
        echo view('Templates/header.php');
        echo view('Aufgaben.php');
        echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
