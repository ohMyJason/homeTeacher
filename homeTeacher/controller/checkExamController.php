<?php
/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/17
 * Time: 11:27
 */
require '../model/checkData.php';
$subject=$_GET['yuwen1'];
$grade1=$_GET['yinianji'];
$grade2=$_GET['ernianji'];
if(isset($grade1))
{
    $type=$_GET['exam'];
    $data=new checkData();
    $result=$data->mydata($subject,$grade1,$type);
    $url=$result->fetch_assoc();
    header('Location: http://'.$url['Url'].'' );
}

if(isset($grade2))
{
    $type=$_GET['exam'];
    $data=new checkData();
    $result=$data->mydata($subject,$grade2,$type);
    $url=$result->fetch_assoc();
    header('Location: http://'.$url['Url'].'' );
}