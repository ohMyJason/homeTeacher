<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>试卷</title>
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
        .nav_bg{
            width: 1500px;
            height: 80px;

            margin-bottom: 10px;

        }
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
        /*.content2{*/
        /*float: left;*/
        /*width: 16%;*/

        /*}*/

        /*.content3{*/
        /*float: left;*/
        /*width: 16%;*/

        /*}*/
        /*.content4{*/
        /*float: left;*/
        /*width: 16%;*/

        /*}*/
        /*.content5{*/
        /*float: left;*/
        /*width: 16%;*/

        /*}*/
        /*.content6{*/
        /*float: left;*/
        /*width: 16%;*/

        /*}*/
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
        <h3>小学试卷</h3><br/>

            <div class="content1" >
                <h3 >小学一年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <form action="../controller/checkExamController.php" method='get' enctype='multipart/form-data' id="myDiv" name="xiaoxue1" ><input type="hidden" name="exam" value="试卷"><input type="hidden" name="yinianji" value="一年级" ><input type="submit" name="yuwen1" id="yw1" value="语文"></form>
                    </li>
                    <li >
                        <input type="submit"  name="shuxue1b"  id="sx1b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu1b"  id="yy1b"   value="英语">
                    </li>


                </ul>

            </div>

        <form id= name="xiaoxue2b">
            <div class="content1" >
                <h3 >小学二年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen2b"  id="yw2b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue2b"  id="sx2b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu2b"  id="yy2b"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue3b">
            <div class="content1" >
                <h3 >小学三年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen3b"  id="yw3b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue3b"  id="sx3b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu3b"  id="yy3b"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue4b">
            <div class="content1" >
                <h3 >小学四年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen4b"  id="yw4b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue4b"  id="sx4b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu4b"  id="yy4b"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue5b">
            <div class="content1" >
                <h3 >小学五年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen5b"  id="yw5b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue5b"  id="sx5b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu5b"  id="yy5b"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue6b">
            <div class="content1" >
                <h3 >小学六年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen6b"  id="yw6b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue6b"  id="sx6b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu6b"  id="yy6b"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
    </div>
    <div class="foot1">
        <h3>初中试卷</h3><br/>
        <form name="chuzhong7b">
            <div class="content7">
                <h3>初一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen7b"  id="yw7b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue7b"  id="sh7b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu7b"  id="yy7b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli7b"  id="wl7b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue7b"  id="hx7b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu7b"  id="sw7b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi7b"  id="zz7b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi7b"  id="ls7b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili7b"  id="dl7b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>

        <form name="chuzhong8b">
            <div class="content7">
                <h3>初二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen8b"  id="yw8b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue8b"  id="sh8b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu8b"  id="yy8b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli8b"  id="wl8b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue8b"  id="hx8b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu8b"  id="sw8b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi8b"  id="zz8b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi8b"  id="ls8b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili8b"  id="dl8b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="chuzhong9">
            <div class="content7">
                <h3>初三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen9b"  id="yw9b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue9"  id="sh9b"   value="数学">
                    </li>
                    <li >b
                        <input type="submit"  name="yingyu9b"  id="yy9b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli9b"  id="wl9b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue9b"  id="hx9b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu9b"  id="sw9b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi9b"  id="zz9b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi9b"  id="ls9b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili9b"  id="dl9b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
    <div class="foot">
        <h3>高中试卷</h3><br/>
        <form name="gaozhong10b">
            <div class="content7">
                <h3>高一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen10b"  id="yw10b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue10b"  id="sh10b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu10b"  id="yy10b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli10b"  id="wl10b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue10b"  id="hx10b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu10b"  id="sw10b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi10b"  id="zz10b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi10b"  id="ls10b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili10b"  id="dl10b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong11b">
            <div class="content7">
                <h3>高二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen11b"  id="yw11b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue11b"  id="sh11b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu11b"  id="yy11b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli11b"  id="wl11b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue11b"  id="hx11b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu11b"  id="sw11b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi11b"  id="zz11b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi11b"  id="ls11b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili11b"  id="dl11b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong12b">
            <div class="content7">
                <h3>高三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen12b"  id="yw12b"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue12b"  id="sh12b"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu12b"  id="yy12b"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli12b"  id="wl12b"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue12b"  id="hx12b"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu12b"  id="sw12b"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi12b"  id="zz12b"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi12b"  id="ls12b"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili12b"  id="dl12b"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
</div>
</body>
</html>
