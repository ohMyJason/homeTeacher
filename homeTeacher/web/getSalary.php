

<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: Jason-->
<!--// * Date: 2019/1/17-->
<!--// * Time: 13:31-->
<!--// */-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href=css/iknow.css rel=stylesheet type=text/css>
</head>
<body onLoad="formjs.gzwei.focus()">
<form action="../controller/getSalaryController.php" method="post" name="formjs"  ">
    <input type="hidden" name="addri1" value="addri1" >
    <table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2"  bgcolor="#CCCCCC" >
        <tr><td colspan="4" align="center">工资结算申请</td></tr>
        <tr><td align="center" colspan="4">当前可提现的工资为：<h2><?php
                    require "../controller/disSalaryController.php";

//                    if($row=$result->fetch_assoc()){
//                        echo $row['salary'];
//                    }else{
//                        echo "您的账号异常，请联系管理员";
//                    }
                    echo  $salary;


                    ?></h2></td></tr>
        <tr>
        <tr><td align="center" colspan="4">提交申请的工资总额：<input type="text" name="getsalary" size="6" maxlength="5">（必须为正数，且不大于当前可提现的工资）</td></tr>
        <input type="hidden" value="<?php   echo $salary  ?>"  name="salary" >
        <tr><td colspan="4" align="center"><input  type="submit"  value="提交" id="tijiao11"></td></tr>
        <br>
    </table>
</form>
<br>
<br><br>
<br>
<table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2"  bgcolor="" >
    <tr><td colspan="4" align="center">银行官网入口：</td></tr>   </table><br>

<div align="center">
    <a href="https://ibsbjstar.ccb.com.cn/app/V5/CN/STY1/login.jsp" target="_blank">建设银行网上银行<br />
        <br />
        <a href="https://mybank.icbc.com.cn/icbc/perbank/index.jsp" target="_blank">工商银行网上银行<br />
            <br />
            <a href="https://easyabc.95599.cn/commbank/netBank/zh_CN/CommLogin.aspx" target="_blank">农业银行网上银行（不需要注册可以直接登录查询）<br />
</div>
<table class="ke-zeroborder" cellspacing="2" cellpadding="2" width="80%" align="center" bgcolor="#cccccc" border="0">

</table>
</a>
</td></tr></table>


</body>
</hmtl>
