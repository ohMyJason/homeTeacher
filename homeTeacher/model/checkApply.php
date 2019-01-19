<?php

/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/16
 * Time: 21:53
 */
require '../DBhelper/DBhelper.php';
class checkApply
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


    function mycheckApply1()
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        }
            session_start();
            $user =$_SESSION['username'];

            $sql = "SELECT parent.studentName,parentapply.grade,parentapply.address,parentapply.phone,parentapply.subject FROM parent,parentapply,teacher_student WHERE teacher_student.parentID = parent.parentID AND teacher_student.applyID = parentapply.applyID AND teacher_student.teacherID = $user AND teacher_student.ifPass='0'";
            $result = $MyDBhelper->conn->query($sql);




        if ($result->num_rows > 0) {
//    $row=mysqli_fetch_assoc($result);
// echo "欢迎登陆".$row["username"];
//确保重定向后，后续代码不会被执行

            //exit;
        } else {
            echo "<script> alert('用户名不存在或者密码错误11'); </script>";

        }
        return $result;
    }

}