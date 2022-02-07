<?php

class Student
{
    private $name;
    private $age;
    private $address;
    public function __construct($name, $age)
    {
        $this->name= $name;
        $this->age = $age;

    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


}