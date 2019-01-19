<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 21:53
 */


include "../DBhelper/DBhelper.php";
session_start();

$parentID=$_SESSION['username'];

$myDBhelper=new DBhelper();

$sql="SELECT blance FROM parent WHERE parentID='$parentID'";

$result=$myDBhelper->conn->query($sql);
if($row=$result->fetch_assoc()) {
    $blance = $row['blance'];
}else{
    $blance = "您的余额为空";
}