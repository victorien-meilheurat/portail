<?php

class Salle extends Model{
    public function __construct(){
        $this->table="salle";
        $this->getConnection();
    }
}