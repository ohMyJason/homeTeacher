<?php
/**
 * Created by PhpStorm.
 * User: GGboom
 * Date: 2019/1/17
 * Time: 16:20
 */
include("../model/ifpass.php");

$agreeID=$_POST['applyid'];
$ifPass=$_POST['ifPass'];

if($ifPass==1){
    $a=new ifpass();
    $a->passteacher($agreeID);
}

if ($ifPass==0){
    $a=new ifpass();
    $a->notpassteacher($agreeID);
}