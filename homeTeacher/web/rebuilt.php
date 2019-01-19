<?php
    function insert($file,$database,$name,$root,$pwd)//
    {
        //将表导入数据库
        header("Content-type: text/html; charset=utf-8");
        $servername = "localhost";
        $username1 = "root";
        $password = "1998314l";
        $dbname = "test";


        $sq = new mysqli($servername,$username1,$password,$dbname);
        $result = mysqli_query($sq,"show table status from `$dbname`");
        while($data=mysqli_fetch_array($result)) {
            $sq->query("DROP TABLE `$data[Name]`");

        }
        $sq->close();



        $_sql = file_get_contents($file);//写自己的.sql文件
        $_arr = explode(';', $_sql);
        $_conn = new mysqli($servername,$username1,$password,$dbname);//第一个参数为域名，第二个为用户名，第三个为密码，第四个为数据库名字
        if ($_conn->connect_error)
        {
            echo "<script>alert('数据库连接出错！');history.go(-1);</script>";
        }
        else{
            //执行sql语句
            $_conn->query('set names utf8;'); //设置编码方式
            foreach ($_arr as $_value) {
                $_conn->query($_value.';');
            }
            echo " <script>alert('数据库重建成功！');history.go(-1);</script>";
        }
        $_conn->close();
        $_conn = null;
    }



insert("$filename","test","localhost","root","");



    //文件名，数据库名字,域名，用户名，密码
?>