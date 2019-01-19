
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Jason-->
<!-- * Date: 2019/1/17-->
<!-- * Time: 12:36-->
<!-- */-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>课程管理</title>
    <link href=css/iknow.css rel=stylesheet type=text/css>
    <style>
        body{background-color:#FFF}
    </style>
</head>
<body onLoad="myform.xueyuankc.focus()">
<!--<form method=post action=mclass.asp name=myform>-->
<!--    <table width="50%"  border="0" align="center" cellpadding="0" cellspacing="10" bordercolorlight="#000000" bordercolordark="">-->
<!--        <tr>-->
<!--            <td align="right">学员名：</td>-->
<!--            <td><input type="text" name="xueyuankc"size="20">-->
<!--                <input type=hidden name=chaxun value="chaxun">-->
<!--                <input  type="submit" value=" 查  询 ">-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--</form>-->
<!--<form method=post action=mclass.asp name=myform>-->
<!--    <table width="50%"  border="0" align="center" cellpadding="0" cellspacing="10" bordercolorlight="#000000" bordercolordark="">-->
<!--        <tr>-->
<!--            <td align="right">日期号：</td>-->
<!--            <td><input type="text" name="xueyuankc"size="20">-->
<!--                <input type=hidden name=chaxun value="chaxun">-->
<!--                <input  type="submit" value=" 查  询 ">-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--</form>-->


<table width="98%"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#000000" bordercolordark="">
            <br><tr>
                <td height="20" colspan="12" align="center" bgcolor="#CCCCCC"><font style="font-size:14px">您  已  添  加  的  辅  导  课  程</font></td>
            </tr>
            <tr bgcolor="">
                <td align="center"height="25">学员</td>
                <td align="center"height="25">年段</td>
                <td align="center">辅导日期</td>
                <td align="center">开始时间</td>
                <td align="center">结束时间</td>
                <td align="center">辅导科目</td>
<!--        <td align="center">辅导工资</td>-->

    </tr>


    <?php

    require "../controller/returnMyRecordController.php";


    while ($row=$result->fetch_assoc()) {

        echo "<tr onmouseover='this.bgColor=\"#D1D1D1\"' onmouseout='this.bgColor=\"#FFFEEC\"' bgcolor=\"#FFFEEC\"  >
        <td align=\"center\" width=\"35\" height=\"44\" style=\"word-break:break-all\">
           ".$row['studentName']."
        </td>

        <td align=\"center\" width=\"60\" height=\"44\" style=\"word-break:break-all\">".$row['grade']."</td>
        <td align=\"center\" width=\"60\" height=\"44\" style=\"word-break:break-all\">
            ".$row['recordDate']."</td>

        <td align=\"center\" width=\"60\" height=\"44\" style=\"word-break:break-all\">
            ".$row['startTime']."
        </td>
        <td align=\"center\" width=\"60\" height=\"44\" style=\"word-break:break-all\">
            ".$row['overTime']."
        </td>
        <td align=\"center\" width=\"120\" height=\"44\" style=\"word-break:break-all\">".$row['subject']."</td>
    </tr>";

    }

    ?>

<!--    <tr>-->
<!--        <td colspan="12" bgcolor="">查询关键字:  <font color=red>空查询=全部学员</font>  ，共有  <font color=red>10</font>   条记录<font color=red>1</font>/1-->
<!--    </tr>-->

</table>

</body>
</html>


