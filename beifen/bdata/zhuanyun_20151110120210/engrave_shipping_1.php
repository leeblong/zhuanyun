<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_shipping`;");
E_C("CREATE TABLE `engrave_shipping` (
  `ShippingId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ShippingCode` varchar(30) NOT NULL DEFAULT '',
  `ShippingName` varchar(30) NOT NULL DEFAULT '',
  `ShippingDesc` longtext,
  `UseAgreement` longtext NOT NULL,
  `ShippingTemplate` int(12) NOT NULL,
  `Origin` int(12) NOT NULL,
  `Destination` int(12) NOT NULL,
  `Weight` int(12) unsigned NOT NULL DEFAULT '0',
  `AddWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `HeavyVolume` int(12) unsigned NOT NULL DEFAULT '0',
  `FreeWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `AddPrice` double unsigned NOT NULL DEFAULT '0',
  `AddCharge` double NOT NULL,
  `VolumePrice` double unsigned NOT NULL DEFAULT '0',
  `RegPrice` double unsigned NOT NULL DEFAULT '0',
  `Discount` double unsigned NOT NULL DEFAULT '0' COMMENT '折扣',
  `DecPrice` double unsigned NOT NULL DEFAULT '0',
  `MinPrice` double unsigned NOT NULL DEFAULT '0',
  `MinWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `MaxWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `WeightId` int(12) unsigned NOT NULL DEFAULT '0',
  `WeightUnit` char(6) NOT NULL DEFAULT '',
  `CurrencyId` int(12) unsigned NOT NULL DEFAULT '0',
  `CurrencyCode` char(6) NOT NULL DEFAULT '',
  `SupportCOD` int(12) unsigned NOT NULL DEFAULT '0',
  `IsSupPice` tinyint(4) NOT NULL,
  `IsShippingVip` tinyint(4) NOT NULL,
  `IsRegPrice` tinyint(4) NOT NULL,
  `Agreement` tinyint(4) NOT NULL,
  `RegIntegarl` tinyint(4) NOT NULL,
  `StatusId` int(12) unsigned NOT NULL DEFAULT '0',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `IsDeleteShipping` tinyint(4) NOT NULL,
  `s_slpgid` int(12) DEFAULT '0' COMMENT '阶梯价格组ID',
  PRIMARY KEY (`ShippingId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_shipping` values('1','EMS-asia','EMS-亚洲-ASIA','<p>\r\n	afasdfasdf\r\n</p>','EMS线路','1','1','1','300','5','0','0','250','250','100','1','0','1','0','250','0','30000','10','g','1','JPY','0','0','0','0','1','1','1','0','0','0');");
E_D("replace into `engrave_shipping` values('2','YXX-A','航空AIR-东亚','<p>\r\n	asasdfasf\r\n</p>','','1','89000000','1','3000','1000','126','0','3950','700','0','1','0','1','0','3950','0','30000','10','g','1','JPY','0','0','0','0','1','1','1','0','0','0');");
E_D("replace into `engrave_shipping` values('3','YXX-B','经济航空SAL-东亚','<p>\r\n	asdfsdf\r\n</p>','<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	&nbsp;<b><span style=\"font-size:14pt;font-family:宋体;\">可根据工作人员的经验对包裹进行包装。包裹在工作人员判断危险的情况下</span></b><b><span style=\"font-size:18pt;font-family:宋体;\">进行适当加固。</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">若备注要求涉及增值服务而又未选择增值服务的则按照相关增值服务进行处理和收费。若无备注或未选任何增值服务而工作人员又判定包裹在运输途中可能破损，则工作人员将对包裹进行适当加固。默认外箱覆膜</span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">最大程度提高安全性，能够明显降低包裹破损的概率。</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">适用于担心运输安全的物品。</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">但保障安全的同时可能会增加包裹重量（加固产生），增加运费成本，请谨慎选择。包裹处理完后重新处理需要收取相关操作费用</span></b><b><span style=\"font-size:14pt;\">1000</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元，敬请周知。</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">增值服务说明</span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">邮寄包装更换</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">去广告冰袋杂志</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp;&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">去除鞋盒</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">保留原箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">取出发票</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">外箱覆膜</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">不需加固</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">更换小型加厚纸箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp;&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">预报核对清点</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">一般分箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">核对清点服务</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; 200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">拍照扫描</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">订单</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">合箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">超过</span></b><b><span style=\"font-size:14pt;\">5</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">个</span></b><b><span style=\"font-size:14pt;\">200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">大型物品合箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">精确分箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">同线路</span></b><b><span style=\"font-size:14pt;\">300</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元起每增加一箱增加</span></b><b><span style=\"font-size:14pt;\">200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元每箱</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">不同线路</span></b><b><span style=\"font-size:14pt;\">500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元起</span></b><b><span style=\"font-size:14pt;\">&nbsp;</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">每增加一箱</span></b><b><span style=\"font-size:14pt;\">500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元每箱</span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">简易加固</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;300</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\"></span></b>\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">超级加固</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;800-2000</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\"></span></b>&nbsp;\r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">打包带捆包</span></b><b><span style=\"font-size:14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;350</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b>\r\n</p>','2','89000000','86000000','3000','1000','126','0','3750','500','0','1','0','1','0','3750','0','30000','10','g','1','JPY','0','0','0','0','1','1','1','0','0','0');");
E_D("replace into `engrave_shipping` values('6','wqwqwq','海运ship-东亚','sasas','<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">可根据工作人员的经验对包裹进行包装。包裹在工作人员判断危险的情况下</span></b><b><span style=\"font-size:18pt;font-family:宋体;\">进行适当加固。</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">若备注要求涉及增值服务而又未选择增值服务的则按照相关增值服务进行处理和收费。若无备注或未选任何增值服务而工作人员又判定包裹在运输途中可能破损，则工作人员将对包裹进行适当加固。默认外箱覆膜</span></b> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">最大程度提高安全性，能够明显降低包裹破损的概率。</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">适用于担心运输安全的物品。</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">但保障安全的同时可能会增加包裹重量（加固产生），增加运费成本，请谨慎选择。包裹处理完后重新处理需要收取相关操作费用</span></b><b><span style=\"font-size:14pt;\">1000</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元，敬请周知。</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">增值服务说明</span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">邮寄包装更换</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">去广告冰袋杂志</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">去除鞋盒</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">保留原箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">取出发票</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">外箱覆膜</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">不需加固</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">更换小型加厚纸箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">预报核对清点</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">一般分箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">免费</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">核对清点服务</span></b><b><span style=\"font-size:14pt;\"> 200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">拍照扫描</span></b><b><span style=\"font-size:14pt;\"> 500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">订单</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">合箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">超过</span></b><b><span style=\"font-size:14pt;\">5</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">个</span></b><b><span style=\"font-size:14pt;\">200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">大型物品合箱</span></b><b><span style=\"font-size:14pt;\"> 200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\">/订单内单个</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">包裹</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">精确分箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">同线路</span></b><b><span style=\"font-size:14pt;\">300</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元起每增加一箱增加</span></b><b><span style=\"font-size:14pt;\">200</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元每箱</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">不同线路</span></b><b><span style=\"font-size:14pt;\">500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元起</span></b><b><span style=\"font-size:14pt;\"> </span></b><b><span style=\"font-size:14pt;font-family:宋体;\">每增加一箱</span></b><b><span style=\"font-size:14pt;\">500</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元每箱</span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">简易加固</span></b><b><span style=\"font-size:14pt;\"> 300</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">超级加固</span></b><b><span style=\"font-size:14pt;\"> 800-2000</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b><b><span style=\"font-size:14pt;\"></span></b> \r\n</p>\r\n<p style=\"font-family:微软雅黑，宋体, 黑体, 幼圆, 楷体, 仿宋, Arial, Verdana, sans-serif;\">\r\n	<b><span style=\"font-size:14pt;font-family:宋体;\">打包带捆包</span></b><b><span style=\"font-size:14pt;\"> 350</span></b><b><span style=\"font-size:14pt;font-family:宋体;\">日元</span></b> \r\n</p>','2','0','1','1','5','126','0','250','250','2','1','0','1','0','250','0','30000','10','g','1','JPY','0','0','0','0','1','1','0','1','0','0');");

require("../../inc/footer.php");
?>