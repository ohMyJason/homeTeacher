<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/17
 * Time: 14:04
 */

include "../model/teacher.php";

$teacher=new teacher();
session_start();
$teacherID=$_SESSION['username'];

$salary=$_POST['salary'];

$getSalary=$_POST['getsalary'];
$teacher->getSalary($teacherID,$getSalary,$salary);
