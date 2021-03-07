<?php

class Examens extends Controller{
    public function index(){
        if ($_SESSION['utilisateur']['id_role']==1 || $_SESSION['utilisateur']['id_role']==2) {
            $this->loadModel('Examen');
            $examens = $this->Examen->getAll();

            $this->render('index', compact('examens'));
        }
    }
    public function detail($id){
        if ($_SESSION['utilisateur']['id_role']==1 || $_SESSION['utilisateur']['id_role']==2) {
            $this->loadModel('Examen');
            $examen = $this->Examen->getById($id);

            $this->render('detail', compact('examen'));
        }
    }

    public function delete($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Examen');
            $this->Examen->deleteById($id);
            $examens = $this->Examen->getAll();

            $this->render('index', compact('examens'));
        }
    }

    public function add(){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Examen');
            $this->Examen->add($_POST);
            $examens = $this->Examen->getAll();

            $this->render('index', compact('examens'));
        }
    }

    public function update($id){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Examen');
            $this->Examen->update($id, $_POST);
            $examens = $this->Examen->getAll();

            $this->render('index', compact('examens'));
        }
    }

    public function usernote($id) {
        if ($_SESSION['utilisateur']['id']==$id) {
            $this->loadModel('Examen');
            $examens = $this->Examen->getNoteByIdUser($id);

            $this->render('userNote', compact('examens'));
        }
    }

    public function userexamen($id) {
        if ($_SESSION['utilisateur']['id']==$id) {
            $this->loadModel('Examen');
            $examens = $this->Examen->getExamenByIdUser($id);

            $this->render('userExamen', compact('examens'));
        }
    }

    public function profexam($id){
        if ($_SESSION['utilisateur']['id_role']==4) {
            $this->loadModel('Examen');
            $examens = $this->Examen->getByProf($id);
            
            $this->render('profExamen', compact('examens'));
        }
    }

    public function noter($id)
    {
        if ($_SESSION['utilisateur']['id_role']==4) {
            $this->loadModel('Examen');
            $examens = $this->Examen->noter($id);
            
            $this->render('noter', compact('examens'));
        }
    }

    public function sendnote($id){
        $this->loadModel('Examen');
        $this->Examen->addNote($id, $_POST);
        $examens = $this->Examen->noter($id);

        $this->render('noter', compact('examens'));
    }
}