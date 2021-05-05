<?php
  class DB{
    protected $conn = null;
    
    public function Connect(){
      try {
        $servername = "localhost";
        $database   = "NgideMVC";
        $dsn        = "mysql:dbname=$database; host=$servername";
        $username   = "root";
        $password   = "";
        $options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

        $this->conn = new PDO($dsn, $username, $password, $options);
        return $this->conn;

      } catch (PDOException $e) {
        echo 'Connection Error: '.$e->getMessage();
      }
    }

    public function Close(){
      $this->conn = null;
    }

  }
?>