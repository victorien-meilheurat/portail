<?php

class Salles extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Salle');
            $salles = $this->Salle->getAll();

            $this->render('index', compact('salles'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Salle');
            $salle = $this->Salle->getById($id);

            $this->render('detail', compact('salle'));
        }
    }

    public function planningGlobal(){
        if ($_SESSION['utilisateur']['id_role']==2) {

        }
    }
}