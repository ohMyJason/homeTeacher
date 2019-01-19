<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/finddata.php");


$a =new finddata();
$result=$a->relation();
//echo "---------------- .$result->num_rows.+++"


?>