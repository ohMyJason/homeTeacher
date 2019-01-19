<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Jason-->
<!-- * Date: 2019/1/16-->
<!-- * Time: 23:17-->
<!-- */-->

<html>
<head>
    <script type="text/javascript">
        function 预约该学员()
        {
            alert("预约成功！")
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <base target="_self"></base>
    <style>
        td {font-size: 9pt; line-height: 18px;font-family: "Arial";}
    </style>
</head>
<br>
<form method=post action=mgongzi.asp>
    <table width="50%"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#000000" bordercolordark="#FFFFFF" style="display:none">
        <tr>
            <td>请输入次数:</td>
            <td><input  name="cishuchaxun" size="12"   /><input name="chaxun" type="submit" id="chaxun" value="查询"></td>
        </tr>
</form>


<table width="100%"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#000000" bordercolordark="#FFFFFF">
    <tr>
        <td height="10" colspan="11" align="center" bgcolor="#999999"><font style="font-size:14px">您的老师</font></td>
    </tr>
    <tr bgcolor="#CCCCCC">
        <td align="center">老师姓名</td>
        <td align="center">老师经验</td>
        <td align="center">所负责的您的科目</td>
        <td align="center">已教次数</td>
    </tr>

    <?php

    require '../controller/displayMyTeacherController.php';

    while($row=$result->fetch_assoc()) {
        echo "
    <tr onmouseover='this.bgColor=\"#D1D1D1\"' onmouseout='this.bgColor=\"#FFFEEC\"' bgcolor=\"#FFFEEC\">
        <td align=\"center\" width=\"140\" height=\"44\" style=\"word-break:break-all\">" . $row['teacherName'] . "</td>
        <td align=\"center\" width=\"140\" height=\"44\" style=\"word-break:break-all\">" . $row['experience'] . "</td>
        <td align=\"center\" width=\"140\" height=\"44\" style=\"word-break:break-all\">" . $row['subject'] . "</td>
        <td align=\"center\" width=\"140\" height=\"44\" style=\"word-break:break-all\">10</td>
    </tr>

    ";
}



    ?>

<!--    <tr>-->
<!--        <td colspan="11"  bgcolor="#CCCCCC"><font color=red></font>共有<font color=red>4</font>名老师-->
<!---->
<!--    </tr>-->

</table>
