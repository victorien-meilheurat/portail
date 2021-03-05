<?php

class Authentification extends Controller{
    public function index(){
        $this->loadModel('Utilisateur');
        $utilisateurs = $this->Utilisateurs->getAll();

        
    } 
}