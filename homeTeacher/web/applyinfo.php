
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <head>
    </head>
    <body>
    <table>
        <table>
            <tr><td width="100" align="left"><input type="button" value=" 刷  新  本  页 " onClick="history.go(0)"></td></tr>
        </table>
        <form method="post" name="form1" action="?">
            <input type="hidden" name="add" value="add">

            <?php
            require '../controller/applyinfoController.php';
                $a=$result->fetch_assoc();
                echo "<table  border=\"1\"  bgcolor=\"#CCCCCC\" align=\"left\" cellpadding=\"\" cellspacing=\"0\" bordercolorlight=\"#DCDCD1\" bordercolordark=\"#FFFFFF\">
                <tr>
                <tr>
                    <td align=\"left\" colspan=\"2\">
                        <table><tr><td>
                                    <br>
                                     年级：
                                    <input type=\"text\" disabled value=\"".$a['grade']."\">
                                    <br><br>
                                </td></tr></table>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td align=\"left\">
                        <table><br><tr><td>
                                    所需要的辅导科目：
                                    <input type=\"text\" disabled value=\"".$a['subject']."\">
                                </td>
                            </tr>
                            </tr>

                            <td align=\"left\" >
                                <table><tr><td width=\"100%\"><br>
                                            提供薪酬：

                                            <input name=\"riqi11\"  disabled value=\"".$a['pay']."\" maxlength=\"4\" size=\"4\"    onbeforepaste=\"clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))\" value=\"\">



                                        </td></tr></table><br>
                            </td>
                            </tr>
                            </tr>

                            <td align=\"left\" >
                                <table><tr><td width=\"100%\"><br>
                                            联系电话：

                                            <input name=\"riqi11\"  disabled value=\"".$a['phone']."\" maxlength=\"4\" size=\"12\" onKeyUp=\"value=value.replace(/[^\d]/g,'')\"   onbeforepaste=\"clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))\" value=\"\">

                                        </td></tr></table><br>
                            </td>
                            </tr>
                            <tr>
                                <td valign=\"top\" bgcolor=\"\"><font  color=\"\"><br>家庭住址：<textarea  name=\"qita\"   disabled type=\"textarea\"  cols=\"22\" rows=\"8\" onPaste=\"alert('禁止粘贴');return false;\" >".$a['address']."</textarea>
                                </td></tr>
                            <tr>

                                <td colspan=\"2\">
                                    <table id=\"fudao\"><tr>

                                            <td  bgcolor=\"\"><font  color=\"#CC0000\">以下内容，请家长务必认真填写，因为我们是根据您写的要求向合适的老师推送您的家教需求，并且家教老师也会根据这个来决定是否预约该学生，如果您胡乱填写，导致家长投诉，我们会撤销您的老师申请请求</font></td>
                                        </tr>

                                        <style>

                                            textarea{border:2px #ccc solid;padding:3px;width:98%;height:100px;}

                                        </style>

                                        <tr><td align=\"left\" bgcolor=\"\" ><font  color=\"\">对家教老师的要求：<br><textarea disabled name=\"neirong\"    cols=\"42\" rows=\"8\" onPaste=\"alert('禁止粘贴');return false;\" >  ".$a['demand']."</textarea></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                              <tr>
                    <td align=\"center\" >
                        <table><tr >

                            <input  type=\"button\"  value=\"返回\"  onClick=\"javascript:history.back(-1);\" name=\"haiyouqitaxueyuan\" id=\"dd\">
                        </tr></table>
                    </td>
                      </tr>
                        </table>
             </table>

     "   ?>

        </form>
    </body>
</html>