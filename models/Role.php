<?php

class Role extends Model{
    public function __construct(){
        $this->table="role";
        $this->getConnection();
    }
}