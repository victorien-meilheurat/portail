<?php

class Authentification extends Controller{
    public function login(){
        $this->loadModel('Utilisateur');

        $utilisateur = $this->Utilisateur->login();

        if ($utilisateur!=null) {
            
            $this->render('index', compact('utilisateur'));
        } else {
            require_once(ROOT.'controllers/Main.php');

            $controller = new Main();
            $controller->index();
        }
    } 
}