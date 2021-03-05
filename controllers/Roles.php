<?php

class Roles extends Controller{
    public function index(){
        $this->loadModel('Role');
        $roles = $this->Role->getAll();

        $this->render('index', compact('roles'));
    }
    public function detail($id){
        $this->loadModel('Role');
        $role = $this->Role->getById($id);

        $this->render('index', compact('role'));
    }
}