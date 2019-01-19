<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/17
 * Time: 11:01
 */


include "../model/teachRecord.php";
session_start();
$teacherID=$_SESSION['username'];

$studentName=$_POST['studentname'];
$grade=$_POST['grade'];
$recordDate=$_POST['teachdate'];
$subject=$_POST['subject'];
$startTime=$_POST['starttime'];
$overTime=$_POST['overtime'];
$teachDetail=$_POST['teachdetail'];
$studentDetail=$_POST['studentdetail'];





$teachRecord =new teachRecord();
//$teacher=new teacher();
//$parentApply=new parentApply();


//$ApplyID=$parentApply->getApplyID($studentName);
//
//$payment=$parentApply->getPayment($ApplyID);
//$resultSalary=$teacher->disMySalary();
//
//$rowSalary=$resultSalary->fetch_assoc();
//
//$salary=$rowSalary['salary'];
//
//$teacher->addSalary($teacherID,$payment,$salary);
$teachRecord->coachRecord($teacherID,$studentName,$grade,$recordDate,$subject,$startTime,$overTime,$teachDetail,$studentDetail);



