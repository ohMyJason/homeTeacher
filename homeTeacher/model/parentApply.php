<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 18:18
 */


require "../DBhelper/DBhelper.php";
class parentApply{


    function connectDB()
    {
        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }


    function addApply($parentID,$grade,$demand,$address,$phone,$subject,$pay){
        $MyDBhelper=$this->connectDB();

        if($MyDBhelper->conn->connect_error){
            echo "连接错误";
        }else{
            echo "连接成功";
            $sql = "INSERT INTO `parentApply` (`parentID`, `grade`, `demand`, `address`, `phone`, `subject`, `pay`, `ifPass`, `ifReserve`) VALUES ('{$parentID}', '{$grade}', '{$demand}', '{$address}', '{$phone}', '{$subject}', '{$pay}', '0', '0')";



            if ($MyDBhelper->conn->query($sql)){
                echo "<script> alert('申请提交成功,很快就会有老师接单啦~');window.location.href='../web/checkApply.php';</script>";
                echo "$sql";
            }else{
                echo "<script>alert('申请提交失败，请联系后端工程师，这人写的代码有问题');</script>";
//                echo "----------$parentID,$grade,$demand,$address,$phone,$subject,$pay--";
//                echo "$sql";
            }

        }

    }







}