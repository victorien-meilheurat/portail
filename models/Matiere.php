<?php

class Matiere extends Model{
    public function __construct(){
        $this->table="matiere";
        $this->getConnection();
    }
}