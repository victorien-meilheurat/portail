<?php

class TypeExamens extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('TypeExamen');
            $typeExamens = $this->TypeExamen->getAll();

            $this->render('index', compact('typeExamens'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('TypeExamen');
            $typeExamen = $this->TypeExamen->getById($id);

            $this->render('detail', compact('typeExamen'));
        }
    }
}