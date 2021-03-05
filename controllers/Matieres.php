<?php

class Matieres extends Controller{
    public function index(){
        $this->loadModel('Matiere');
        $matieres = $this->Matiere->getAll();

        $this->render('index', compact('matieres'));
    }
    public function detail($id){
        $this->loadModel('Matiere');
        $matiere = $this->Matiere->getById($id);

        $this->render('detail', compact('matiere'));
    }
}