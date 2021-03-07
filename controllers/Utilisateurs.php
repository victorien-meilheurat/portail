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
        if ($_SESSION['utilisateur']['id_role']==1 || $_SESSION['utilisateur']['id_role']==2) {
            $this->loadModel('Utilisateur');
            $utilisateur = $this->Utilisateur->getById($id);

            $this->render('detail', compact('utilisateur'));
        }
    }

    public function profetud(){
        if ($_SESSION['utilisateur']['id_role']==2) {
            $this->loadModel('Utilisateur');
            $utilisateurs = $this->Utilisateur->getProfEtud();

            $this->render('index', compact('utilisateurs'));
        }
    }

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Utilisateur');
            $utilisateurs = $this->Utilisateur->deleteById($id);
            $utilisateurs = $this->Utilisateur->getAll();

            $this->render('index', compact('utilisateurs'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Utilisateur');
            $this->Utilisateur->add($_POST);
            $utilisateurs = $this->Utilisateur->getAll();

            $this->render('index', compact('utilisateurs'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Utilisateur');
            $this->Utilisateur->update($id, $_POST);
            $utilisateurs = $this->Utilisateur->getAll();

            $this->render('index', compact('utilisateurs'));
        }
    }

    public function etudiantToProf($id)
    {
        if ($_SESSION['utilisateur']['id_role']==4 && $_SESSION['utilisateur']['id']==$id) {
            $this->loadModel('Utilisateur');
            $utilisateurs = $this->Utilisateur->getEtudiantToProf($id);

            $this->render('etudianttoprof', compact('utilisateurs'));
        }
    }
}