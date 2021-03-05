<?php

class Utilisateurs extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Utilisateur');
            $utilisateurs = $this->Utilisateur->getAll();

            $this->render('index', compact('utilisateurs'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Utilisateur');
            $utilisateur = $this->Utilisateur->getById($id);

            $this->render('detail', compact('utilisateur'));
        }
    }

    public function profetud(){
        if ($_SESSION['utilisateur']['id_role']==2) {

        }
    }
}