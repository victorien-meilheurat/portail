<?php

class Ressources extends Controller{

    public function postexamen()
    {
        if ($_SESSION['utilisateur']['id_role']==3) {
            $uploadexamen = './folder_examens/';
            $uploadfile = $uploadexamen . basename($_FILES['userfile']['name']);

            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

            $this->render('accueil');
        }
    }

    public function postressource()
    {
        if ($_SESSION['utilisateur']['id_role']==4) {
            $uploadresources = './ressources/';
            $uploadfile = $uploadresources . basename($_FILES['userfile']['name']);

            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
        }

        $this->render('index');
    }

    public function index()
    {
        
        $this->render('index');
    }
}