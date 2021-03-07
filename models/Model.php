<?php

abstract class Model{

    private $host="localhost:3307";
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
        $sql = "select * from ".$this->table." where id=".$id;
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

    public function deleteById($id){
        $sql = "delete from ".$this->table." where id=".$id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return null;
    }

    public function add(array $datas = []){
        $sql = "INSERT INTO ".$this->table." (";
        foreach($datas as $key => $value){
            $sql .= $key.", ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUES (";
        foreach($datas as $key => $value){
            $sql .= "'".$value."', ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";

        $query = $this->_connexion->prepare($sql);
        $query->execute();
        
        return null;
    }

    public function update($id, array $datas = []){
        $sql = "UPDATE ".$this->table." SET ";
        foreach($datas as $key => $value){
            $sql .= $key."='".$value."', ";//boucle
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE id=".$id;

        $query = $this->_connexion->prepare($sql);
        $query->execute();
        
        return null;
    }
}