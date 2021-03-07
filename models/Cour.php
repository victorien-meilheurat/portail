<?php

class Cour extends Model{
    public function __construct(){
        $this->table="cours";
        $this->getConnection();
    }

    public function planning($id)
    {
        $sql = "SELECT matiere.nom AS nom_matiere, cours.nom AS nom_cours, cours.dateDebut, cours.dateFin FROM ((cours INNER JOIN classe ON classe.id=cours.id_classe) INNER JOIN matiere ON matiere.id=cours.id_matiere) INNER JOIN utilisateur ON utilisateur.id_classe=classe.id WHERE utilisateur.id=".$id." ORDER BY cours.dateDebut";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getPlanningProf($id)
    {
        $sql = "SELECT cours.nom AS nom_cours, matiere.nom AS nom_matiere, cours.dateDebut, cours.dateFin FROM cours INNER JOIN matiere ON matiere.id=cours.id_matiere WHERE cours.id_prof=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}