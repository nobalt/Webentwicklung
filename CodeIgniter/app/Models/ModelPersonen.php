<?php namespace App\Models;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Database;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;


class ModelPersonen extends Model
{

    public function getPersonenData()
    {
        $result = $this->db->query('SELECT id,username,email FROM todo.mitglieder');
        return $result->getResultArray();
    }

    public function getOne($person_id){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        $this->personen->where('id', $person_id);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function createPerson($insertData){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->insert($insertData);
    }

    public function deletePerson($person_id){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('id', $person_id);
        $this->personen->delete();
    }

    public function updatePerson($person_ID, $updateData){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('id', $person_ID);
        $this->personen->update($updateData);
    }
}