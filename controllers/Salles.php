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

    public function planning(){
        if ($_SESSION['utilisateur']['id_role']==2 || $_SESSION['utilisateur']['id_role']==4) {
            $this->loadModel('Salle');
            $salles = $this->Salle->getPlanning();

            $this->render('planning', compact('salles'));
        }
    }

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Salle');
            $salles = $this->Salle->deleteById($id);
            $salles = $this->Salle->getAll();

            $this->render('index', compact('salles'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Salle');
            $this->Salle->add($_POST);
            $salles = $this->Salle->getAll();

            $this->render('index', compact('salles'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Salle');
            $this->Salle->update($id, $_POST);
            $salles = $this->Salle->getAll();

            $this->render('index', compact('salles'));
        }
    }
}