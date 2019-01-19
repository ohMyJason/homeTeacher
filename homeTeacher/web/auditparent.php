
<html >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>课程管理</title>
    <link href=../web/css/iknow.css rel=stylesheet type=text/css>
    <style>
        body{background-color:#FFF}
    </style>
</head>
<body onLoad="myform.xueyuankc.focus()">

<table width="90%"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#000000" bordercolordark="">
    <tr>
        <td height="30" colspan="12" align="center" bgcolor="#00CCFF"><font style="font-size:14px">审    核    家    长    申    请</font></td>
    </tr>
    <tr bgcolor="">
        <td align="center"height="25">申请编号</td>
        <td align="center"height="25">家长姓名</td>
        <td align="center">学生年级</td>
        <td align="center">电话</td>
        <td align="center">查看详情</td>
        <td align="center">操作</td>

    </tr>
    <?php
        require '../controller/auditparController.php';
            while ($a=$result->fetch_assoc()){
            echo "
             <tr>
            <td align='center'>".$a['applyID']."</td>
            <td align='center'>".$a['parentName']."</td>
            <td align='center'>".$a['grade']."</td>
            <td align='center'>".$a['phone']."</td>
            <td  align='center'><form action='../controller/test.php' method='post'>
            <input type='submit' value='查看详情' onclick=''>
            <input type='hidden' name='choose' value='".$a['applyID']."'>
            </form></td>
            <td align='center'><form action='../controller/ifassparentController.php' style='display:inline;' method='post'>
            <input type='submit' name='' value='发布申请'>
            <input type='hidden' name='applyid' value=".$a['applyID'].">   
            <input type='hidden' name='ifPass' value='1'>   
              </form>
             <form action='../controller/ifassparentController.php' style='display:inline;' method='post'>
            <input type='submit' name='' value='删除申请' style='margin-left: 20px' >
            <input type='hidden' name='applyid' value=".$a['applyID'].">   
            <input type='hidden' name='ifPass' value='0'>  
              </form></td>
        </tr>";
            }
    ?>
    <tr>
        <td colspan="12" bgcolor="">   注意:  <font color=red>如果拒绝发布家长申请</font> ，要联系家长说明情况！！
            <!--<a href=mclass.asp?p=1&xueyuankc=&chaxun=chaxun>首页</a>
            <a href=mclass.asp?p=0&xueyuankc=&chaxun=chaxun>上页</a>
            <a href=mclass.asp?p=2&xueyuankc=&chaxun=chaxun>下页</a>
            <a href=mclass.asp?p=1&xueyuankc=&chaxun=chaxun>尾页</a>
            </td>-->
    </tr>

</table>

</body>
</html>
