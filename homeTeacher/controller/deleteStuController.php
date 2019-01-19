<?php
/**
 * Created by PhpStorm.
 * User: ZQQ
 * Date: 2019/1/17
 * Time: 0:07
 */
require '../model/deleteStu.php';
$apply=$_GET['delete'];
$delete=new deleteStu();
$delete->myadelete($apply);