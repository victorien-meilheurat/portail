<?php

class Roles extends Controller{
    public function index(){
        $this->loadModel('Role');
        $roles = $this->Role->getAll();

        var_dump($roles);
    } 
}