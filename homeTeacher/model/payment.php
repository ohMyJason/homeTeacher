<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 22:18
 */


include "../DBhelper/DBhelper.php";

class payment{


    function connectDB()
    {
        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }

    function  updateBlance($payment,$blance){
        $myDBhelper=$this->connectDB();

        $newBlance=$payment+$blance;

        session_start();
        $parentID=$_SESSION['username'];

        $sql="UPDATE parent SET parent.blance = '{$newBlance}' WHERE parent.parentID='{$parentID}'";

        if($myDBhelper->conn->query($sql)){
            echo "<script> alert('缴费成功，感谢使用养肝护肝家教平台');window.location.href='../web/parentPayment.php'</script>;";
        }else{
            echo "<script> alert('缴费失败，请联系管理员')</script>;";
        }

    }


}