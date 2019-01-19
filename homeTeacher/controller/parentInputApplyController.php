<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 17:23
 */

header("Content-type:text/html;charset=utf-8");
include "../model/parentApply.php";
session_start();
$parentID=$_SESSION['username'];
$grade=$_POST['grade'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$demand=$_POST['demand'];
$pay=$_POST['pay'];

$grade = iconv("gbk","utf-8",$grade);
$subject = iconv("gbk","utf-8",$subject);
$address = iconv("gbk","utf-8",$address);
$demand = iconv("gbk","utf-8",$demand);


$apply=new parentApply();

$apply->addApply($parentID,$grade,$demand,$address,$phone,$subject,$pay);

echo  "----$parentID----,$grade---,$subject---,$pay----,$phone,---$address---,$demand---";

