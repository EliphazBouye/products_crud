<?php


class Connect
{
    private $pdo;
    private $config = [
        'host' => 'localhost',
        'dbname' => 'products_crud',
        'user' => 'root',
        'password' => 'root'
    ];

    public function __construct()
    {
        $dsn = "mysql:host={$this->config['host']};dbname={$this->config['dbname']}";
        $options = [];
        try {
            if($this->pdo == null)
            {
                $this->pdo = new PDO($dsn, $this->config['user'], $this->config['password'], $options);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }catch (PDOException $e) {
            throw new ErrorException("Error : ".$e->getMessage());
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }

}