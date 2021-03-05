<?php

class TypeExamens extends Controller{
    public function index(){
        $this->loadModel('TypeExamen');
        $typeExamens = $this->TypeExamen->getAll();

        $this->render('index', compact('typeExamens'));
    }
    public function detail($id){
        $this->loadModel('TypeExamen');
        $typeExamen = $this->TypeExamen->getById($id);

        $this->render('detail', compact('typeExamen'));
    }
}