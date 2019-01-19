// JavaScript Document
// author by guoqy
$(function(){
	//为所有的行中的删除链接添加事件处理（此方式无法在新增元素上绑定事件）
/*	$(".tablelink:contains('删除')").on("click", function (e) {
        $(this).parent().parent().remove();
    });*/
	
	//为所有的行中的删除链接添加事件处理（此方式可以在新增元素上绑定事件）
	$(".tablelist").on("click",".tablelink:contains('删除')",function (e) {
        $(this).parent().parent().remove();
    });
	
	//点击添加按钮，为表格添加一行
	$(".toolbar>li:first").on("click", function (e) {	
        var tableList=$(".tablelist").append('<tr><td><input name="goods" type="checkbox" value=""/></td><td><input type="text" value="请输入员工编号"/></td><td><input type="text" value="请输入身份证"/></td><td><input type="text" value="请输入姓名"/></td><td><select id="1"></select></td><td><select id="2" ></select></td><td><input type="date"/></td><td><select id="3"></select></td><td><a href="#" class="tablelink">确定</a> <a href="#" class="tablelink">删除</a></td></tr>');
		//设定新添加元素的样式
		tableList.find("input[type='text']").css({border:"1px solid black",height:"20px",backgroundColor:"#FF9"});
		tableList.find("input[type='text']:gt(0)").css({width:"80px"});
		tableList.find("input[type='date']").css({border:"1px solid black",height:"20px",backgroundColor:"#FF9"});
		//为日期赋予初始值
		tableList.find("input[type='date']").val(getNowTime());
		//对下拉列表进行初始化
		initSelect(tableList.find("select[id='1']"),[{text:"市场部",value:"市场部"},{text:"人事部",value:"人事部"}
				,{text:"研究部",value:"研究部"},{text:"设计部",value:"设计部"}]);
        initSelect(tableList.find("select[id='2']"),[{text:"办公软件",value:"办公软件"},{text:"商务礼仪",value:"商务礼仪"}
            ,{text:"项目管理",value:"项目管理"},{text:"谈判技巧",value:"谈判技巧"}]);
		initSelect(tableList.find("select[id='3']"),[{text:"经理",value:"经理"},{text:"主管",value:"主管"},{text:"专员",value:"专员"}]);
    });	
	//为文本框添加focus焦点事件，获得焦点时清空文本框内容
	$(".tablelist").on("focus","input[type='text']",function (e) {
        $(this).val("");
    });
	//选取文件时，显示本地文件（使用HTML5中的FileAPI，读者可以自行查阅相关文档）
	$(".tablelist").on("change","input[type='file']",function (e) {
		var that=this;
        var file=$(".tablelist input[type='file']")[0];
		 if(window.FileReader) {  
                var fr = new FileReader();  
                fr.onloadend = function(e) {  
                    $(that).prev().prev().attr("src",e.target.result); 					
                };  
                fr.readAsDataURL(file.files[0]);  
            }  
    });

	//点击新增行的"确定"按钮时，触发的事件
	$(".tablelist").on("click",".tablelink:contains('确定')",function (e) {
		var tableRow=$('<tr><td><input name="foods" type="checkbox" value=""/></td></tr>');
		// var goodsImage=$(".tablelist input[type='file']")[0];
		// //FireFox、Chrome等浏览器浏览器安全性要求相对比较高，返回的路径实际为C:\fakepath\xx.jpg
		// if(goodsImage.value!=""&&goodsImage.value.indexOf("fakepath")==-1){
		// 	//浏览器安全性方面要求不允许直接读取本地文件，此处仅作演示（IE11，支持，其他浏览器不支持）
		// 	//具体在实际情况下，需要使用Ajax结合服务器来实现
		// 	tableRow.append("<td><img src='"+goodsImage.value+"' /></td>'");
		// }else{
		// 	tableRow.append("<td><img src='images/nopic.gif' /></td>'");
		// }
		var num=$(this).parent().parent().find("input[value='请输入员工编号']");
		tableRow.append("<td>"+num[0].value+"</td>'");
        var ID=$(this).parent().parent().find("input[value='请输入身份证']");
        tableRow.append("<td>"+ID[0].value+"</td>'");
		var wname=$(this).parent().parent().find("input[value='请输入姓名']");
        tableRow.append("<td>"+wname[0].value+"</td>'");
        var bumen=$(this).parent().parent().find("select[id='1']");
        tableRow.append("<td>"+bumen[0].value+"</td>'");
        var train=$(this).parent().parent().find("select[id='2']");
        tableRow.append("<td>"+train[0].value+"</td>'");
        var ttime=$(this).parent().parent().find("input[type='date']");
        tableRow.append("<td>"+ttime[0].value+"</td>'");
        var zhiwu=$(this).parent().parent().find("select[id='3']");
        tableRow.append("<td>"+zhiwu[0].value+"</td>'");

		// var goodsNum=0;
		// if(currentRowInput[1].value!="请输入姓名"){
		// 	goodsNum=currentRowInput[1].value;
		// }
		// tableRow.append("<td>"+goodsNum+"</td>'");
		// var price=0;
		// if(currentRowInput[2].value!="请输入单价"){
		// 	price=currentRowInput[2].value;
		// }
		// tableRow.append("<td>"+price+"</td>'");
		// var publishTime=$(this).parent().parent().find("input[type='date']");
		// tableRow.append("<td>"+publishTime[0].value+"</td>");
		// var isChecked=$(this).parent().parent().find("select:last").val();
		// tableRow.append("<td>"+isChecked+"</td>");
		tableRow.append('<td><a href="#" class="tablelink">查看</a> <a href="#" class="tablelink">删除</a></td>');
		
		//移除编辑行
        var tr=$(this).parent().parent().remove();
		$(".tablelist tbody").append(tableRow);
		$(".tablelist td img").css({width:"80px",height:"60px"});
    });
	
});
//获取系统当前时间（年月日）
function getNowTime(){
	var now=new Date();
	return now.getFullYear()+'-'+fixedNumber(now.getMonth())+"-"+fixedNumber(now.getDate());
}
//对数字进行修正
function fixedNumber(num){
	if(num<10){
		return "0"+num;	
	}
	return num;
}
//对下拉列表添加下拉选项
function initSelect(element,data){
	//为select添加option项
	for(var i=0;i<data.length;i++){
		var option=$("<option></option>");
		option.append(data[i].text);//设置option的显示内容
		option.val(data[i].value);//设置option的value值
		$(element).append(option);//将option添加到firstMenu中
	}
	return $(element);
}