<?php

namespace Src\Model\Entity;
class Role{
    private $id;
    private $name;
    public function __construct($name,$id=null)
    {
        $this->name=$name;
        $this->id=$id;
    }
    public function getName(){
        return $this->name;
    }
}