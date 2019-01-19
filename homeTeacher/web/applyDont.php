<!DOCTYPE html >
<head>
    <meta charset="utf-8" />
    <title>查看已经预约的学员</title>
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/list.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery-1.x.js"></script>
    <!--<script type="text/javascript" src="tableOperator.js"></script>-->
    <script>
        function myFunction(){
            var x;
            var r=confirm("请认真重新考虑下是否不教该学员!");
            if (r==true){

                x="你按下了\"确定\"按钮!";
            }
            else{
                x="你按下了\"取消\"按钮!";
            }
            document.getElementById("demo").innerHTML=x;
        }
    </script>
</head>
<body>
<div class="place"> <span>您当前的位置：</span>
    <ul class="placeul">
        <li><a href="homeage.html">学员管理</a></li>
        <li><a href="#">查看已经预约的学员</a></li>
    </ul>
</div>
<div class="rightinfo">
    <!--<div class="tools">-->
    <!--<ul class="toolbar">-->
    <!--<li ><span>P<img src="images/t01.png" /></span>添加</li>-->
    <!--</ul>-->
    <!--<ul class="seachform">-->
    <!--<li>-->
    <!--<div class="vocation">-->
    <!--<select class="select3">-->
    <!--<option>市场部</option>-->
    <!--<option>人事部</option>-->
    <!--<option>研究部</option>-->
    <!--<option>设计部</option>-->
    <!--</select>-->
    <!--</div>-->
    <!--</li>-->
    <!--<li>-->
    <!--<input type="text" class="scinput" value="请输入员工编号"/>-->
    <!--</li>-->
    <!--<li>-->
    <!--<input name="searchBtn" type="button" class="scbtn" value="查询"/>-->
    <!--</li>-->
    <!--</ul>-->
    <!--</div>-->

    <table class="tablelist">
        <thead>
        <tr>
            <th><input name="checkAll" type="checkbox" id="checkAll" onchange="selectAll()"/>全选/
                <input name="checkOther" type="checkbox" id="checkOther" onchange="selectOther()"/>反选
            </th>
            <th>订单编号</th>
            <th>学生姓名</th>
            <th>年级</th>
            <th>地址</th>
            <th>电话</th>
            <th>科目</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require '../controller/applyDontController.php';
        while ($a=$result->fetch_assoc()){
            echo "<tbody>
        <tr>
            <td><input name=\"checkItem\" type=\"checkbox\" value=\"\" /></td>
            <td>".$a['applyID']."</td>
            <td >".$a['studentName']."</td>
            <td>".$a['grade']."</td>
            <td>".$a['address']."</td>
            <td>".$a['phone']."</td>
            <td>".$a['subject']. "</td>
            <td><form action='../controller/deleteStuController.php'  method='get' enctype='multipart/form-data'><input type='hidden' name='delete' value='" . $a["applyID"] . "'><input type=\"submit\" id=\"sub1\" name='sub1' onclick='myFunction()' style='width:85px; height: 35px;   line-height: 20px;   padding-left: 5px;border-radius: 5px;border: none;color:#626cff;background:#ffea8f;' value=\"取消\"></td></form>
        </tr>";
        }
        ?>
        </tbody>
    </table>

    <script type="text/javascript">
        //全选或全不选
        function selectAll(){
            var items=document.getElementsByName("checkItem");
            var checkAll=document.getElementById("checkAll");
            var checkOther=document.getElementById("checkOther");
            checkOther.checked=false;
            for(var i=0;i<items.length;i++){
                items[i].checked=checkAll.checked;
            }
        }
        //反选
        function selectOther(){
            var items=document.getElementsByName("checkItem");
            var checkAll=document.getElementById("checkAll");
            var checkOther=document.getElementById("checkOther");
            checkAll.checked=false;
            for(var i=0;i<items.length;i++){
                items[i].checked=!items[i].checked;
            }
        }
    </script>
    <script type="text/javascript" src="js/jquery-1.x.js"></script>
    <script type="text/javascript">
        function selectAll(){
            var items=$("[name='checkItem']");
            var checkAll=$("#checkAll");
            $("#checkOther").prop("checked",false);
            for(var i=0;i<items.length;i++){
                $(items[i]).prop("checked",checkAll.prop("checked"));
            }
        }
        function selectOther(){
            var items=$("[name='checkItem']");
            $("#checkAll").prop("checked",false);
            for(var i=0;i<items.length;i++){
                $(items[i]).prop("checked",!$(items[i]).prop("checked"));
            }
        }
    </script>
    <!--<div class="pagin">-->
    <!--<div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>-->
    <!--<ul class="paginList">-->
    <!--<li class="paginItem"><a href="#"><span class="pagepre"></span></a></li>-->
    <!--<li class="paginItem"><a href="#">1</a></li>-->
    <!--<li class="paginItem current"><a href="#">2</a></li>-->
    <!--<li class="paginItem"><a href="#">3</a></li>-->
    <!--<li class="paginItem"><a href="#">4</a></li>-->
    <!--<li class="paginItem"><a href="#">5</a></li>-->
    <!--<li class="paginItem more"><a href="#">...</a></li>-->
    <!--<li class="paginItem"><a href="#">10</a></li>-->
    <!--<li class="paginItem"><a href="#"><span class="pagenxt"></span></a></li>-->
    <!--</ul>-->
    <!--</div>-->

</div>

</body>
</html>