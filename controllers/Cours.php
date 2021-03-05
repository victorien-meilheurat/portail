<?php

class Cours extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $cours = $this->Cour->getAll();

            $this->render('index', compact('cours'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $cour = $this->Cour->getById($id);

            $this->render('detail', compact('cour'));
        }
    }
}