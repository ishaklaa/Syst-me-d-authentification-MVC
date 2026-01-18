<?php 

include_once "src\model\entity\user.php";

class Candidat extends User{
    public function __construct($name, $email, $password,$id=null)
    {
        parent::__construct($name,$email, $password );
    }
}