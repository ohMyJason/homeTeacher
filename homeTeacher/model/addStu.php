<?php

/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/16
 * Time: 10:03
 */
require '../DBhelper/DBhelper.php';
class addStu
{
    function connectDB()
    {

        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function myadd($applyID)
    {
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        }



            $sql1 = "select parentID from parentapply where (applyID='$applyID') ";
            $result = $MyDBhelper->conn->query($sql1);
            session_start();
            $user =$_SESSION['username'];
            while ($a=$result->fetch_assoc()){
                $sql2="INSERT INTO teacher_student VALUES('$a[parentID]','$user','$applyID','0')";
                if ($MyDBhelper->conn->query($sql2) === TRUE) {
                    echo "<script> var r=confirm('预约成功,是否继续');if(r==true){window.location.href ='../web/addStudent.php';}else {window.location.href='../web/teacherHomePage.php';}</script>";
                } else {
                    echo "Error: " . $sql2 . "<br>" . $MyDBhelper->conn->error;
                }
            }



        return $result;
    }
}