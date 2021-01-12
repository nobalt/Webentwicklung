<?php namespace App\Models;

use CodeIgniter\Model;

class ModelPersonen extends Model
{

    public function getData()
    {
        //Übung 6 Aufgabe 1
        $result = $this->db->query('SELECT Username,EMail FROM mitglieder');
        return $result->getResultArray();

    }


}