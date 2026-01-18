<?php
include_once __DIR__ ."/../entity/user.php";
include_once __DIR__ ."/../../config/database.php";
class  UserRepository
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::getConnection();
    }
    public function addUser($user)
    {
        $role_id = $this->getRoleId($user->getRole()->getName());
        $query = "insert into users (username,email,password,role_id) values (:name,:email,:password,:role_id)";

       
        $stmt = $this->conn->prepare($query);
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getUser();
        var_dump($name);
        exit;
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam('password', $password);
        $stmt->bindParam(':role_id', $role_id);
        $stmt->execute();
    }
     public function getRoleId($roleString)
    {
        $query = "select id from roles where nom = '$roleString' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $role_id = $result["id"];
        return $role_id;
    }
    public function showAll()
    {
        $query = "select * from users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($result as $row) {
            $users[] = new User($row["username"], $row["email"], $row["password"]);
        }
        return $users;
    }
    public function deleteById($id)
    {
        $query = "delete from users where id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    public function findByEmail($email)
    {
        $query = "select * from users where email= '$email'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            return true;
        } else {
            return false;
        }
    }
}
