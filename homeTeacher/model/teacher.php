<?php

/**
 * Created by PhpStorm.
 * User: ZQQ&Jason
 * Date: 2019/1/16
 * Time: 23:36
 */
require '../DBhelper/DBhelper.php';
class teacher
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


    function disMyStudent()
    {
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {
            echo "连接成功";
            session_start();
            $teacher  =$_SESSION['username'];
            $sql = "SELECT parent.studentName FROM parent,teacher_student WHERE teacher_student.parentID=parent.parentID AND teacher_student.ifPass='1' AND teacher_student.teacherID = '{$teacher}'";
            $result = $MyDBhelper->conn->query($sql);


        }

        if ($result->num_rows > 0) {

        } else {
            echo "<script> alert('数据库中没有数据'); </script>";

        }
        return $result;
    }


    function disMyRecord($teacherID){
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {
//            echo "连接成功";






//            echo "--------------------- $teacherID ----------------------------";
            $sql = "SELECT studentName,grade,recordDate,startTime,overTime,`subject` FROM coachrecord WHERE coachrecord.teacherID ='{$teacherID}'";
            if($result = $MyDBhelper->conn->query($sql)){
//                echo "<script> alert('查询成功'); </script>";
                return $result;
            }else{
                echo "<script> alert('用户名不存在或者密码错误');window.location.href='../web/main.html'; </script>";
            }


        }
    }


    function disMySalary($teacherID){

        $myDBhelper = $this->connectDB();


        $sql="SELECT salary FROM teacher WHERE teacherID='{$teacherID}'";

        if($result=$myDBhelper->conn->query($sql)){


            if ($row=$result->fetch_assoc()){

                $salary=$row['salary'];

                return $salary;

            }else{
                echo "找不到你的工资，请联系管理员";
            }


        }else{
            echo "error";
        }


    }


    function getSalary($teacherID,$getSalary,$salary){

        $myDBhelper = $this->connectDB();

        $salary=$salary-$getSalary;

        $sql="UPDATE teacher SET teacher.salary = '{$salary}' WHERE teacher.teacherID='{$teacherID}'";

        if($myDBhelper->conn->query($sql)){
            echo "<script> alert('工资结算成功，感谢使用养肝护肝家教平台');window.location.href='../web/getSalary.php'</script>;";
        }else{
            echo "<script> alert('工资结算失败，请联系管理员')</script>;";
        }




    }






}