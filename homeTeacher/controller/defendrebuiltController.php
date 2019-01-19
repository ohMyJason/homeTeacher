<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/15
 * Time: 8:53
 */
include("../model/defend.php");

$filename= $_FILES["file"]["name"];

$a =new defend();
$a->rebuilt($filename);


?>