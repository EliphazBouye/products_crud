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

/*
* @return All data on table
*/
    public function findAll()
    {
        $query = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addOne(string $title,string $price)
    {
        $query = "INSERT INTO products (title, price) VALUES (:title, :price)";
        $stmt = $this->pdo->prepare($query);
        if($stmt->execute([':title' => $title, ':price' => $price])){
            $this->message = "Product added";
        }

    }

    public function getOne( int $id)
    {
        $query = "SELECT * FROM products WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['id' => $id]);

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function updateOne(string $title,string $price, int $id)
    {
        $query = "UPDATE products set title=:title, price=:price WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        if($stmt->execute([':title' => $title, ':price' => $price, 'id' => $id])){
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'index.php';
            header("Location: http://$host$uri/$extra");
        }

    }

    public function deleteOne(int $id)
    {
        $query = "DELETE FROM products WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        if($statement->execute(['id' => $id]))
        {
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'index.php';
            header("Location: http://$host$uri/$extra");
        }
    }

}