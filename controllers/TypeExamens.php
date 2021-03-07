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

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('TypeExamen');
            $typeExamens = $this->TypeExamen->deleteById($id);
            $typeExamens = $this->TypeExamen->getAll();

            $this->render('index', compact('typeExamens'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('TypeExamen');
            $this->TypeExamen->add($_POST);
            $typeExamens = $this->TypeExamen->getAll();

            $this->render('index', compact('typeExamens'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('TypeExamen');
            $this->TypeExamen->update($id, $_POST);
            $typeExamens = $this->TypeExamen->getAll();

            $this->render('index', compact('typeExamens'));
        }
    }
}