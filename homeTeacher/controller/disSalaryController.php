<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/17
 * Time: 13:38
 */


include "../model/teacher.php";

$teacher=new teacher();
session_start();
$teacherID=$_SESSION['username'];

$salary=$teacher->disMySalary($teacherID);

