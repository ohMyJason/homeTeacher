<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 21:50
 */

include "../model/payment.php";

$payment=$_POST['payment'];

$blacne=$_POST['blance'];

$myPayment=new payment();

$myPayment->updateBlance($payment,$blacne);