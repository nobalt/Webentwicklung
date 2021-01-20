<?php namespace App\Models;
use CodeIgniter\Model;

class AufgabenModel extends Model{
    public function getData(){
        $result = $this->db->query('Select
                                            webentwicklung.aufgaben.Name,
                                            webentwicklung.aufgaben.Beschreibung,
                                            webentwicklung.reiter.Name As Name1,
                                            webentwicklung.mitglieder.Username
                                        From
                                            webentwicklung.aufgaben Inner Join
                                            webentwicklung.reiter On webentwicklung.aufgaben.Reiter = webentwicklung.reiter.ID Inner Join
                                            webentwicklung.mitglieder On webentwicklung.aufgaben.Ersteller = webentwicklung.mitglieder.ID');

        return $result->getResultArray();
    }

    public function getDataAggregate(){
        $this->aufgaben = $this->db->table('aufgaben');

        $this->aufgaben->select('aufgaben.Name, aufgaben.Beschreibung, reiter.Name, group_concat() as zustaendige');
    }
}