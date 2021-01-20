<?php namespace App\Models;
use CodeIgniter\Model;

class ProjekteModel extends Model{

    public function getProjekte(){
        $result = $this->db->query('Select
                                        projekte.ID,
                                        projekte.Name
                                    From
                                        webentwicklung.projekte');

        return $result->getResultArray();
    }

    public function selectProjekt($projekt_id){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('Name, Beschreibung');
        $this->projekte->where('id', $projekt_id);
        $result = $this->projekte->get();

        return $result->getRowArray();
    }

    public function createProjekt($insertData){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert($insertData);
    }

    public function deleteProjekt($projekt_id){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('id', $projekt_id);
        $this->projekte->delete();
    }

    public function updateProjekt($projekt_id, $updateData){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('id', $projekt_id);
        $this->projekte->update($updateData);
    }
}