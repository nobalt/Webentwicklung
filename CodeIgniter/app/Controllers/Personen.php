<?php namespace App\Controllers;
use App\Models\ModelPersonen;
use CodeIgniter\Controller;

class Personen extends BaseController
{
	public function index()
	{
	   /* //Übung 5 Aufgabe 2
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

 */
        //Übung 6 Aufgabe 1
        $mymodel = new ModelPersonen();
        $data['mitglieder']= $mymodel->getData();

        echo view('Templates/header.php');
        echo view('Personen.php',$data);
        echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

}
