<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Personen extends BaseController
{
	public function index()
	{
	    //Aufgabe 2
	    $data['personen'] = array(
        0 => array(
            'id' => 1,
            'Name' => 'Max Mustermann',
            'E-Mail' => 'mustermann@muster.de',
            'In-Projekt' => 'Ja'
        ),
        1 => array(
            'id' => 2,
            'Name' => 'Petra Müller',
            'E-Mail' => 'petra@mueller.de',
            'In-Projekt' => 'Nein'
        )
        );


        echo view('Templates/header.php');
        echo view('Personen.php',$data);
        echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
