<?php

class Examen extends Model{
    public function __construct(){
        $this->table="examen";
        $this->getConnection();
    }
}