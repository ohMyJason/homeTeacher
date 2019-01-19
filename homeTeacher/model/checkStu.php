<?php

/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/15
 * Time: 21:59
 */

require '../DBhelper/DBhelper.php';
class checkStu
{
    function connectDB()
    {

        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }


    function __construct()
    {
//      ;
    }


    function mycheck()
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        }


            $sql = "select * from parentapply where (ifPass='1') and (ifReserve='1')";
            $result = $MyDBhelper->conn->query($sql);

        if ($result->num_rows > 0) {

        } else {
            echo "<script> alert('用户名不存在或者密码错误'); </script>";

        }
        return $result;
    }


}