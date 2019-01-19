<?php

/**
 * Created by PhpStorm.
 * User: GGboom
 * Date: 2019/1/17
 * Time: 15:48
 */
require '../DBhelper/DBhelper.php';
class ifpass
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

    function passparent($agreeID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "UPDATE parentapply SET ifPass=1 WHERE applyID=$agreeID";
            $result = $MyDBhelper->conn->query($sql);
            if($MyDBhelper->conn->affected_rows){
                echo "<script> alert('发布成功');window.location.href='../web/auditparent.php'; </script>";

            }
            else{
                echo "发布错误";
            }

        }


//
    }
    function notpassparent($disapplyID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "DELETE FROM parentapply WHERE  applyID=$disapplyID";
            $result = $MyDBhelper->conn->query($sql);

            if($MyDBhelper->conn->affected_rows){
                echo "<script> alert('删除成功！');window.location.href='../web/auditparent.php'; </script>";

            }
            else{
                echo "发布错误";
            }

        }




//
    }
    function notpassteacher($agreeID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "UPDATE teacher_student SET ifPass=1 WHERE applyID=$agreeID";
            $result = $MyDBhelper->conn->query($sql);
            if($MyDBhelper->conn->affected_rows){
                echo "<script> alert('发布成功');window.location.href='../web/auditteacher.php'; </script>";

            }
            else{
                echo "发布错误";
            }

        }


//
    }
    function passteacher($agreeID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "UPDATE teacher_student SET ifPass=1 WHERE applyID=$agreeID";
            $result = $MyDBhelper->conn->query($sql);
            if($MyDBhelper->conn->affected_rows){
                echo "<script> alert('发布成功');window.location.href='../web/auditteacher.php'; </script>";

            }
            else{
                echo "发布错误";
            }

        }


//
    }
    function disconnect($applyID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "DELETE From teacher_student  WHERE applyID=$applyID";
            $result = $MyDBhelper->conn->query($sql);
            if($MyDBhelper->conn->affected_rows){
                echo "<script> alert('取消关联成功');window.location.href='../web/relationmanage.php'; </script>";

            }
            else{
                echo "取消关联失败";
            }

        }


//
    }
}
