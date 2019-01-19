<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/17
 * Time: 2:05
 */

include "../model/teacher.php";

$teacher=new teacher();

$result=$teacher->disMyStudent();
