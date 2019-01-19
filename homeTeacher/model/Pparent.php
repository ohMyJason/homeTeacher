<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 23:38
 */

include "../DBhelper/DBhelper.php";


class Pparent{  //因为parent是PHP保留字 所以我取名多加了个

    function connectDB()
    {
        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function  displayMyTeacher(){
        session_start();
        $parentID=$_SESSION['username'];

        $myDBhelper=new DBhelper();

        $sql="SELECT teacher.teacherName,teacher.experience,parentapply.`subject` FROM teacher_student,teacher,parentapply WHERE teacher_student.parentID='{$parentID}' AND teacher.teacherID = teacher_student.teacherID AND teacher_student.applyID =parentapply.applyID";

        $result=$myDBhelper->conn->query($sql);

//        $row=$result->fetch_assoc();

        return $result;

    }

    function displayMyApply(){
        session_start();
        $parentID=$_SESSION['username'];
        $myDBhelper=new DBhelper();
        $sql="SELECT grade,demand,address,phone,`subject`,pay,ifReserve,ifPass FROM parentapply WHERE parentID='$parentID'";
        $result=$myDBhelper->conn->query($sql);
        return $result;

    }


}