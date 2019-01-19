<?php
/**
 * Created by PhpStorm.
 * User: GGboom
 * Date: 2019/1/17
 * Time: 15:25
 */

$a=$_POST['choose'];
session_start();
$_SESSION['a']=$a;
header("location:../web/applyinfo.php");