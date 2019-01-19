<?php
/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/16
 * Time: 9:59
 */
include '../model/addStu.php';
$applyID=$_GET['yuyue'];

$add=new addStu();
$add->myadd($applyID);
