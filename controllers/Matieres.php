<?php

class Matieres extends Controller{
    public function index(){
        $this->loadModel('Matiere');
        $matieres = $this->Matieres->getAll();

        var_dump($matieres);
    } 
}