<?php

class Cour extends Model{
    public function __construct(){
        $this->table="cours";
        $this->getConnection();
    }
}