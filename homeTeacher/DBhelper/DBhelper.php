<?php


class DBhelper{

    var  $servername ;
    var  $username1;
    var  $password;
    var  $dbname;
    var  $conn;

    function __construct()
    {
        $this->servername = "localhost";
        $this->username1 = "root";
        $this->password = "";
        $this->dbname = "test";

        // 创建连接
        $this->conn = new mysqli($this->servername,$this->username1, $this->password,$this->dbname);
        mysqli_set_charset($this->conn, "utf8");
    }

    function  __destruct()
    {


        mysqli_close($this->conn);

        // TODO: Implement __destruct() method.
    }


}