<?php

class Authentification extends Controller{
    public function login(){
        $this->loadModel('Utilisateur');

        $login = $_POST['login'];
        $password = $_POST['password'];

        $utilisateur = $this->Utilisateur->login($login, $password);
        
        if ($utilisateur!=null) {
            $_SESSION['utilisateur'] = $utilisateur;
            $this->render('index', compact('utilisateur'));
        } else {
            require_once(ROOT.'controllers/Main.php');

            $controller = new Main();
            $controller->index();
        }
    } 
}