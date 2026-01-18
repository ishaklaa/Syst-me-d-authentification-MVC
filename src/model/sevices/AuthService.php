<?php
include_once __DIR__ . "/../repositories/userRepository.php";
session_start();
class AuthService{
protected $userRepository;
   public function __construct()
   {
    $this->userRepository=new UserRepository();
   }
    public function register($name,$email,$password,$role){
        try {
        $user = new User($name,$email,$password);
        $user->setRole($role);
        $this->userRepository->addUser($user);
        } catch (\Throwable $th) {
            throw new Exception("error in add");
        }
        
        
    }
    
}