<?php

class Salle extends Model{
    public function __construct(){
        $this->table="salle";
        $this->getConnection();
    }

    public function getPlanning()
    {
        $sql = "SELECT *, cours.id as id_cours FROM cours INNER JOIN salle ON salle.id=cours.id_salle";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}