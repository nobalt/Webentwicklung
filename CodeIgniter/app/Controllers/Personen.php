<?php namespace App\Controllers;

use App\Models\ModelPersonen;

class Personen extends BaseController
{

    public function index(){
        $data['title_name'] = 'Personen';
        $personenModel = new ModelPersonen();
        $data['mitarbeiter'] = $personenModel->getPersonenData();


        echo view('Templates/Header');
        echo view('Personen.php', $data);
        echo view('Templates/Footer');
    }
    /*  public function index()
  {
    //Übung 5 Aufgabe 2
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

       //Übung 6 Aufgabe 1
       $mymodel = new ModelPersonen();
       $data['mitglieder']= $mymodel->getData();

       echo view('Templates/header.php');
       echo view('Personen.php',$data);
       echo view('Templates/footer.php');
*/

    public function button_filter(){         // entspricht index_edit
        $personenModel = new ModelPersonen();

        if (isset($_POST['editButton'])){
            $editData = $personenModel->getOne($_POST['editButton']);
            $data['editEMail'] = $editData['email'];
            $data['editName'] = $editData['username'];
            $data['editID'] = $editData['id'];
        }

        if(isset($_POST['deleteButton'])){  // TODO

            $personenModel->deletePerson($_POST['deleteButton']);
        }

        if(isset($_POST['saveButton'])){
            if($_POST['saveButton'] == null){
                if($_POST['username'] != null && $_POST['email'] != null){
                    $insertData['username'] = $_POST['username'];
                    $insertData['email'] = $_POST['email'];
                    $insertData['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $personenModel->createPerson($insertData);
                }
            }else{
                $updateData['username'] = $_POST['username'];
                $updateData['email'] = $_POST['email'];
                $personenModel->updatePerson($_POST['saveButton'], $updateData);
            }
        }

        $data['title_name'] = 'Personen';
        $personenModel = new ModelPersonen();
        $data['mitarbeiter'] = $personenModel->getPersonenData();


        echo view('Templates/Header');
        echo view('Personen.php', $data);
        echo view('Templates/Footer');
    }
}