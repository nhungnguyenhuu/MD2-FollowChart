<?php

class Admin
{
    private $id;
    private $name;
    private $password;
    public function __construct($name, $password)
    {
        $this->name= $name;
        $this->password = $password;
    }
    public function login($name, $password)
    {
        if($name =="admin");
    }

}

