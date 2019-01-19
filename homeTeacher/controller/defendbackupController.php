<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/defend.php");

$key=$_POST['key'];

$a =new defend();
$a->backup($key);
//echo "---------------- .$result->num_rows.+++"


?>