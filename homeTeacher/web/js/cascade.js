// Created by guoqy
//省、市、区基本信息
var provinces=["01", "02","03","04","05"];
var cities =[["男", "女"],["男", "女"],["男", "女"],["男", "女"],["男", "女"]];
var areas=[
    [
        ["黎明", "王强", "吴雁泽", "古天乐"],
        ["古力娜扎", "迪丽热巴", "马尔扎哈"]
    ],     [
        ["鹿晗", "吴亦凡", "吴彦祖", "李明"],
        ["杨幂", "杨颖", "陈文"]
    ],
    [
        ["黎明", "王强", "吴雁泽", "古天乐", "鹿晗", "吴亦凡"],
        ["古力娜扎", "迪丽热巴", "马尔扎哈", "新恒结衣", "杨幂", "杨颖"]
    ],
    [
        ["黎明", "王强", "吴雁泽", "古天乐", "鹿晗", "吴亦凡"],
        ["古力娜扎", "迪丽热巴", "马尔扎哈", "新恒结衣", "杨幂", "杨颖"]
    ],
    [
        ["黎明", "王强", "吴雁泽", "古天乐", "鹿晗", "吴亦凡"],
        ["古力娜扎", "迪丽热巴", "马尔扎哈", "新恒结衣", "杨幂", "杨颖"]
    ]
];
//定义变量
var province,city,area;
//初始化省份下拉列表
function initProvince(){
    //获取表单中的省、市、区元素
    province=document.getElementById("province");
    city=document.getElementById("city");
    area=document.getElementById("area");
    province.options.length=1;
    for(var i=0; i<provinces.length; i++){
        var option=new Option(provinces[i],provinces[i]);
        province.options.add(option);
    }
}
//选择省份时触发
function provinceChange(){
    //对地区下拉列表初始化
    cityChange();
    //对城市下拉列表初始化
    city.options.length=1;
    if(province.selectedIndex==0){
        return;
    }
    //注意：选项的下标是从1开始的，数组的下标是从0开始的
    var pIndex=province.selectedIndex;
    for(var i=0; i<cities[pIndex-1].length; i++){
        var optionValue=cities[pIndex-1][i];
        var option=new Option(optionValue,optionValue);
        city.options.add(option);
    }
}
//选择城市时触发
function cityChange(){
    //对地区下拉列表初始化
    area.options.length=1;
    if (city.selectedIndex==0){
        return;
    }
    var pIndex=province.selectedIndex;
    var cIndex=city.selectedIndex;
    for (var i=0; i<areas[pIndex-1][cIndex-1].length; i++) {
        var optionValue=areas[pIndex-1][cIndex-1][i];
        var option=new Option(optionValue,optionValue);
        area.options.add(option);
    }
}

//窗口加载完毕时，完成事件绑定和初始化
window.onload = function () {
    //初始化省份下拉列表
    initProvince();
    //为下拉列表绑定onchange事件
    province.onchange = provinceChange;
    city.onchange = cityChange;
};
