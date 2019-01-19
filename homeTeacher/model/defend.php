<?php
session_start();
header("Content-type:text/html;charset=utf-8");


include "../DBhelper/DBhelper.php";



class defend
{


    function connectDB()
    {
        $MyDBhelper = new DBhelper();
        return $MyDBhelper;
    }


    function __construct()
    {
//      ;
    }



    function backup($key)
    {
//         $myLoginDao=new loginDao();
//        $result=$myLoginDao->resultLogin($username,$password);
        $MyDBhelper = $this->connectDB();

        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {
            $findkey = "SELECT * From admin";
            $result = $MyDBhelper->conn->query($findkey);
            while ($row = $result->fetch_assoc()) {
                if ($key == $row['password'])
                    $key = "true";
            }
            if($key=="true") {
                $mysql = "set names utf8;\r\n";
                $MyDBhelper->conn->query("set names utf8");
                $q1 = mysqli_query($MyDBhelper->conn, "show tables");
                while ($t = mysqli_fetch_array($q1)) {
                    $table = $t[0];
                    $q2 = mysqli_query($MyDBhelper->conn, "show create table `$table`");
                    $sql = mysqli_fetch_array($q2);
                    $mysql .= $sql['Create Table'] . ";\r\n";

                    $q3 = mysqli_query($MyDBhelper->conn, "select * from `$table`");
                    while ($data = mysqli_fetch_assoc($q3)) {
                        $keys = array_keys($data);
                        $keys = array_map('addslashes', $keys);
                        $keys = join('`,`', $keys);
                        $keys = "`" . $keys . "`";
                        $vals = array_values($data);
                        $vals = array_map('addslashes', $vals);
                        $vals = join("','", $vals);
                        $vals = "'" . $vals . "'";
                        $mysql .= "insert into `$table`($keys) values($vals);\r\n";
                    }
                }
                $filename = $MyDBhelper->dbname . date('Y-m-d') . ".sql";
                $fp = fopen($filename, 'w');
                fputs($fp, $mysql);
                fclose($fp);
                echo "<script>alert('备份成功！');
                                history.go(-2);</script>";
            }
            else{
                echo "<script>alert('密码错误，重新输入！');history.go(-1);</script>";
            }
            }

        }


    function rebuilt($file)//
    {
        $MyDBhelper = $this->connectDB();
        if ($MyDBhelper->conn->connect_error) {
            die("连接失败: " . $MyDBhelper->conn->connect_error);
        } else {
            //将表导入数据库
            header("Content-type: text/html; charset=utf-8");
            $result = mysqli_query($MyDBhelper->conn, "show table status from `".$MyDBhelper->dbname."`");
            while ($data = mysqli_fetch_array($result)) {
                $MyDBhelper->conn->query("DROP TABLE `$data[Name]`");

            }
            $_sql = file_get_contents($file);//写自己的.sql文件
            $_arr = explode(';', $_sql);
            $_conn = new mysqli($MyDBhelper->servername, $MyDBhelper->username1, $MyDBhelper->password, $MyDBhelper->dbname);//第一个参数为域名，第二个为用户名，第三个为密码，第四个为数据库名字
            if ($_conn->connect_error) {
                echo "<script>alert('数据库连接出错！');history.go(-1);</script>";
            } else {
                //执行sql语句
                $_conn->query('set names utf8;'); //设置编码方式
                foreach ($_arr as $_value) {
                    $_conn->query($_value . ';');
                }
                echo " <script>alert('数据库重建成功！');history.go(-1);</script>";
            }
            $_conn->close();
            $_conn = null;
        }
    }

}