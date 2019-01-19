<?php

/**
 * Created by PhpStorm.
 * User: GGboom
 * Date: 2019/1/17
 * Time: 15:48
 */
require '../DBhelper/DBhelper.php';
class applyinfo
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

    function getapply($applyID)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {

            $sql = "SELECT * FROM parentapply,parent WHERE parent.parentID=parentapply.parentID AND applyID=$applyID";
            $result = $MyDBhelper->conn->query($sql);

            return $result;
        }
//        if ($result->num_rows > 0) {
////    $row=mysqli_fetch_assoc($result);
//// echo "欢迎登陆".$row["username"];
//            return $result;


//        }
    }
}