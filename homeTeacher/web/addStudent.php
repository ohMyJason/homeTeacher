<!DOCTYPE html >
<head>
    <meta charset="utf-8" />
    <title>添加学员</title>
    <link href="../web/css/layout.css" rel="stylesheet" type="text/css" >
    <link href="../web/css/list.css" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="../web/js/jquery-1.x.js"></script>
    <!--<script type="text/javascript" src="tableOperator.js"></script>-->
</head>
<body>
<div class="place"> <span>您当前的位置：</span>
    <ul class="placeul">
        <li><a href="homePage.html">学员管理</a></li>
        <li><a href="#">添加学员</a></li>
    </ul>
</div>
<div class="rightinfo">


    <table class="tablelist">
        <thead>
        <tr>
            <th><input name="checkAll" type="checkbox" id="checkAll" onchange="selectAll()"/>全选/
                <input name="checkOther" type="checkbox" id="checkOther" onchange="selectOther()"/>反选
            </th>
            <th>申请编号</th>
            <th>年级</th>
            <th>对家教老师要求</th>
            <th>地址</th>
            <th>电话</th>
            <th>科目</th>
            <th>薪酬</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
            require '../controller/checkStuController.php';
                    while ($a=$result->fetch_assoc()){
                        echo "<tbody>
        <tr>
            <td><input name=\"checkItem\" type=\"checkbox\" value=\"\" /></td>
            <td >".$a['applyID']."</td>
            <td>".$a['grade']."</td>
            <td>".$a['demand']."</td>
            <td>".$a['address']."</td>
            <td>".$a['phone']."</td>
            <td>".$a['subject']."</td>
            <td>".$a['pay']. "</td>
            <td><form action='../controller/addStuController.php' method='get' enctype='multipart/form-data'><input type='hidden' name='yuyue' value='" . $a["applyID"] . "'><input type=\"submit\" id=\"sub1\" name='sub1'  style='width:85px; height: 35px;   line-height: 20px;   padding-left: 5px;border-radius: 5px;border: none;color:#626cff;background:#ffea8f;' value=\"预约\"></td></form>
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

</div>

</body>
</html>
