<?php

class Utilisateurs extends Controller{
    public function index(){
        $this->loadModel('Utilisateur');
        $utilisateurs = $this->Utilisateur->getAll();

        $this->render('index', compact('utilisateurs'));
    }
    public function detail($id){
        $this->loadModel('Utilisateur');
        $utilisateur = $this->Utilisateur->getById($id);

        $this->render('detail', compact('utilisateur'));
    }
}