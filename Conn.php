<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "teste";
    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
    }
}

