<?php

class Classes extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Classe');
            $classes = $this->Classe->getAll();

            $this->render('index', compact('classes'));
        }
    }

    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Classe');
            $classe = $this->Classe->getById($id);

            $this->render('detail', compact('classe'));
        }
    }

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Classe');
            $this->Classe->deleteById($id);
            $classes = $this->Classe->getAll();

            $this->render('index', compact('classes'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Classe');
            $this->Classe->add($_POST);
            $classes = $this->Classe->getAll();

            $this->render('index', compact('classes'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Classe');
            $this->Classe->update($id, $_POST);
            $classes = $this->Classe->getAll();

            $this->render('index', compact('classes'));
        }
    }
}