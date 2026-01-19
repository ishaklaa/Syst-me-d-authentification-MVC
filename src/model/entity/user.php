<?php

// include_once __DIR__ . "/../entity/role.php";
namespace Src\Model\Entity;
use src\Model\Entity\Role;
class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private Role $role;
    public function __construct($name,$email,$password,$id=null)
    {
       $this->id=$id;
       $this->name=$name;
       $this->email=$email;
       $this->password=$password;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
     public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->id=$email;
    }
     public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->id=$password;
    }
    public function setRole($role){
        $this->role=$role;
    }
    public function getRole(){
        return $this->role;
    }
}