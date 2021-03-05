<?php

class Matieres extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Matiere');
            $matieres = $this->Matiere->getAll();

            $this->render('index', compact('matieres'));
        }
    }
    public function detail($id){
        $this->loadModel('Matiere');
        $matiere = $this->Matiere->getById($id);

        $this->render('detail', compact('matiere'));
    }
}