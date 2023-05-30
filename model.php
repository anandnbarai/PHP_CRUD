<?php

// Database Connection
class Model
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'phpcrud';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    // function for insert records;
    public function insertRecord($POST)
    {
        $name = $POST['name'];
        $email = $POST['email'];
        $sql = "INSERT INTO users(name,email) values('$name','$email')";
        $result = $this->conn->query($sql);
        if ($result) {
            header('location:index.php?msg=insert');
        } else {
            echo 'error' . $sql . '<br>' . $this->conn->error;
        }
    }
}

?>