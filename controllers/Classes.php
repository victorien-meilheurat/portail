<?php

class Classes extends Controller{
    public function index(){
        $this->loadModel('Classe');
        $classes = $this->Classe->getAll();

        $this->render('index', compact('classes'));
    }
    public function detail($id){
        $this->loadModel('Classe');
        $classe = $this->Classe->getById($id);

        $this->render('detail', compact('classe'));
    }
}