<?php

// Database Connection
class Model
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'phpcrud';
    private $conn;

    function __construct()
    {

        $chk = $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($chk->connect_error) {
            echo 'Connection Failed.';
        } else {
                echo "";
            //return $this->conn;
        }
    }

    // function for insert records;

    public function insertRecord($POSTDATA)
    {
        $name = $POSTDATA['name'];
        $email = $POSTDATA['email'];
        $sql = "insert into users(name,email) values('$name','$email')";
        $result = $this->conn->query($sql);
        if($result){
            header('location:index.php?msg=ins');
        }else {
            echo 'error'. $sql.'<br>'.$this->conn->error;
        }
    }
}

?>