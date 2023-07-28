<?php

//!Databse connection with PDO method
class database
{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbpassword = "";
    private $dbname = "advancecrud";
    protected $conn;

    //!contructor
    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
            $option = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword, $option);
        } catch (PDOException $e) {
            echo "Connection Error" . $e->getMessage();
        }
    }
}

//!Another way for databse connection
// $conn = mysqli_connect("localhost", "root", "", "advancecrud");

// if ($conn) {
//     echo "Success";
// } else {
//     echo "Failed";
// }

?>