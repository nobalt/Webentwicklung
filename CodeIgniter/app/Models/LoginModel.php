<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Database;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;


class LoginModell extends Model{

    public function login($EMail){
        //Übung 6 Aufgabe 2
        $this->person = $this->db->table('mitglieder');
        $this->person->select('Password');
        $this->person->where('EMail', $EMail);
        $result = $this->person->get();

        return $result->getRowArray();

    }

}