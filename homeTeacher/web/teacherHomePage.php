
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2019/1/16
 * Time: 17:33
 */

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>养肝护肝家教管理系统</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/public.css">
    <style>
        html { overflow: scroll; }
    </style>
</head>
<body>
<div class="public-header-warrp">
    <div class="public-header">
        <div class="content">
            <div class="public-header-logo"><a href=""><img src="images/login_08.gif" height="40" width="40"><h3>养肝护肝家教管理系统</h3></a></div>
            <div class="public-header-admin fr">

                <p class="admin-name"><span style="color:#81def5; font-weight: bold;  "><?php session_start();$user = $_SESSION['username']; echo "$user";?></span>老师 您好！</p>
                <div class="public-header-fun fr">
                    <a href="" class="public-header-man">管理</a>
                    <a href="../login.html" class="public-header-loginout">安全退出</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
    <div class="content">
        <!-- 内容模块头 -->
        <div class="public-ifame-header">
            <ul>
                <li class="ifame-item logo">
                    <div class="item-warrp">
                        <a href="#">
                            <h3 class="logo-title">励志成为最好的家教平台</h3>
                            <img src="images/fire.jpg" alt="" style="width: 30px;height: 30px">
                            <p class="logo-des">创建于 2019/1/14 22:22:22</p>
                        </a>
                    </div>
                </li>
                <li class="ifame-item"><div class="item-warrp"><span>注册时间：2018/7/1 00:00:00<br>VIP有效期：</span></div></li>
                <li class="ifame-item"><div class="item-warrp" style="border:none"><span>网站浏览量：99999</span></div></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!-- 左侧导航栏 -->
        <div class="public-ifame-leftnav">
            <div class="public-title-warrp">
                <div class="public-ifame-title ">
                    <a href="">首页</a>
                </div>
            </div>
            <ul class="left-nav-list">
                <li class="public-ifame-item" >
                    <a id="menu1">辅导课程</a>
                    <div class="ifame-item-sub" id="list1">
                        <ul >
                            <li><a href="checkRecord.php" target="content">辅导课程记录</a></li>
                            <li><a href="coachRecord.php" target="content">添加辅导课程</a></li>
                        </ul>
                    </div>
                </li>
                <li class="public-ifame-item" >
                    <a id="menu2">工资结算</a>
                    <div class="ifame-item-sub" id="list2">
                        <ul id="list2">

                            <li><a href="getSalary.php" target="content">申请工资结算</a></li>
                        </ul>
                    </div>
                </li>
                <li class="public-ifame-item" >
                    <a id="menu3"">学员管理</a>
                    <div class="ifame-item-sub" id="list3">
                        <ul>
                            <li><a href="attention.html" target="content">添加新学员</a></li>
                            <li><a href="checkStudent.php" target="content">查看已经预约的学员</a></li>
                            <li><a href="applyDont.php" target="content">申请不教学员</a></li>
                        </ul>
                    </div>
                </li>
                <li class="public-ifame-item">
                    <a  id="menu4">查看资料</a>
                    <div class="ifame-item-sub"  id="list4">
                        <ul>
                            <li><a href="dataEbook.php" target="content">电子书</a></li>
                            <li><a href="dataPlan.php" target="content">教案</a></li>
                            <li><a href="dataExam.php" target="content">试卷</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- 右侧内容展示部分 -->
        <div class="public-ifame-content">
            <iframe name="content" src="main.html" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script>
    $().ready(function(){
        // var item = $(".public-ifame-item");


        $("#menu1").click(function(){
            $("#list1").slideToggle();
        });
        $("#menu2").click(function(){
            $("#list2").slideToggle();
        });
        $("#menu3").click(function(){
            $("#list3").slideToggle();
        });
        $("#menu4").click(function(){
            $("#list4").slideToggle();
        });
        $("#menu5").click(function(){
            $("#list5").slideToggle();
        });
        $("#menu6").click(function(){
            $("#list6").slideToggle();
        });
    });
</script>
</body>
</html>