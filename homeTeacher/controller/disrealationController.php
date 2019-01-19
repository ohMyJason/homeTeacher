<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/ifpass.php");

$applyID=$_POST['applyid'];
$a =new ifpass();
$a->disconnect($applyID);
//echo "---------------- .$result->num_rows.+++"


?>