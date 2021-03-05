<?php

class TypeExamen extends Model{
    public function __construct(){
        $this->table="type_examen";
        $this->getConnection();
    }
}