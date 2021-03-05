<?php

class Utilisateur extends Model{
    public function __construct(){
        $this->table="utilisateur";
        $this->getConnection();
    }

    public function login(string $login, string $password){
        $sql = "select * from ".$this->table." where login='".$login."' and password='".$password."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        var_dump($query);

        return $query->fetch();
    }
}