<?php

require 'Connect.php';

class ManagerData
{
    private $pdo;
    public $message;

    public function __construct()
    {
        $this->pdo = (new Connect())->getPdo();
    }

    public function findAll()
    {
        $query = sprintf("SELECT * FROM %s", 'products');
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function addOne(string $title,string $price)
    {
        $query = "INSERT INTO products (title, price) VALUES (:title, :price)";
        $stmt = $this->pdo->prepare($query);
        if($stmt->execute([':title' => $title, ':price' => $price])){
            $this->message = "Data inserted successful";
        }

    }
}