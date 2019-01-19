<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/login.php");




//判断uname和pwd是否赋值

$username = $_GET['username'];
$password = $_GET['password'];



$login =new login();


$login->mylogin($username,$password);





?>