<?php

class Matieres extends Controller{
    public function index(){
        $this->loadModel('Matiere');
        $matieres = $this->Matiere->getAll();

        var_dump($matieres);
    } 
}