<?php

class Roles extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Role');
            $roles = $this->Role->getAll();

            $this->render('index', compact('roles'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Role');
            $role = $this->Role->getById($id);

            $this->render('detail', compact('role'));
        }
    }
    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Role');
            $roles = $this->Role->deleteById($id);

            $this->render('index', compact('roles'));
        }
    }
}