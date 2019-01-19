<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>人事管理系统</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/public.css">
    <script language="javascript">

        var t = null;

        t = setTimeout(time,1000);//开始执行

        function time()

        {

            clearTimeout(t);//清除定时器
            dt = new Date();
            var y=dt.getYear()+1900;
            var mm=dt.getMonth()+1;
            var d=dt.getDate();
            var weekday=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
            var day=dt.getDay();
            var h=dt.getHours();
            var m=dt.getMinutes();
            var s=dt.getSeconds();
            if(h<10){h="0"+h;}
            if(m<10){m="0"+m;}
            if(s<10){s="0"+s;}
            document.getElementById("timeShow").innerHTML =  "现在的时间为："+y+"年"+mm+"月"+d+"日"+weekday[day]+""+h+":"+m+":"+s+"";
            t = setTimeout(time,1000); //设定定时器，循环执行

        }

    </script>
</head>
<body>
<div class="public-header-warrp">
    <div class="public-header">
        <div class="content">
            <div class="public-header-logo"><a href=""><img src="images/login_08.gif" height="40" width="40"><h3>网讯人事管理系统</h3></a></div>
            <div style="width: 30%;height: 80px ;text-;line-height: 50px; position: absolute;left: 8cm;top:0.5cm;text-align: center;"id="timeShow"></div>
            <div class="public-header-admin fr">

                <p class="admin-name"><span style="color:#81def5; font-weight: bold;  ">
                        <?php session_start();

                        $user = $_SESSION['username']; echo "$user";?></span>管理员 您好！</p>
                <div class="public-header-fun fr">
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
                            <h3 class="logo-title">一个默默无闻火起来的网站</h3>
                            <img src="images/fire.jpg" alt="" style="width: 30px;height: 30px">

                        </a>
                    </div>
                </li>
                <li class="ifame-item"><div class="item-warrp"><span></span></div></li>
                <li class="ifame-item"><div class="item-warrp" style="border:none"><span></span></div></li>
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
                    <a  href="auditparent.php" target="content">审核家长申请</a>
                </li>
                <li class="public-ifame-item" >
                    <a href="auditteacher.php" target="content">审核老师申请</a>
                </li>
                <li class="public-ifame-item" >
                    <a href="relationmanage.php" target="content">管理关联关系</a>
                </li>
                <li class="public-ifame-item">
                    <a   href="defend.html" target="content">系统维护</a>
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

</body>
</html>