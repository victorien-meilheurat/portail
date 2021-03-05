<?php

class Cours extends Controller{
    public function index(){
        $this->loadModel('Cour');
        $cours = $this->Cour->getAll();

        $this->render('index', compact('cours'));
    }
    public function detail($id){
        $this->loadModel('Cour');
        $cour = $this->Cour->getById($id);

        $this->render('detail', compact('cour'));
    }
}