<?php

class Examens extends Controller{
    public function index(){
        $this->loadModel('Examen');
        $examens = $this->Examen->getAll();

        $this->render('index', compact('examens'));
    }
    public function detail($id){
        $this->loadModel('Examen');
        $examen = $this->Examen->getById($id);

        $this->render('detail', compact('examen'));
    }
}