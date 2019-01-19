<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Jason-->
<!-- * Date: 2019/1/17-->
<!-- * Time: 12:59-->
<!-- */-->

<?php
include "../model/teacher.php";

$teacher=new teacher();

session_start();

$teacherID=$_SESSION['username'];

$result=$teacher->disMyRecord($teacherID);






