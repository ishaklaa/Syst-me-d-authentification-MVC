<?php
include_once __DIR__ . "/../view/register.php";
include_once __DIR__ ."/../model/sevices/AuthService.php";

class Authcontroller
{
    protected $authService;
    public function __construct()
    {
        $this->authService = new AuthService();
    }
   public function inputCheck()
{
    $errors = [];
    $success = false;

    if (isset($_POST["inscription"])) {
        $name = trim($_POST["nom"] ?? '');
        $email = trim($_POST["email"] ?? '');
        $role = trim($_POST["role"] ?? ''); 
        $password = $_POST["psw"] ?? '';

        if (empty($name)) $errors[] = "Nom requis.";
        if (empty($email)) $errors[] = "Email requis.";
        if (empty($role)) $errors[] = "Rôle requis.";  
        
        
        
        if (empty($password)) $errors[] = "Mot de passe requis.";

        if (!empty($password) && !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/', $password)) {
            $errors[] = "Mot de passe: 8+ chars, majuscule, minuscule, chiffre.";
        }

        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email invalide.";
        }

        if (empty($errors)) {
            try {
            $hassedPsw = password_hash($password, PASSWORD_DEFAULT);
            $this->authService->register($name,$email,$hassedPsw,$role);
            echo"hello";
            } catch (\Throwable $th) {
                throw new  Exception("error");
            }
            $hassedPsw = password_hash($password, PASSWORD_DEFAULT);
            $this->authService->register($name,$email,$hassedPsw,$role);
            echo"hello";
        }else{
              echo "no";
        }}else{
            echo "9lwa";
            exit;
        }
}}
