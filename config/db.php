<?php

class db

{
    private $dbname;
    private $host;
    private $username;
    private $password;
    public $conn;

    public function __construct()
    {
    $this->host="127.0.0.1";
    $this->username="root";
    $this->password="";
    $this->dbname="spellsizzle";
//    MYSQL DATABASE CONNECTIO
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if ($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }

    }


}