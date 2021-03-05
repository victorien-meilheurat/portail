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

    public function planningGlobal(){
        if ($_SESSION['utilisateur']['id_role']==2) {

        }
    }
}