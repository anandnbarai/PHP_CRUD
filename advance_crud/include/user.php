<?php

require_once 'connect.php';

class user extends database
{
    protected $tablename = "tbl_user";

    //!Function to add user
    public function add($data)
    {
        if (!empty($data)) {

            //!Initialized as empty arrays
            $fields = $placeholder = [];

            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholder[] = ":{field}";
            }
        }
        // $sql = "insert into {$this->tablename} (username,email,mobile) values (:username,:email,:mobile)";
        $sql = "inseet into {$this->tablename} (" . implode(',', $placeholder) . ") values (" . implode(',', $placeholder) . ")";

        $stmt = $this->conn->prepare($sql);
        try {

        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    //!Function to get rows


    //!Function to get single row


    //!Function to count number of rows


    //!Function to upload photo


    //!Function to Update


    //! Function to Delete


    //!Funtion for search



}

?>