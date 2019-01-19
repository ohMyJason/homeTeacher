<?php

require '../DBhelper/DBhelper.php';



class finddata
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

    function papply()
{
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
    $MyDBhelper = $this->connectDB();

    if ($MyDBhelper->conn->connect_error) {
        die("连接失败: " . $MyDBhelper->conn->connect_error);
    } else {

        $sql = "SELECT * FROM parentapply,parent WHERE parent.parentID=parentapply.parentID AND ifpass=0";
        $result = $MyDBhelper->conn->query($sql);

        return $result;
    }
//        if ($result->num_rows > 0) {
////    $row=mysqli_fetch_assoc($result);
//// echo "欢迎登陆".$row["username"];
//            return $result;


//        }
}

    function tapply()
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "SELECT * FROM parentapply,teacher,teacher_student WHERE  parentapply.parentID=teacher_student.parentID AND teacher.teacherID=teacher_student.teacherID AND teacher_student.ifPass=0";
            $result = $MyDBhelper->conn->query($sql);

            return $result;
        }


    }

    function relation()
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "SELECT * FROM teacher,parent,teacher_student WHERE  parent.parentID=teacher_student.parentID AND teacher.teacherID=teacher_student.teacherID ORDER BY teacher_student.applyID";
            $result = $MyDBhelper->conn->query($sql);

            return $result;
        }


    }

}



