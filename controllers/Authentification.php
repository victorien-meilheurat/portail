<?php

class Authentification extends Controller{
    public function log(){
        $this->loadModel('Utilisateur');
        $utilisateur = $this->Utilisateur->getConnexion();

        if ($utilisateur!=null) {
            
            $this->render('index', compact('utilisateur'));
        } else {

            //$this->render('detail', compact('role'));
        }
    } 
}