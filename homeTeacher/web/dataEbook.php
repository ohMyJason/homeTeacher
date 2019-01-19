<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看电子书</title>
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/add.css" rel="stylesheet" type="text/css" />
    <!--<style type="text/css">-->
    <!--*{margin:0px; padding:0px;}-->
    <!--body,html,.wrapper,.nav{height:100%; max-height:100%;}-->
    <!--.top, .foot{position:absolute; width:100% ;left:0;; z-index:20;}-->
    <!--.top{height:100px; background:red;}-->
    <!--.wrapper{ background:blue;box-sizing:border-box;padding:100px 0;height:100%;}/* 这里的height怎样才能自适应？absolute属性会穿过foot*/-->
    <!--.nav{position:relative;overflow-y:auto;}-->
    <!--.foot{position:absolute; height:100px;bottom:0px; background:gray;}-->
    <!--</style>-->
    <style type="text/css">
        /*.nav_bg{*/
        /*width: 1500px;*/
        /*height: 80px;*/

        /*margin-bottom: 10px;*/

        /*}*/
        .top{height:15%; background:red;background:url(images/th.gif) repeat-x;}
        .nav{height:30%; background:blue;}/* 这里的height怎样才能自适应*/
        /*.foot{height:50%; background:black;background:url(images/th.gif) repeat-x;}*/
        .content{
            width: 1500px;
            margin-bottom: 10px;
            background:url(images/th.gif) repeat-x;
        }
        .nav{
            padding-top: 20px;


        }
        .content{
            width: 1500px;
            margin-bottom: 10px;
            height: 150px;
            background:url(images/th.gif) repeat-x;
        }
        .content1{
            float: left;
            width: 15%;

        }
        .content7{
            float: left;
            width: 30%;

        }
        /*.content8{*/
        /*float: left;*/
        /*width: 33%;*/

        /*}*/
        /*.content9{*/
        /*float: left;*/
        /*width: 33%;*/

        /*}*/

        .font1{
            color: black;
            font-style: italic;
        }
        .foot{
            width: 1500px;
            margin-top: 300px;
            background:url(images/th.gif) repeat-x;

        }
        .foot1{
            width: 1500px;
            margin-top: 100px;
            margin-bottom: 100px;
            height: 200px;
            background:url(images/th.gif) repeat-x;

        }
        .foot12{
            text-align: center;
        }
        .forminfo1{padding-left:23px;}
        .forminfo li{
            margin-bottom:13px;
            clear:both;}
        .forminfo li label{
            width:86px;
            line-height:25px;
            display:block;
            float:left;}
        .forminfo li i{
            color:#7f7f7f;
            padding-left:20px;
            font-style:normal;}
        .forminfo li b{
            color:red;
            margin-left:5px;}
        .forminfo li cite{
            display:block;
            padding-top:10px;}
        .seachform{
            height:42px; }
        .seachform li{
            float:left;
            margin-right:15px;}
        .seachform li label{
            padding-right:10px;
            float:left;
            line-height:32px;}
        .scinput{width:180px;
            height:32px;
            line-height:32px;
            border-top:solid 1px #a7b5bc;
            border-left:solid 1px #a7b5bc;
            border-right:solid 1px #ced9df;
            border-bottom:solid 1px #ced9df;
            background:url(images/inputbg.gif)
            repeat-x; text-indent:10px; color:#999;}
        .scbtn{
            width:85px;
            height:35px;
            background:url(images/btnbg.png) no-repeat center;
            font-size:14px;font-weight:bold;
            color:#fff;
            cursor:pointer;
            border-radius:3px; }
        .tools{
            clear:both;
            height:35px;
            margin-top: 10px;
            margin-bottom:8px;}
        select{
            background:url(images/inputbg.gif) repeat-x;
            _background:none;
            _border:none;height:32px;
            border-top:solid 1px #a7b5bc;
            border-left:solid 1px #a7b5bc;
            border-right:solid 1px #ced9df;
            border-bottom:solid 1px #ced9df;
            padding:5px;}
        body{
            width: 1500px;

        }
    </style>
</head>
<body>
<!--<div class="place"><span>您当前的位置：</span>-->
<!--<ul class="placeul">-->
<!--<li><a href="main.html" target="_parent">管理首页</a></li>-->
<!--<li><a href="#">人员调动</a></li>-->
<!--<li><a href="#">人事调动登记</a></li>-->
<!--</ul>-->
<!--</div>-->
<!--<div class="tools">-->
<!--<form id="form2" action="chaxun_2.php" enctype="multipart/form-data" method="get">-->
<!--<ul class="seachform">-->

<!--<li>-->
<!--<input type="text" name="wnum" class="scinput" placeholder="请输入员工编号" />-->
<!--</li>-->
<!--<li>-->
<!--<input name="searchBtn" id="sub" type="submit" class="scbtn" style='width:85px; height: 35px;   line-height: 20px;   padding-left: 5px;border-radius: 5px;border: none;color:#626cff;background:#ffea8f;' value="查询"/>-->
<!--</li>-->
<!--</ul>-->
<!--</form>-->
<!--</div>-->
<!--<div class="nav_bg">-->
<!--<div class="nav">-->
<!--<h1 style="color: black " >人事调动登记</h1>-->
<!--</div>-->

<!--</div>-->
<!--<hr color="#4A4FFF" width="1500" >-->
<div>

    <div class="content">
        <h3>小学电子书</h3><br/>

        <div class="content1" >
            <h3 >小学一年级</h3><br/>
            <ul class="forminfo">
                <li >
                    <form action="../controller/checkEbookController.php" method='get' enctype='multipart/form-data' id="myDiv" name="xiaoxue1" ><input type="hidden" name="ebook" value="电子书"><input type="hidden" name="yinianji" value="一年级" ><input type="submit" name="yuwen1" id="yw1" value="语文"></form>
                </li>
                <li >
                    <form action="../controller/checkEbookController.php" method='get' enctype='multipart/form-data' id="myDiv" name="xiaoxue1" ><input type="hidden" name="ebook" value="电子书"><input type="hidden" name="yinianji" value="一年级" ><input type="submit" name="yuwen1" id="yw1" value="数学"></form>
                </li>
                <li >
                    <input type="submit"  name="yingyu1"  id="yy1"   value="英语">
                </li>


            </ul>

        </div>


            <div class="content1" >
                <h3 >小学二年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <form action="../controller/checkEbookController.php" method='get' enctype='multipart/form-data' id="myDiv" name="xiaoxue2" ><input type="hidden" name="ebook" value="电子书"><input type="hidden" name="ernianji" value="二年级" ><input type="submit" name="yuwen1" id="yw1" value="语文"></form>
                    </li>
                    <li >
                        <input type="submit"  name="shuxue2"  id="sx2"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu2"  id="yy2"   value="英语">
                    </li>


                </ul>

            </div>

        <form name="xiaoxue3">
            <div class="content1" >
                <h3 >小学三年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen3"  id="yw3"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue3"  id="sx3"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu3"  id="yy3"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue4">
            <div class="content1" >
                <h3 >小学四年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen4"  id="yw4"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue4"  id="sx4"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu4"  id="yy4"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue5">
            <div class="content1" >
                <h3 >小学五年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen5"  id="yw5"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue5"  id="sx5"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu5"  id="yy5"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue6">
            <div class="content1" >
                <h3 >小学六年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen6"  id="yw6"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue6"  id="sx6"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu6"  id="yy6"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
    </div>
    <div class="foot1">
        <h3>初中电子书</h3><br/>
        <form name="chuzhong7">
            <div class="content7">
                <h3>初一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen7"  id="yw7"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue7"  id="sh7"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu7"  id="yy7"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli7"  id="wl7"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue7"  id="hx7"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu7"  id="sw7"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi7"  id="zz7"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi7"  id="ls7"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili7"  id="dl7"   value="地理">
                    </li>

                </ul>
            </div>
        </form>

        <form name="chuzhong8">
            <div class="content7">
                <h3>初二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen8"  id="yw8"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue8"  id="sh8"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu8"  id="yy8"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli8"  id="wl8"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue8"  id="hx8"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu8"  id="sw8"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi8"  id="zz8"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi8"  id="ls8"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili8"  id="dl8"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="chuzhong9">
            <div class="content7">
                <h3>初三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen9"  id="yw9"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue9"  id="sh9"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu9"  id="yy9"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli9"  id="wl9"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue9"  id="hx9"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu9"  id="sw9"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi9"  id="zz9"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi9"  id="ls9"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili9"  id="dl9"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
    <div class="foot">
        <h3>高中电子书</h3><br/>
        <form name="gaozhong10">
            <div class="content7">
                <h3>高一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen10"  id="yw10"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue10"  id="sh10"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu10"  id="yy10"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli10"  id="wl10"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue10"  id="hx10"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu10"  id="sw10"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi10"  id="zz10"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi10"  id="ls10"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili10"  id="dl10"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong11">
            <div class="content7">
                <h3>高二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen11"  id="yw11"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue11"  id="sh11"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu11"  id="yy11"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli11"  id="wl11"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue11"  id="hx11"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu11"  id="sw11"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi11"  id="zz11"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi11"  id="ls11"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili11"  id="dl11"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong12">
            <div class="content7">
                <h3>高三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen12"  id="yw12"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue12"  id="sh12"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu12"  id="yy12"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli12"  id="wl12"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue12"  id="hx12"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu12"  id="sw12"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi12"  id="zz12"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi12"  id="ls12"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili12"  id="dl12"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
</div>
</body>
</html>
