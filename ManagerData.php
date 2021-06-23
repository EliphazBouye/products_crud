<?php

require 'Connect.php';

class ManagerData
{
    private $pdo;

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
}