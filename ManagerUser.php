<?php

require 'Connect.php';

class ManagerUser
{
    private $pdo;
    public $data;
    public $row;
    public function __construct()
    {
        $this->pdo = (new Connect())->getPdo();
    }


    public function getUser(string $pseudo)
    {
        $query = "SELECT pseudo, password FROM users WHERE pseudo=:pseudo";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['pseudo' => $pseudo]);

        $this->data = $statement->fetch(PDO::FETCH_OBJ);
        $this->row = $statement->rowCount();
    }

    public function setUser($pseudo, $email, $password, $ip)
    {
        $query = "INSERT INTO users(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['pseudo' => $pseudo, 'email' => $email, 'password' => $password, 'ip' => $ip]);

        header('Location: /');
    }
}