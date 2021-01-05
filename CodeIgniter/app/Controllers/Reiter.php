<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Reiter extends BaseController
{
	public function index()
	{
        echo view('Templates/header.php');
        echo view('Reiter.php');
        echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
