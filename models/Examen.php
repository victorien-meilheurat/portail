<?php

class Examen extends Model{
    public function __construct(){
        $this->table="examen";
        $this->getConnection();
    }

    public function getNoteByIdUser($id) {
        $sql = "SELECT DISTINCT examen.nom AS nom_exam, matiere.nom AS nom_matiere, cours.nom AS nom_cours, note.note FROM ((((examen INNER JOIN cours ON cours.id=examen.id_cours) INNER JOIN classe ON classe.id=cours.id_classe) INNER JOIN note ON note.id_examen = examen.id) INNER JOIN matiere ON matiere.id=cours.id_matiere) INNER JOIN utilisateur ON utilisateur.id_classe=classe.id WHERE note.id_eleve=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getExamenByIdUser($id) {
        $sql = "SELECT examen.nom AS nom_exam, matiere.nom AS nom_matiere, cours.nom AS nom_cours, cours.dateFin AS date FROM (((examen INNER JOIN cours ON cours.id=examen.id_cours) INNER JOIN classe ON classe.id=cours.id_classe) INNER JOIN matiere ON matiere.id=cours.id_matiere) INNER JOIN utilisateur ON utilisateur.id_classe=classe.id WHERE cours.dateFin>NOW() AND utilisateur.id=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getByProf($id)
    {
        $sql = "SELECT examen.id AS id_examen, examen.nom AS nom_examen FROM examen INNER JOIN cours ON cours.id=examen.id_cours WHERE cours.id_prof=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function noter($id)
    {
        $sql = "SELECT utilisateur.id AS id_eleve, utilisateur.nom AS nom_eleve, examen.id AS id_examen FROM ((utilisateur INNER JOIN classe ON classe.id=utilisateur.id_classe) INNER JOIN cours ON cours.id_classe=classe.id) INNER JOIN examen ON examen.id_cours=cours.id WHERE examen.id=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        var_dump($sql);
        return $query->fetchAll();
    }

    public function addNote($id, array $data=[])
    {
        $sql = "INSERT INTO note (id_examen, id_eleve, note) VALUES (".$id.", ".$data[0].", ".$data[1].")";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        
        return null;
    }
}