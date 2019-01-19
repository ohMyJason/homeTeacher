<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/17
 * Time: 10:57
 */

require "../DBhelper/DBhelper.php";
//include "../model/teachRecord.php";
//include "../model/teacher.php";
//include  "../model/parentApply.php";


class teachRecord
{

    function connectDB()
    {
        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function coachRecord($teacherID,$studentName,$grade,$recordDate,$subject,$startTime,$overTime,$teachDetail,$studentDetail){

        $myDBhelper=$this->connectDB();

        $sql="INSERT INTO `coachrecord` (`teacherID`, `studentName`, `grade`, `recordDate`, `startTime`, `overTime`, `teachDetail`, `studentDetail`, `subject`) VALUES ('{$teacherID}', '{$studentName}', '{$grade}', '{$recordDate}', '{$startTime}', '{$overTime}', '{$teachDetail}', '{$studentDetail}', '{$subject}')";

        if($myDBhelper->conn->query($sql)){
//            echo "<script> alert('添加辅导课程成功，感谢为您的教学服务'); </script>";
        }else{
            echo "<script> alert('添加辅导课程失败，请联系管理员');window.location.href='../web/coachRecord.php'; </script>";
        }

        $applyID=getApplyID($myDBhelper,$studentName);

        echo "----------applyID $applyID-----------";

        $payment=getPayment($myDBhelper,$applyID);

        echo "----------payment $payment-----------";

        $salary=disMySalary($myDBhelper,$teacherID);


        echo "----------salary $salary-----------";
//
        addSalary($myDBhelper,$teacherID,$payment,$salary);

        $parentID=getParentID($myDBhelper,$studentName);


        $blance=getParentBlance($myDBhelper,$parentID);

        echo "----------blacne $blance-----------";



        updataParentBlance($myDBhelper,$parentID,$payment,$blance);


        echo "<script> alert('课程提交完成，工资增加成功，工资增加了".$payment."元，感谢使用养肝护肝家教平台');window.location.href='../web/getSalary.php'</script>;";

    }



}
//
function getApplyID($myDBhelper,$studentName){
//        $myDBhelper = $this->connectDB();


    $sql="SELECT teacher_student.parentID,teacher_student.applyID,parent.studentName FROM teacher_student,parentapply,parent WHERE  teacher_student.applyID=parentapply.applyID  AND parent.parentID=teacher_student.parentID AND parent.studentName='{$studentName}'";

    if ($result=$myDBhelper->conn->query($sql)){
        if ($row=$result->fetch_assoc()){
            return $row['applyID'];
        }
        else{
            echo "找不到ApplyID，请联系管理员";
        }

    }
    else{
        echo "sql error";
    }
}




function getPayment ($myDBhelper,$ApplyID){

//    $myDBhelper=$this->connectDB();

    $sql="SELECT pay FROM parentapply WHERE applyID = '{$ApplyID}'";

    if($result=$myDBhelper->conn->query($sql)){


        if ($row=$result->fetch_assoc()){

            $payment=$row['pay'];

            return $payment;

        }else{
            echo "此申请异常，没有填写报酬";
        }


    }else{
        echo "error";
    }




}


function addSalary($myDBhelper,$teacherID,$payment,$salary){

//    $myDBhelper = $this->connectDB();

    $salary = $payment+$salary;

    $sql="UPDATE teacher SET teacher.salary = '{$salary}' WHERE teacher.teacherID='{$teacherID}'";

    if($myDBhelper->conn->query($sql)){
        echo "工资添加成功";
    }else{
        echo "<script> alert('工资增加失败，请联系管理员')</script>;";
    }


}


function disMySalary($myDBhelper,$teacherID){

//        $myDBhelper = $this->connectDB();


    $sql="SELECT salary FROM teacher WHERE teacherID='{$teacherID}'";

    if($result=$myDBhelper->conn->query($sql)){


        if ($row=$result->fetch_assoc()){

            $salary=$row['salary'];

            return $salary;

        }else{
            echo "找不到你的工资，请联系管理员";
        }


    }else{
        echo "error";
    }


}

function updataParentBlance($myDBhelper,$panertID,$payment,$blance){

    $blance=$blance-$payment;

    echo "--------------- $blance --------";

    $sql="UPDATE parent SET parent.blance = '{$blance}' WHERE parent.parentID='{$panertID}'";

    if($myDBhelper->conn->query($sql)){
        echo "家长余额减少成功";
    }else{
        echo "<script> alert('工资增加失败，请联系管理员')</script>;";
    }


}



function getParentBlance($myDBhelper,$parentID){
    $sql="SELECT blance FROM parent WHERE parentID='{$parentID}'";

    if($result=$myDBhelper->conn->query($sql)){


        if ($row=$result->fetch_assoc()){

            $blacne=$row['blance'];

            return $blacne;

        }else{
            echo "找不到blance，请检查家长账号";
        }


    }else{
        echo "error";
    }



}

function getParentID($myDBhelper,$studentName){
    $sql="SELECT parentID FROM parent WHERE studentName='{$studentName}'";

    if($result=$myDBhelper->conn->query($sql)){


        if ($row=$result->fetch_assoc()){

            $parentID=$row['parentID'];

            return $parentID;

        }else{
            echo "找不到parentID，请检查学生姓名";
        }


    }else{
        echo "error";
    }

}
