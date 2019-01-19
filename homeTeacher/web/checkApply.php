
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Jason-->
<!-- * Date: 2019/1/17-->
<!-- * Time: 1:20-->
<!-- */-->
<!DOCTYPE html >
<head>
    <meta charset="utf-8" />
    <title>添加学员</title>
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/list.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery-1.x.js"></script>
    <!--<script type="text/javascript" src="tableOperator.js"></script>-->
</head>
<body>
<div class="place"> <span>您当前的位置：</span>
    <ul class="placeul">
        <li><a href="homeage.html">学员管理</a></li>
        <li><a href="#">添加学员</a></li>
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
            <th>年级</th>
            <th>对家教老师要求</th>
            <th>地址</th>
            <th>电话</th>
            <th>科目</th>
            <th>薪酬</th>
            <th>是否被接</th>
            <th>是否审核</th>
        </tr>
        </thead>
        <tbody>


        <?php

        require '../controller/displayMyApplyController.php';
        while ($row=$result->fetch_assoc()){
            if ($row['ifReserve']==1){
                $ifReserve="未被接";
            }else{
                $ifReserve="已被接";
            }

            if ($row['ifPass']==1){
                $ifPass="已审核";
            }else{
                $ifPass="未审核";
            }


            echo "        <tr>
            <td>".$row['grade']."</td>
            <td>".$row['demand']."</td>
            <td>".$row['address']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['subject']."</td>
            <td>".$row['pay']."</td>
            <td >".$ifReserve."</td>
            <td>".$ifPass."</td>
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