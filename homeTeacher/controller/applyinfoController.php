<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/applyinfo.php");
session_start();
$applyID=$_SESSION['a'];
$a =new applyinfo();
$result=$a->getapply($applyID);





?>