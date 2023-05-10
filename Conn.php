<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "teste";
    public $conn;

    public function __construct(){
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    }
}
