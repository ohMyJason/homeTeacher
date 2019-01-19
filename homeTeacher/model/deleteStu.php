<?php

/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/17
 * Time: 0:07
 */
require '../DBhelper/DBhelper.php';
class deleteStu
{
    function connectDB()
    {

        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function myadelete($applyID)
    {
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        }
            session_start();

            $user =$_SESSION['username'];
            $sql = " DELETE FROM teacher_student WHERE teacher_student.applyID=$applyID AND teacherID=$user";

                if ($MyDBhelper->conn->query($sql) === TRUE) {
                    echo "<script> var r=confirm('删除成功,是否继续删除');if(r==true){window.location.href ='../web/applyDont.php';}else {window.location.href='../web/teacherHomePage.php';}</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $MyDBhelper->conn->error;
                }
            }





}