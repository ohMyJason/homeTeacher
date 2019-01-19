<?php

/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/17
 * Time: 1:32
 */
require '../DBhelper/DBhelper.php';
class checkData
{
    function connectDB()
    {

        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function mydata($subject,$grade,$type)
    {
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        }



        $sql1 = "select Url from edudata where Grade='$grade' AND Type='$type' AND Subject='$subject'";
        $result = $MyDBhelper->conn->query($sql1);





        return $result;
    }
}