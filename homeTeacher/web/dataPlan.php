<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教案</title>
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
        <h3>小学教案</h3><br/>

            <div class="content1" >
                <h3 >小学一年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <form action="../controller/checkPlanController.php" method='get' enctype='multipart/form-data' id="myDiv" name="xiaoxue1" ><input type="hidden" name="plan" value="教案"><input type="hidden" name="yinianji" value="一年级" ><input type="submit" name="yuwen1" id="yw1" value="语文"></form>
                    </li>
                    <li >
                        <input type="submit"  name="shuxue1c"  id="sx1c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu1c"  id="yy1c"   value="英语">
                    </li>


                </ul>

            </div>

        <form id= name="xiaoxue2c">
            <div class="content1" >
                <h3 >小学二年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen2c"  id="yw2c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue2c"  id="sx2c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu2c"  id="yy2c"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue3c">
            <div class="content1" >
                <h3 >小学三年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen3c"  id="yw3c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue3c"  id="sx3c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu3c"  id="yy3c"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue4c">
            <div class="content1" >
                <h3 >小学四年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen4c"  id="yw4c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue4c"  id="sx4c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu4c"  id="yy4c"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue5c">
            <div class="content1" >
                <h3 >小学五年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen5c"  id="yw5c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue5c"  id="sx5c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu5c"  id="yy5c"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
        <form name="xiaoxue6c">
            <div class="content1" >
                <h3 >小学六年级</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen6c"  id="yw6c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue6c"  id="sx6c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu6c"  id="yy6c"   value="英语">
                    </li>


                </ul>

            </div>
        </form>
    </div>
    <div class="foot1">
        <h3>初中教案</h3><br/>
        <form name="chuzhong7c">
            <div class="content7">
                <h3>初一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen7c"  id="yw7c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue7c"  id="sh7c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu7c"  id="yy7c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli7c"  id="wl7c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue7c"  id="hx7c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu7c"  id="sw7c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi7c"  id="zz7c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi7c"  id="ls7c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili7c"  id="dl7c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>

        <form name="chuzhong8c">
            <div class="content7">
                <h3>初二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen8c"  id="yw8c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue8c"  id="sh8c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu8c"  id="yy8c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli8c"  id="wl8c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue8c"  id="hx8c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu8c"  id="sw8c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi8c"  id="zz8c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi8c"  id="ls8c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili8c"  id="dl8c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="chuzhong9">
            <div class="content7">
                <h3>初三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen9c"  id="yw9c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue9c"  id="sh9c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu9c"  id="yy9c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli9c"  id="wl9c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue9c"  id="hx9c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu9c"  id="sw9c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi9c"  id="zz9c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi9c"  id="ls9c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili9c"  id="dl9c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
    <div class="foot">
        <h3>高中教案</h3><br/>
        <form name="gaozhong10c">
            <div class="content7">
                <h3>高一</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen10c"  id="yw10c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue10c"  id="sh10c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu10c"  id="yy10c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli10c"  id="wl10c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue10c"  id="hx10c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu10c"  id="sw10c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi10c"  id="zz10c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi10c"  id="ls10c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili10c"  id="dl10c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong11c">
            <div class="content7">
                <h3>高二</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen11c"  id="yw11c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue11c"  id="sh11c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu11c"  id="yy11c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli11c"  id="wl11c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue11c"  id="hx11c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu11c"  id="sw11c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi11c"  id="zz11c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi11c"  id="ls11c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili11c"  id="dl11c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
        <form name="gaozhong12c">
            <div class="content7">
                <h3>高三</h3><br/>
                <ul class="forminfo">
                    <li >
                        <input type="submit"  name="yuwen12c"  id="yw12c"   value="语文">
                    </li>
                    <li >
                        <input type="submit"  name="shuxue12c"  id="sh12c"   value="数学">
                    </li>
                    <li >
                        <input type="submit"  name="yingyu12c"  id="yy12c"   value="英语">
                    </li>
                    <li >
                        <input type="submit"  name="wuli12c"  id="wl12c"   value="物理">
                    </li>
                    <li >
                        <input type="submit"  name="huaxue12c"  id="hx12c"   value="化学">
                    </li>
                    <li >
                        <input type="submit"  name="shengwu12c"  id="sw12c"   value="生物">
                    </li>
                    <li >
                        <input type="submit"  name="zhengzhi12c"  id="zz12c"   value="政治">
                    </li>
                    <li >
                        <input type="submit"  name="lishi12c"  id="ls12c"   value="历史">
                    </li>
                    <li >
                        <input type="submit"  name="dili12c"  id="dl12c"   value="地理">
                    </li>

                </ul>
            </div>
        </form>
    </div>
</div>
</body>
</html>
