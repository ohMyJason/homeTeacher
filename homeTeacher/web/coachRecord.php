<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Jason-->
<!-- * Date: 2019/1/17-->
<!-- * Time: 2:15-->
<!-- */-->




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>
    <table>
        <table>
            <tr><td width="100" align="left"><input type="button" value=" 刷  新  本  页 " onClick="history.go(0)"></td></tr>
        </table>
        <form method="post" name="form1" action="../controller/inputCoachRecordController.php">
            <table  border="1"  bgcolor="#CCCCCC" align="left" cellpadding="0" cellspacing="0" bordercolorlight="#DCDCD1" bordercolordark="#FFFFFF">
                <tr>
                    <td align="left" colspan="2">
                        <table><tr><td>
                                    <br>
                                    学  员：
                                    <select name="studentname" ">
                                        <option value="" selected>空</option>
                                        <?php

                                        require '../controller/returnMyStudentController.php';

                                        while ($row=$result->fetch_assoc()){
                                            echo "<option value=\"".$row['studentName']."\" selected>".$row['studentName']."</option>";
                                         }


                                        ?>

                                    </select>
                                    <br><br>
                                </td></tr></table>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td align="left" colspan="2">
                        <table><tr><td>
                                    <br>
                                    年 级：
                                    <select name="grade" >
                                        <option value="">空</option>
                                        <option value="一年级">一年级</option>
                                        <option value="二年级">二年级</option>
                                        <option value="三年级">三年级</option>
                                        <option value="四年级">四年级</option>
                                        <option value="五年级">五年级</option>
                                        <option value="六年级">六年级</option>
                                        <option value="初一">初一</option>
                                        <option value="初二">初二</option>
                                        <option value="初三">初三</option>
                                        <option value="高一">高一</option>
                                        <option value="高二">高二</option>
                                        <option value="高三">高三</option>
                                        <option value="其他">其他</option>
                                    </select>
                                    <br><br>
                                </td></tr></table>
                    </td>
                </tr>

                <td align="left" >
                    <table><tr><td width="100%"><br>
                                辅导日期：<br><br>
                               <input type="date" name="teachdate" >
                            </td></tr></table><br>
                </td>
                </tr>
                <tr>
                    <td align="left">
                        <table><br><tr><td>
                                    辅导科目：</td><td>
                                    <select name="subject">
                                        <option value=""selected>空</option>
                                        <option value="语文" >语文</option>
                                        <option value="数学" >数学</option>
                                        <option value="英语" >英语</option>
                                        <option value="物理" >物理</option>
                                        <option value="化学" >化学</option>
                                        <option value="地理" >地理</option>
                                        <option value="生物" >生物</option>
                                        <option value="历史" >历史</option>
                                        <option value="政治" >政治</option>
                                        <option value="其他" >其他</option>
                                    </select>   </td></tr></table><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">开始时间：
                        <input type="time" name="starttime" >

                        结束时间：

                        <input type="time" name="overtime" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table id="fudao"><tr>
                                <td  bgcolor=""><font  color="#CC0000">以下内容，请务必认真填写！因为您写的每一个字，家长都能看到！如果胡乱填写，导致家长不满意要求换老师，或者导致学员不续费，影响的是您自己的工资和奖金！如果一再胡乱填写，则将有相应罚款。</font></td>
                            </tr>

                            <style>

                                textarea{border:2px #ccc solid;padding:3px;width:98%;height:100px;}

                            </style>

                            <tr><td align="left" bgcolor="" ><font  color="">辅导内容，不少于10个字：<br><textarea name="teachdetail"    cols="42" rows="8" onPaste="alert('禁止粘贴');return false;" ></textarea></td>
                            </tr>
                            <tr>
                                <td valign="top" bgcolor=""><font  color="">学生的学习情况  学习态度  接受能力 <br>学生需要改进的地方 家长需要配合的地方 不少于25个字：<br><textarea name="studentdetail"   cols="42" rows="8" onPaste="alert('禁止粘贴');return false;" ></textarea>
                                </td></tr>
                        </table>
                    </td>

                </tr>


                <tr>
                    <td colspan="6">
                        <table><tr><td width="15"></td><td align="right">

                                    <input type="submit"  value="提交"   name="haiyouqitaxueyuan" >
                                </td></tr></table>
                        <input type="hidden" name="tiaonageyemian" value="0">
                    </td>
                </tr>

            </table>
        </form>
    </table>

        </body>
</html>
