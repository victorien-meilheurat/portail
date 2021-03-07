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
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Matiere');
            $matiere = $this->Matiere->getById($id);

            $this->render('detail', compact('matiere'));
        }
    }

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Matiere');
            $this->Matiere->deleteById($id);
            $matieres = $this->Matiere->getAll();

            $this->render('index', compact('matieres'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Matiere');
            $this->Matiere->add($_POST);
            $matieres = $this->Matiere->getAll();

            $this->render('index', compact('matieres'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Matiere');
            $this->Matiere->update($id, $_POST);
            $matieres = $this->Matiere->getAll();

            $this->render('index', compact('matieres'));
        }
    }
}