<?php

abstract class Model{

    private $host="localhost";
    private $db_name="portailetudiant";
    private $user_name="root";
    private $password="";

    protected $_connexion;

    public $table;
    //public $id;

    public function getConnection(){
        $this->_connexion=null;

        try{
            $this->_connexion = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->user_name, $this->password);
            $this->_connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erreur de connexion : ".$exception->getMessage();
        } 
    }
    public function getById($id){
        $sql = "select * from ".$this->table." where id=".$id;//$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }
    public function getAll(){
        $sql = "select * from ".$this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}