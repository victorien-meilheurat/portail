<?php

class Salles extends Controller{
    public function index(){
        $this->loadModel('Salle');
        $salles = $this->Salle->getAll();

        $this->render('index', compact('salles'));
    }
    public function detail($id){
        $this->loadModel('Salle');
        $salle = $this->Salle->getById($id);

        $this->render('detail', compact('salle'));
    }
}