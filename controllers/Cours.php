<?php

class Cours extends Controller{
    public function index()
    {
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $cours = $this->Cour->getAll();

            $this->render('index', compact('cours'));
        }
    }

    public function detail($id)
    {
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $cour = $this->Cour->getById($id);

            $this->render('detail', compact('cour'));
        }
    }

    public function delete($id)
    {
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $this->Cour->deleteById($id);
            $cours = $this->Cour->getAll();

            $this->render('index', compact('cours'));
        }
    }

    public function add(

    ){
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $this->Cour->add($_POST);
            $cours = $this->Cour->getAll();

            $this->render('index', compact('cours'));
        }
    }

    public function update($id)
    {
        if ($_SESSION['utilisateur']['id_role']==1) {
            $this->loadModel('Cour');
            $this->Cour->update($id, $_POST);
            $cours = $this->Cour->getAll();

            $this->render('index', compact('cours'));
        }
    }

    public function planning($id)
    {
        $this->loadModel('Cour');
        $cours = $this->Cour->planning($id);

        $this->render('planning', compact('cours'));
    }

    public function planningProf($id)
    {
        $this->loadModel('Cour');
        $cours = $this->Cour->getPlanningProf($id);

        $this->render('planning', compact('cours'));
    }
}