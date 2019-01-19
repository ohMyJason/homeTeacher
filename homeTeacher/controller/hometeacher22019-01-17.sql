set names utf8;
CREATE TABLE `admin` (
  `adminID` int(111) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into `admin`(`adminID`,`password`) values('345678','345678');
CREATE TABLE `coachrecord` (
  `recordID` int(111) NOT NULL AUTO_INCREMENT,
  `teacherID` int(111) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `recordDate` date DEFAULT NULL COMMENT '辅导日期',
  `startTime` time DEFAULT NULL COMMENT '辅导开始时间',
  `overTime` time NOT NULL COMMENT '辅导结束时间',
  `teachDetail` varchar(255) DEFAULT NULL COMMENT '辅导内容',
  `studentDetail` varchar(255) DEFAULT NULL COMMENT '学生接受情况',
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('1','123456','叶斌','一年级','2019-01-01','10:52:22','15:52:37','驱蚊器恶趣味','q去问驱蚊器问问去额','语文');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('2','123456','叶斌','一年级','2019-01-17','12:04:42','16:04:50','围墙围起为','驱蚊器恶趣味请问','语文');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('3','123456','叶斌','一年级','2019-01-17','12:04:42','16:04:50','围墙围起为','驱蚊器恶趣味请问','语文');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('4','123456','叶斌','一年级','2019-01-17','12:04:42','16:04:50','围墙围起为','驱蚊器恶趣味请问','语文');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('5','123456','易小燕','一年级','2019-01-03','12:03:00','15:05:00','啊的空间不大服务i的hi气温很低','会hi会回到亲卫队请问','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('6','123456','易小燕','一年级','2019-01-04','22:13:00','23:13:00','dadqwd分为氛围','五分我看了佛问佛炯为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('7','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('8','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('9','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('10','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('11','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('12','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('13','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('14','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('15','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('16','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('17','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('18','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('19','123456','易小燕','一年级','2019-01-10','12:03:00','14:05:00','大的','认为认为','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('20','123456','易小燕','一年级','2019-01-17','02:32:00','04:01:00','阿飞的服务','请问请问请问','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('21','123456','易小燕','一年级','2019-01-18','23:23:00','23:30:00','大师大大青蛙','亲卫队请问夺取王位','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('22','123456','叶斌','初三','2019-01-18','08:08:00','12:06:00','和','和','历史');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('23','123456','叶斌','四年级','2019-01-19','02:00:00','23:05:00','ff s','f','其他');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('24','123456','易小燕','','2019-01-10','23:02:00','04:02:00','ewjjwqhdiwqhi','ndejqwndjkwdiuw','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('25','123456','易小燕','','2019-01-10','23:02:00','04:02:00','ewjjwqhdiwqhi','ndejqwndjkwdiuw','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('26','123456','易小燕','','2019-01-10','23:02:00','04:02:00','ewjjwqhdiwqhi','ndejqwndjkwdiuw','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('27','123456','易小燕','','2019-01-10','23:02:00','04:02:00','ewjjwqhdiwqhi','ndejqwndjkwdiuw','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('28','123456','易小燕','二年级','2019-01-09','02:31:00','12:03:00','dnjkwnd','dfwkefjweo','英语');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('29','123456','易小燕','二年级','2019-01-09','02:31:00','12:03:00','dnjkwnd','dfwkefjweo','英语');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('30','123456','易小燕','二年级','2019-01-09','02:31:00','12:03:00','dnjkwnd','dfwkefjweo','英语');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('31','123456','易小燕','二年级','2019-01-09','02:31:00','12:03:00','dnjkwnd','dfwkefjweo','英语');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('32','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('33','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('34','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('35','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('36','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('37','123456','易小燕','二年级','2019-01-24','02:41:00','04:23:00','阿森纳的卡刷你的卡三年','你姐夫的那份降温费尽可能','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('38','123456','易小燕','二年级','2019-01-09','02:31:00','12:03:00','dnjkwnd','dfwkefjweo','英语');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('39','123456','易小燕','一年级','2019-01-10','12:03:00','15:23:00','阿萨德瓦达','分为氛围二','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('40','123456','易小燕','','2019-01-10','23:02:00','04:02:00','ewjjwqhdiwqhi','ndejqwndjkwdiuw','物理');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('41','123456','易小燕','四年级','2019-01-17','12:23:00','15:34:00','fwefnwjekfjowe','fweljfnwkejnfer','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('42','123456','易小燕','四年级','2019-01-17','12:23:00','15:34:00','fwefnwjekfjowe','fweljfnwkejnfer','数学');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('43','123456','易小燕','高三','2019-01-31','01:12:00','04:34:00','UML程序建模','学的蛮认真的，妈妈教的不错','政治');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('44','123456','易小燕','高三','2019-01-31','01:12:00','04:34:00','UML程序建模','学的蛮认真的，妈妈教的不错','政治');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('45','123456','易小燕','高三','2019-01-31','01:12:00','04:34:00','UML程序建模','学的蛮认真的，妈妈教的不错','政治');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('46','123456','易小燕','高三','2019-01-31','01:12:00','04:34:00','UML程序建模','学的蛮认真的，妈妈教的不错','政治');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('47','123456','易小燕','高三','2019-01-31','01:12:00','04:34:00','UML程序建模','学的蛮认真的，妈妈教的不错','政治');
insert into `coachrecord`(`recordID`,`teacherID`,`studentName`,`grade`,`recordDate`,`startTime`,`overTime`,`teachDetail`,`studentDetail`,`subject`) values('48','123456','易小燕','一年级','2019-01-11','18:00:00','21:30:00','辅导学生完成课堂作业，并进行阅读理解的专项指导','学生比较顽皮，希望家长能做好思想工作','语文');
CREATE TABLE `edudata` (
  `Grade` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into `edudata`(`Grade`,`Subject`,`Type`,`Url`) values('一年级','语文','电子书','pan.baidu.com/s/1VycbfbEoKaTueqU3vbSLJg');
insert into `edudata`(`Grade`,`Subject`,`Type`,`Url`) values('一年级','数学','电子书','www.qq.com');
insert into `edudata`(`Grade`,`Subject`,`Type`,`Url`) values('二年级','语文','电子书','www.baidu.com');
insert into `edudata`(`Grade`,`Subject`,`Type`,`Url`) values('一年级','语文','试卷','pan.baidu.com/s/1VycbfbEoKaTueqU3vbSLJg');
insert into `edudata`(`Grade`,`Subject`,`Type`,`Url`) values('一年级','语文','教案','pan.baidu.com/s/1VycbfbEoKaTueqU3vbSLJg');
CREATE TABLE `parent` (
  `parentID` int(111) NOT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `parentUserName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `blance` int(255) DEFAULT NULL,
  PRIMARY KEY (`parentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('234567','刘佳昇','ljs','1234567','叶斌','17266');
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('214568','易燕','ljs','1234567','易小燕','0');
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('234569','徐焕','ljs','1234567','徐小焕','500');
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('214567','安平','ap','1234567','夏娜','100');
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('231567','卡卡','kk','1234567','小罗','333');
insert into `parent`(`parentID`,`parentName`,`parentUserName`,`password`,`studentName`,`blance`) values('234568','娃娃','ww','1234567','小伟','4444');
CREATE TABLE `parentapply` (
  `applyID` int(111) NOT NULL AUTO_INCREMENT,
  `parentID` int(111) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `demand` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `pay` int(111) DEFAULT NULL,
  `ifPass` int(1) DEFAULT NULL COMMENT '是否经过管理员审核，1为通过，0为不通过',
  `ifReserve` int(1) DEFAULT NULL COMMENT '是否可以预约，1为可以预约，0为被人预约',
  PRIMARY KEY (`applyID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('1','234567','小学一年级','随便拉拉','二环内','18030202941','数学','100','1','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('2','234567','小学一年级','随便','二环内','18030202941','数学','100','1','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('3','234569','初中','随便','二环','18030202941','语文','100','1','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('4','234567','小学一年级','随便','二环内','18030202941','数学','100','0','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('5','214567','小学一年级','随便','二环内','18030202941','数学','100','1','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('6','231567','小学一年级','随便','二环内','18030202941','数学','100','1','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('7','234567','小学一年级','随便','二环内','18030202941','数学','100','0','1');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('22','234567','初二','丑','路大楼楼下','18030202941','语文','500','0','0');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('23','234567','高三','希望是女生，语文能力比较好。比较会表达','厦门市集美区龙舟池二期','18030202941','语文','500','0','0');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('20','234567','二年级','请问请问','期待强强我','18030202941','语文','100','0','0');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('21','234567','高二','去问驱蚊器问问','驱蚊器问问','18030202941','语文','500','0','0');
insert into `parentapply`(`applyID`,`parentID`,`grade`,`demand`,`address`,`phone`,`subject`,`pay`,`ifPass`,`ifReserve`) values('19','234567','高三','帅','汉庭大酒店','17859770607','语文','500','0','0');
CREATE TABLE `teacher` (
  `teacherID` int(255) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `teacherName` varchar(255) DEFAULT NULL,
  `teacherUserName` varchar(255) DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teacherID`)
) ENGINE=MyISAM AUTO_INCREMENT=12345679 DEFAULT CHARSET=utf8;
insert into `teacher`(`teacherID`,`password`,`teacherName`,`teacherUserName`,`salary`,`experience`) values('123456','123456','曾泉清','zqq','1600','教的学生上清华');
CREATE TABLE `teacher_student` (
  `parentID` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL,
  `applyID` int(11) NOT NULL COMMENT '申请编号，用于找寻唯一的家长申请',
  `ifPass` int(1) NOT NULL COMMENT '是否管理员审核通，审核通过关系才会生成',
  PRIMARY KEY (`parentID`,`teacherID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
insert into `teacher_student`(`parentID`,`teacherID`,`applyID`,`ifPass`) values('234568','123456','2','1');
insert into `teacher_student`(`parentID`,`teacherID`,`applyID`,`ifPass`) values('234569','123456','3','1');
insert into `teacher_student`(`parentID`,`teacherID`,`applyID`,`ifPass`) values('234567','123456','2','0');
