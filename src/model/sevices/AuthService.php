<?php
// include_once __DIR__ . "/../repositories/userRepository.php";
namespace Src\Model\Sevices;
use src\Model\Entity\User;
use src\Model\Repositories\UserRepository;
session_start();
class AuthService{
protected $userRepository;
   public function __construct()
   {
    $this->userRepository=new UserRepository();
   }
    public function register($name,$email,$password,$role){
        
        $user = new User($name,$email,$password);
        $user->setRole($role);
        $this->userRepository->addUser($user);
        
        
        
    }
    
}