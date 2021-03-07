<?php

class Utilisateur extends Model{
    public function __construct(){
        $this->table="utilisateur";
        $this->getConnection();
    }

    public function login(string $login, string $password){
        $sql = "select * from ".$this->table." where login='".$login."' and password='".$password."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public function getEtudiantToProf($id)
    {
        $sql = "SELECT DISTINCT e.nom, e.prenom, classe.nom AS nom_classe FROM ((utilisateur e INNER JOIN classe ON classe.id=e.id_classe) INNER JOIN cours ON cours.id_classe=classe.id) INNER JOIN utilisateur p ON p.id=cours.id_prof WHERE p.id=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getProfEtud()
    {
        $sql = "select * from ".$this->table." WHERE id_role=3 OR id_role=4";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}