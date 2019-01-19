<?php
session_start();
header("Content-type:text/html;charset=utf-8");


include "../DBhelper/DBhelper.php";



 class login
 {


     function connectDB()
     {
         $MyDBhelper = new DBhelper();
         return $MyDBhelper;
     }


     function __construct()
     {
     }


     function mylogin($username, $password)
     {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
         $MyDBhelper = $this->connectDB();
         session_start();
         $_SESSION['username'] = $username;
         if ($MyDBhelper->conn->connect_error) {
             die("连接失败: " . $MyDBhelper->conn->connect_error);
         } else {
             echo "连接成功";

             $sql = "SELECT * FROM teacher WHERE teacherID='$username' AND `password`='$password'";
             $sql_2 ="SELECT * FROM parent  WHERE parentID='$username' AND `password`='$password'";
             $sql_3 ="SELECT * FROM admin  WHERE adminID='$username' AND `password`='$password' ";
             $result = $MyDBhelper->conn->query($sql);
             $result_2 = $MyDBhelper->conn->query($sql_2);
             $result_3 = $MyDBhelper->conn->query($sql_3);

         }
         if ($result->num_rows > 0) {
//    $row=mysqli_fetch_assoc($result);
// echo "欢迎登陆".$row["username"];
             header("location:../web/teacherHomePage.php");

//确保重定向后，后续代码不会被执行

             exit;
         }elseif ($result_2->num_rows > 0){

             header("location:../web/parentHomePage.php");
         }
         elseif ($result_3->num_rows > 0){
             header("location:../web/masterHomePage.php");
         }
         else {
             echo "<script> alert('用户名不存在或者密码错误');parent.location.href='../login.html'; </script>";

         }
     }

 }


