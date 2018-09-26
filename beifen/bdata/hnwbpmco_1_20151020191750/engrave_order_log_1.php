<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_order_log`;");
E_C("CREATE TABLE `engrave_order_log` (
  `ol_id` int(12) NOT NULL AUTO_INCREMENT,
  `ol_time` int(12) DEFAULT NULL COMMENT '操作日期',
  `ol_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `ol_username` varchar(200) DEFAULT NULL COMMENT '操作用户',
  `ol_info` varchar(500) DEFAULT NULL COMMENT '操作记录',
  `ol_ipaddress` varchar(15) DEFAULT NULL COMMENT 'IP',
  `ol_code` varchar(50) DEFAULT NULL COMMENT '操作代码',
  `ol_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  PRIMARY KEY (`ol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=292 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_order_log` values('1','1426816534','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150320001(ID:1)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','1');");
E_D("replace into `engrave_order_log` values('2','1426816574','1','admin','订单商品已由 admin 配货完成 等待检品','127.0.0.1','ORDERDISTRIBUTION','1');");
E_D("replace into `engrave_order_log` values('3','1426816579','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','1');");
E_D("replace into `engrave_order_log` values('4','1426816601','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 8日元,实际需支付总费用： 186419.99日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','1');");
E_D("replace into `engrave_order_log` values('5','1426816614','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','1');");
E_D("replace into `engrave_order_log` values('6','1427173761','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150324001(ID:2)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','2');");
E_D("replace into `engrave_order_log` values('7','1427175561','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150324002(ID:3)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','3');");
E_D("replace into `engrave_order_log` values('8','1427176110','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150324003(ID:4)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','4');");
E_D("replace into `engrave_order_log` values('9','1427185552','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150324004(ID:5)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','5');");
E_D("replace into `engrave_order_log` values('10','1427185561','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','5');");
E_D("replace into `engrave_order_log` values('11','1427185562','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','5');");
E_D("replace into `engrave_order_log` values('12','1427197878','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','4');");
E_D("replace into `engrave_order_log` values('13','1427197882','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','4');");
E_D("replace into `engrave_order_log` values('14','1427197959','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150324005(ID:6)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','6');");
E_D("replace into `engrave_order_log` values('15','1427197981','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','6');");
E_D("replace into `engrave_order_log` values('16','1427197983','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','6');");
E_D("replace into `engrave_order_log` values('17','1427246362','1','admin','订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 1040.8日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','5');");
E_D("replace into `engrave_order_log` values('18','1427259520','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150325001(ID:7)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','7');");
E_D("replace into `engrave_order_log` values('19','1427259872','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150325002(ID:8)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','8');");
E_D("replace into `engrave_order_log` values('20','1427259963','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150325003(ID:9)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','9');");
E_D("replace into `engrave_order_log` values('21','1427261815','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150325004(ID:10)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','10');");
E_D("replace into `engrave_order_log` values('22','1427264787','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','10');");
E_D("replace into `engrave_order_log` values('23','1427264788','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','10');");
E_D("replace into `engrave_order_log` values('24','1427330184','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','9');");
E_D("replace into `engrave_order_log` values('25','1427330185','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','9');");
E_D("replace into `engrave_order_log` values('26','1427330639','1','admin','订单商品已由 admin 称重打包，总重量：10.00LBS，运费： 1040.8日元,实际需支付总费用： 437.37日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','9');");
E_D("replace into `engrave_order_log` values('27','1427330842','1','admin','订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 1040.8日元,实际需支付总费用： 491.01日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','10');");
E_D("replace into `engrave_order_log` values('28','1427330848','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','8');");
E_D("replace into `engrave_order_log` values('29','1427330849','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','8');");
E_D("replace into `engrave_order_log` values('35','1427335486','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','10');");
E_D("replace into `engrave_order_log` values('36','1427335744','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 4日元,实际需支付总费用： 238.68日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','8');");
E_D("replace into `engrave_order_log` values('37','1427335759','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','8');");
E_D("replace into `engrave_order_log` values('38','1427335800','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 13.6日元,实际需支付总费用： 3.20日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','6');");
E_D("replace into `engrave_order_log` values('39','1427335861','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','2');");
E_D("replace into `engrave_order_log` values('40','1427335864','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','3');");
E_D("replace into `engrave_order_log` values('41','1427337851','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','6');");
E_D("replace into `engrave_order_log` values('42','1427337881','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','7');");
E_D("replace into `engrave_order_log` values('43','1427337883','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','7');");
E_D("replace into `engrave_order_log` values('44','1427337887','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 0.8日元,实际需支付总费用： 160.22日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','7');");
E_D("replace into `engrave_order_log` values('45','1427338118','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','3');");
E_D("replace into `engrave_order_log` values('46','1427338138','1','admin','订单商品已由 admin 称重打包，总重量：24.00LBS，运费： 1040.8日元,实际需支付总费用： 948.24日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','3');");
E_D("replace into `engrave_order_log` values('47','1427338165','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','3');");
E_D("replace into `engrave_order_log` values('48','1427346030','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','2');");
E_D("replace into `engrave_order_log` values('49','1427346041','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 0.8日元,实际需支付总费用： 0.15日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','2');");
E_D("replace into `engrave_order_log` values('50','1427350143','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','7');");
E_D("replace into `engrave_order_log` values('51','1427350380','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','7');");
E_D("replace into `engrave_order_log` values('52','1427350486','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','7');");
E_D("replace into `engrave_order_log` values('53','1427350945','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','7');");
E_D("replace into `engrave_order_log` values('54','1427351296','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','7');");
E_D("replace into `engrave_order_log` values('55','1427442372','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','3');");
E_D("replace into `engrave_order_log` values('56','1427609291','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150329001(ID:11)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','11');");
E_D("replace into `engrave_order_log` values('57','1427788817','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','11');");
E_D("replace into `engrave_order_log` values('58','1427788819','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','11');");
E_D("replace into `engrave_order_log` values('59','1427862365','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150401001(ID:12)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','12');");
E_D("replace into `engrave_order_log` values('60','1427862369','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','12');");
E_D("replace into `engrave_order_log` values('61','1427862370','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','12');");
E_D("replace into `engrave_order_log` values('62','1427866421','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 13.6日元,实际需支付总费用： 2.35日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','12');");
E_D("replace into `engrave_order_log` values('63','1427866466','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150401002(ID:13)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','13');");
E_D("replace into `engrave_order_log` values('64','1427866473','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','13');");
E_D("replace into `engrave_order_log` values('65','1427866476','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','13');");
E_D("replace into `engrave_order_log` values('66','1428038929','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150403001(ID:14)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','14');");
E_D("replace into `engrave_order_log` values('67','1428038942','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','14');");
E_D("replace into `engrave_order_log` values('68','1428038943','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','14');");
E_D("replace into `engrave_order_log` values('69','1428039060','52','zxp1988','zxp1988 在线提交包裹订单，生成订单号为：150403002(ID:15)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','15');");
E_D("replace into `engrave_order_log` values('70','1428039066','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','15');");
E_D("replace into `engrave_order_log` values('71','1428039068','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','15');");
E_D("replace into `engrave_order_log` values('72','1428039095','1','admin','订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 4日元,实际需支付总费用： 2.55日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','14');");
E_D("replace into `engrave_order_log` values('73','1429508299','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420001(ID:16)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','16');");
E_D("replace into `engrave_order_log` values('74','1429509337','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420002(ID:17)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','17');");
E_D("replace into `engrave_order_log` values('75','1429510710','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','16');");
E_D("replace into `engrave_order_log` values('76','1429512052','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420003(ID:18)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','18');");
E_D("replace into `engrave_order_log` values('77','1429512073','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','18');");
E_D("replace into `engrave_order_log` values('78','1429512075','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','18');");
E_D("replace into `engrave_order_log` values('79','1429512106','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 1000日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','18');");
E_D("replace into `engrave_order_log` values('80','1429512590','31686','beeejf','用户 beeejf 支付完成','127.0.0.1','CUSTOMERORDERPAY','18');");
E_D("replace into `engrave_order_log` values('81','1429512645','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','18');");
E_D("replace into `engrave_order_log` values('82','1429513038','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420004(ID:19)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','19');");
E_D("replace into `engrave_order_log` values('83','1429513041','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','19');");
E_D("replace into `engrave_order_log` values('84','1429513042','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','19');");
E_D("replace into `engrave_order_log` values('85','1429513071','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 1000日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','19');");
E_D("replace into `engrave_order_log` values('86','1429513404','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420005(ID:20)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','20');");
E_D("replace into `engrave_order_log` values('87','1429513410','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','20');");
E_D("replace into `engrave_order_log` values('88','1429513411','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','20');");
E_D("replace into `engrave_order_log` values('89','1429513427','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 1000日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','20');");
E_D("replace into `engrave_order_log` values('90','1429514015','31686','beeejf','用户 beeejf 支付完成','127.0.0.1','CUSTOMERORDERPAY','20');");
E_D("replace into `engrave_order_log` values('91','1429514143','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420006(ID:21)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','21');");
E_D("replace into `engrave_order_log` values('92','1429514157','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420007(ID:22)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','22');");
E_D("replace into `engrave_order_log` values('93','1429514188','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150420008(ID:23)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','23');");
E_D("replace into `engrave_order_log` values('94','1429514194','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','23');");
E_D("replace into `engrave_order_log` values('95','1429514196','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','23');");
E_D("replace into `engrave_order_log` values('96','1429514208','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 1000日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','23');");
E_D("replace into `engrave_order_log` values('97','1429514211','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','22');");
E_D("replace into `engrave_order_log` values('98','1429514212','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','22');");
E_D("replace into `engrave_order_log` values('99','1429514218','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','21');");
E_D("replace into `engrave_order_log` values('100','1429514220','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','21');");
E_D("replace into `engrave_order_log` values('101','1429514229','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 1000日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','21');");
E_D("replace into `engrave_order_log` values('102','1429514823','31686','beeejf','用户 beeejf 支付完成','127.0.0.1','CUSTOMERORDERPAY','23');");
E_D("replace into `engrave_order_log` values('103','1429675512','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150422001(ID:24)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','24');");
E_D("replace into `engrave_order_log` values('104','1429675546','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','24');");
E_D("replace into `engrave_order_log` values('105','1429675548','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','24');");
E_D("replace into `engrave_order_log` values('106','1429675626','1','admin','订单商品已由 admin 称重打包，总重量：300.00LBS，运费： 12020日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','24');");
E_D("replace into `engrave_order_log` values('107','1429675664','31686','beeejf','用户 beeejf 支付完成','127.0.0.1','CUSTOMERORDERPAY','24');");
E_D("replace into `engrave_order_log` values('108','1429675697','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','24');");
E_D("replace into `engrave_order_log` values('109','1429675925','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150422002(ID:25)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','25');");
E_D("replace into `engrave_order_log` values('110','1429675934','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','25');");
E_D("replace into `engrave_order_log` values('111','1429675936','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','25');");
E_D("replace into `engrave_order_log` values('112','1429676006','1','admin','订单商品已由 admin 称重打包，总重量：800.00LBS，运费： 20420日元,实际需支付总费用： 1290.61日元 （称重后自动结算，已支付成功！）','127.0.0.1','ORDERWEIGHTING','25');");
E_D("replace into `engrave_order_log` values('113','1429676037','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','25');");
E_D("replace into `engrave_order_log` values('114','1429676040','1','admin','订单商品已由 admin 部门发出，用户等待收货','127.0.0.1','ORDERDELIVERY','25');");
E_D("replace into `engrave_order_log` values('115','1429676098','1','admin','订单商品已由 admin 发出，用户等待收货','127.0.0.1','ORDERDELIVERY','25');");
E_D("replace into `engrave_order_log` values('116','1431563476','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150514001(ID:26)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','26');");
E_D("replace into `engrave_order_log` values('117','1431563484','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','26');");
E_D("replace into `engrave_order_log` values('118','1431563487','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','26');");
E_D("replace into `engrave_order_log` values('119','1432109378','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520001(ID:27)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','27');");
E_D("replace into `engrave_order_log` values('120','1432109384','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','27');");
E_D("replace into `engrave_order_log` values('121','1432109385','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','27');");
E_D("replace into `engrave_order_log` values('122','1432110602','31686','beeejf','用户 beeejf 支付完成','127.0.0.1','CUSTOMERORDERPAY','21');");
E_D("replace into `engrave_order_log` values('123','1432110633','1','admin','订单商品已由 admin 称重打包，总重量：33.00LBS，运费： 9180日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','26');");
E_D("replace into `engrave_order_log` values('124','1432111571','31686','beeejf','用户 beeejf 支付完成。支付金额：737。优惠券面值：0。积分：0','127.0.0.1','CUSTOMERORDERPAY','26');");
E_D("replace into `engrave_order_log` values('125','1432112243','1','admin','订单商品已由 admin 称重打包，总重量：600.00LBS，运费： 12580日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','27');");
E_D("replace into `engrave_order_log` values('126','1432112456','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520002(ID:28)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','28');");
E_D("replace into `engrave_order_log` values('127','1432112462','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','28');");
E_D("replace into `engrave_order_log` values('128','1432112463','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','28');");
E_D("replace into `engrave_order_log` values('129','1432112539','1','admin','订单商品已由 admin 称重打包，总重量：10.00LBS，运费： 9100日元,实际需支付总费用： 10635.22日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','28');");
E_D("replace into `engrave_order_log` values('130','1432112964','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520003(ID:29)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','29');");
E_D("replace into `engrave_order_log` values('131','1432112969','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','29');");
E_D("replace into `engrave_order_log` values('132','1432112970','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','29');");
E_D("replace into `engrave_order_log` values('133','1432112996','1','admin','订单商品已由 admin 称重打包，总重量：200.00LBS，运费： 9100日元,实际需支付总费用： 9820.48日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','29');");
E_D("replace into `engrave_order_log` values('134','1432113272','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520004(ID:30)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','30');");
E_D("replace into `engrave_order_log` values('135','1432113276','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','30');");
E_D("replace into `engrave_order_log` values('136','1432113277','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','30');");
E_D("replace into `engrave_order_log` values('137','1432113310','1','admin','订单商品已由 admin 称重打包，总重量：100.00LBS，运费： 9180日元,实际需支付总费用： 9390.74日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','30');");
E_D("replace into `engrave_order_log` values('138','1432113650','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520005(ID:31)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','31');");
E_D("replace into `engrave_order_log` values('139','1432113656','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','31');");
E_D("replace into `engrave_order_log` values('140','1432113657','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','31');");
E_D("replace into `engrave_order_log` values('141','1432113956','1','admin','订单商品已由 admin 称重打包，总重量：100.00LBS，运费： 2700日元,实际需支付总费用： 2910.74日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','31');");
E_D("replace into `engrave_order_log` values('142','1432114106','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520006(ID:32)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','32');");
E_D("replace into `engrave_order_log` values('143','1432114118','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','32');");
E_D("replace into `engrave_order_log` values('144','1432114120','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','32');");
E_D("replace into `engrave_order_log` values('145','1432114727','1','admin','订单商品已由 admin 称重打包，总重量：100.00LBS，运费： 9100日元,实际需支付总费用： 9210.74日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','32');");
E_D("replace into `engrave_order_log` values('146','1432114781','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150520007(ID:33)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','33');");
E_D("replace into `engrave_order_log` values('147','1432114785','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','33');");
E_D("replace into `engrave_order_log` values('148','1432114786','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','33');");
E_D("replace into `engrave_order_log` values('149','1434768328','31686','beeejf','beeejf 在线提交包裹订单，生成订单号为：150620001(ID:34)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','34');");
E_D("replace into `engrave_order_log` values('150','1434768345','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('151','1435386482','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','23');");
E_D("replace into `engrave_order_log` values('152','1435386592','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','23');");
E_D("replace into `engrave_order_log` values('153','1435386657','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','24');");
E_D("replace into `engrave_order_log` values('154','1435386693','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','24');");
E_D("replace into `engrave_order_log` values('155','1435386718','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','24');");
E_D("replace into `engrave_order_log` values('156','1435386957','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','23');");
E_D("replace into `engrave_order_log` values('157','1435386982','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','23');");
E_D("replace into `engrave_order_log` values('158','1435387075','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','28');");
E_D("replace into `engrave_order_log` values('159','1435387120','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','28');");
E_D("replace into `engrave_order_log` values('160','1435387135','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','27');");
E_D("replace into `engrave_order_log` values('161','1435387208','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('162','1435387274','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','26');");
E_D("replace into `engrave_order_log` values('163','1435387279','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','26');");
E_D("replace into `engrave_order_log` values('164','1435387324','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','21');");
E_D("replace into `engrave_order_log` values('165','1435387825','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','20');");
E_D("replace into `engrave_order_log` values('166','1435387854','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','20');");
E_D("replace into `engrave_order_log` values('167','1435388252','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('168','1435388372','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('169','1435388386','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','19');");
E_D("replace into `engrave_order_log` values('170','1435388407','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','19');");
E_D("replace into `engrave_order_log` values('171','1435388589','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('172','1435388605','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('173','1435388694','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('174','1435388708','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('175','1435388717','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('176','1435388751','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('177','1435388765','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('178','1435388804','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('179','1435388845','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','3');");
E_D("replace into `engrave_order_log` values('180','1435391692','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','21');");
E_D("replace into `engrave_order_log` values('181','1435391714','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','21');");
E_D("replace into `engrave_order_log` values('182','1435391942','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('183','1435391964','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('184','1435392032','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('185','1435392049','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('186','1435392127','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('187','1435392149','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('188','1435396169','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('189','1435396199','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('190','1435396561','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('191','1435398370','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','17');");
E_D("replace into `engrave_order_log` values('192','1435398394','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','17');");
E_D("replace into `engrave_order_log` values('193','1435398432','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','17');");
E_D("replace into `engrave_order_log` values('194','1435402196','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('195','1435402263','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('196','1435402916','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','0');");
E_D("replace into `engrave_order_log` values('197','1435404258','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('198','1435404400','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('199','1435404626','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('200','1435404688','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('201','1435404732','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('202','1435404781','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','34');");
E_D("replace into `engrave_order_log` values('203','1435838708','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','28');");
E_D("replace into `engrave_order_log` values('204','1435838729','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','34');");
E_D("replace into `engrave_order_log` values('205','1435838733','1','admin','订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 10.01日元,实际需支付总费用： 418.03日元 （手动确认支付，待客户支付！）','127.0.0.1','ORDERWEIGHTING','34');");
E_D("replace into `engrave_order_log` values('206','1435838965','31686','beeejf','用户 beeejf 支付完成。支付金额：22.11人民币；优惠券面值：0；积分：0','127.0.0.1','CUSTOMERORDERPAY','34');");
E_D("replace into `engrave_order_log` values('207','1436941275','31698','tester','tester 在线提交包裹订单，生成订单号为：150715001(ID:35)，当前状态为：未处理（费用核算中）','127.0.0.1','ORDERCREATE','35');");
E_D("replace into `engrave_order_log` values('208','1436941285','1','admin','订单商品已由 admin 配货完成','127.0.0.1','ORDERDISTRIBUTION','35');");
E_D("replace into `engrave_order_log` values('209','1436941307','1','admin','订单商品已由 admin 送至打包','127.0.0.1','ORDERPACK','35');");
E_D("replace into `engrave_order_log` values('210','1436965380','31698','tester','tester 在线提交包裹订单，生成订单号为：150715002(ID:36)，当前状态为：未处理（费用核算中）','180.5.124.213','ORDERCREATE','36');");
E_D("replace into `engrave_order_log` values('211','1436965396','1','admin','订单商品已由 admin 配货完成','180.5.124.213','ORDERDISTRIBUTION','36');");
E_D("replace into `engrave_order_log` values('212','1436965436','1','admin','订单商品已由 admin 送至打包','180.5.124.213','ORDERPACK','36');");
E_D("replace into `engrave_order_log` values('213','1436966034','1','admin','订单商品已由 admin 称重打包，总重量：3225.00LBS，运费： 4750日元,实际需支付总费用： 4753.32日元 （手动确认支付，待客户支付！）','180.5.124.213','ORDERWEIGHTING','36');");
E_D("replace into `engrave_order_log` values('214','1436966270','31698','tester','用户 tester 支付完成。支付金额：251.34人民币；优惠券面值：0；积分：0','180.5.124.213','CUSTOMERORDERPAY','36');");
E_D("replace into `engrave_order_log` values('215','1436966300','1','admin','订单商品已由 admin 发出，用户等待收货','180.5.124.213','ORDERDELIVERY','36');");
E_D("replace into `engrave_order_log` values('216','1437005738','1','admin','订单商品已由 admin 送至打包','192.168.1.2','ORDERPACK','24');");
E_D("replace into `engrave_order_log` values('217','1437012679','31699','tester2','tester2 在线提交包裹订单，生成订单号为：150716001(ID:37)，当前状态为：未处理（费用核算中）','180.5.124.213','ORDERCREATE','37');");
E_D("replace into `engrave_order_log` values('218','1437012723','1','admin','订单商品已由 admin 配货完成','180.5.124.213','ORDERDISTRIBUTION','37');");
E_D("replace into `engrave_order_log` values('219','1437012730','1','admin','订单商品已由 admin 送至打包','180.5.124.213','ORDERPACK','37');");
E_D("replace into `engrave_order_log` values('220','1437013320','1','admin','订单商品已由 admin 称重打包，总重量：4895.00g，运费： 5650日元,实际需支付总费用： 5650.00日元 （手动确认支付，待客户支付！）','180.5.124.213','ORDERWEIGHTING','37');");
E_D("replace into `engrave_order_log` values('221','1437013436','31699','tester2','用户 tester2 支付完成。支付金额：288.8人民币；优惠券面值：10；积分：10','180.5.124.213','CUSTOMERORDERPAY','37');");
E_D("replace into `engrave_order_log` values('222','1437013487','1','admin','订单商品已由 admin 部门发出，用户等待收货','180.5.124.213','ORDERDELIVERY','37');");
E_D("replace into `engrave_order_log` values('223','1437013489','1','admin','订单商品已由 admin 发出，用户等待收货','180.5.124.213','ORDERDELIVERY','37');");
E_D("replace into `engrave_order_log` values('224','1437018719','31700','st32821','st32821 在线提交包裹订单，生成订单号为：150716002(ID:38)，当前状态为：未处理（费用核算中）','192.168.1.2','ORDERCREATE','38');");
E_D("replace into `engrave_order_log` values('225','1437018744','1','admin','订单商品已由 admin 配货完成','192.168.1.2','ORDERDISTRIBUTION','38');");
E_D("replace into `engrave_order_log` values('226','1437018754','1','admin','订单商品已由 admin 送至打包','192.168.1.2','ORDERPACK','38');");
E_D("replace into `engrave_order_log` values('227','1437020241','31700','st32821','st32821 在线提交包裹订单，生成订单号为：150716003(ID:39)，当前状态为：未处理（费用核算中）','192.168.1.2','ORDERCREATE','39');");
E_D("replace into `engrave_order_log` values('228','1437020304','1','admin','订单商品已由 admin 配货完成','192.168.1.2','ORDERDISTRIBUTION','39');");
E_D("replace into `engrave_order_log` values('229','1437020317','1','admin','订单商品已由 admin 送至打包','192.168.1.2','ORDERPACK','39');");
E_D("replace into `engrave_order_log` values('230','1437021309','1','admin','订单商品已由 admin 配货完成','192.168.1.2','ORDERDISTRIBUTION','39');");
E_D("replace into `engrave_order_log` values('231','1437022836','1','admin','订单商品已由 admin 送至打包','192.168.1.3','ORDERPACK','39');");
E_D("replace into `engrave_order_log` values('232','1437530025','1','admin','1231231','180.5.163.185','ORDEROPERATOR','39');");
E_D("replace into `engrave_order_log` values('233','1437530037','1','admin','订单已至机场，等待登机','180.5.163.185','ORDEROPERATOR','39');");
E_D("replace into `engrave_order_log` values('234','1437745226','31698','tester','tester 在线提交包裹订单，生成订单号为：150724001(ID:40)，当前状态为：未处理（费用核算中）','180.5.163.185','ORDERCREATE','40');");
E_D("replace into `engrave_order_log` values('235','1437745245','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','40');");
E_D("replace into `engrave_order_log` values('236','1437745256','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','40');");
E_D("replace into `engrave_order_log` values('237','1437745337','1','admin','订单商品已由 admin 称重打包，总重量：1234.00g，运费： 900日元,实际需支付总费用： 1101.00日元 （手动确认支付，待客户支付！）','180.5.163.185','ORDERWEIGHTING','40');");
E_D("replace into `engrave_order_log` values('238','1437745381','31698','tester','用户 tester 支付完成。支付金额：45.41人民币；优惠券面值：0；积分：10','180.5.163.185','CUSTOMERORDERPAY','40');");
E_D("replace into `engrave_order_log` values('239','1437745396','1','admin','订单商品已由 admin 发出，用户等待收货','180.5.163.185','ORDERDELIVERY','40');");
E_D("replace into `engrave_order_log` values('240','1437793400','31698','tester','tester 在线提交包裹订单，生成订单号为：150725001(ID:41)，当前状态为：未处理（费用核算中）','180.5.163.185','ORDERCREATE','41');");
E_D("replace into `engrave_order_log` values('241','1437793419','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','41');");
E_D("replace into `engrave_order_log` values('242','1437793433','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','41');");
E_D("replace into `engrave_order_log` values('243','1437793466','1','admin','订单商品已由 admin 称重打包，总重量：23546.00g，运费： 12350日元,实际需支付总费用： 12650.00日元 （手动确认支付，待客户支付！）','180.5.163.185','ORDERWEIGHTING','41');");
E_D("replace into `engrave_order_log` values('244','1437793496','31698','tester','用户 tester 支付完成。支付金额：623.74人民币；优惠券面值：0；积分：0','180.5.163.185','CUSTOMERORDERPAY','41');");
E_D("replace into `engrave_order_log` values('245','1437799531','1','admin','订单商品已由 admin 发出，用户等待收货','180.5.163.185','ORDERDELIVERY','41');");
E_D("replace into `engrave_order_log` values('246','1437885826','31698','tester','tester 在线提交包裹订单，生成订单号为：150726001(ID:42)，当前状态为：未处理（费用核算中）','180.5.163.185','ORDERCREATE','42');");
E_D("replace into `engrave_order_log` values('247','1437885842','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','42');");
E_D("replace into `engrave_order_log` values('248','1437885850','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','42');");
E_D("replace into `engrave_order_log` values('249','1438001705','1','admin','订单商品已由 admin 称重打包，总重量：123.00g，运费： 3750日元,实际需支付总费用： 3751.00日元 （手动确认支付，待客户支付！）','124.129.188.99','ORDERWEIGHTING','42');");
E_D("replace into `engrave_order_log` values('250','1438001932','31698','tester','tester 在线提交包裹订单，生成订单号为：150727001(ID:43)，当前状态为：未处理（费用核算中）','180.5.163.185','ORDERCREATE','43');");
E_D("replace into `engrave_order_log` values('251','1438002008','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','43');");
E_D("replace into `engrave_order_log` values('252','1438002015','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','43');");
E_D("replace into `engrave_order_log` values('253','1438002083','31698','tester','用户 tester 支付完成。支付金额：189.54人民币；优惠券面值：0；积分：10','180.5.163.185','CUSTOMERORDERPAY','42');");
E_D("replace into `engrave_order_log` values('254','1438002244','31698','tester','tester 在线提交包裹订单，生成订单号为：150727002(ID:44)，当前状态为：未处理（费用核算中）','124.129.188.99','ORDERCREATE','44');");
E_D("replace into `engrave_order_log` values('255','1438002263','1','admin','订单商品已由 admin 配货完成','124.129.188.99','ORDERDISTRIBUTION','44');");
E_D("replace into `engrave_order_log` values('256','1438002267','1','admin','订单商品已由 admin 送至打包','124.129.188.99','ORDERPACK','44');");
E_D("replace into `engrave_order_log` values('257','1438080326','31698','tester','tester 在线提交包裹订单，生成订单号为：150728001(ID:45)，当前状态为：未处理（费用核算中）','180.5.163.185','ORDERCREATE','45');");
E_D("replace into `engrave_order_log` values('258','1438080426','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','45');");
E_D("replace into `engrave_order_log` values('259','1438080432','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','45');");
E_D("replace into `engrave_order_log` values('260','1438080449','1','admin','订单商品已由 admin 称重打包，总重量：12333.00g，运费： 14900日元,实际需支付总费用： 14901.00日元 （手动确认支付，待客户支付！）','180.5.163.185','ORDERWEIGHTING','45');");
E_D("replace into `engrave_order_log` values('261','1438080558','31698','tester','用户 tester 支付完成。支付金额：0人民币；优惠券面值：1000；积分：0','180.5.163.185','CUSTOMERORDERPAY','45');");
E_D("replace into `engrave_order_log` values('262','1438080572','1','admin','订单商品已由 admin 发出，用户等待收货','180.5.163.185','ORDERDELIVERY','45');");
E_D("replace into `engrave_order_log` values('263','1438139542','1','admin','订单商品发货地址已由 admin 修改，用户等待收货','180.5.163.185','ORDERDELIVERY','45');");
E_D("replace into `engrave_order_log` values('264','1438503037','31698','tester','tester 在线提交包裹订单，生成订单号为：150802001(ID:46)，当前状态为：未处理（费用核算中）','192.168.1.3','ORDERCREATE','46');");
E_D("replace into `engrave_order_log` values('265','1438503058','1','admin','订单商品已由 admin 配货完成','192.168.1.3','ORDERDISTRIBUTION','46');");
E_D("replace into `engrave_order_log` values('266','1438503069','1','admin','订单商品已由 admin 送至打包','192.168.1.3','ORDERPACK','46');");
E_D("replace into `engrave_order_log` values('267','1438503083','1','admin','订单商品已由 admin 称重打包，总重量：2568.00g，运费： 3750日元,实际需支付总费用： 11315.50日元 （手动确认支付，待客户支付！）','192.168.1.3','ORDERWEIGHTING','46');");
E_D("replace into `engrave_order_log` values('268','1438503129','1','admin','订单商品已由 admin 称重打包，总重量：123.00g，运费： 1236日元,实际需支付总费用： 1237.00日元 （手动确认支付，待客户支付！）','192.168.1.3','ORDERWEIGHTING','46');");
E_D("replace into `engrave_order_log` values('269','1438503140','31698','tester','用户 tester 支付完成。支付金额：52.54人民币；优惠券面值：0；积分：1000','192.168.1.3','CUSTOMERORDERPAY','46');");
E_D("replace into `engrave_order_log` values('270','1438503617','31700','st32821','st32821 在线提交包裹订单，生成订单号为：150802002(ID:47)，当前状态为：未处理（费用核算中）','192.168.1.3','ORDERCREATE','47');");
E_D("replace into `engrave_order_log` values('271','1438503664','1','admin','订单商品已由 admin 配货完成','192.168.1.3','ORDERDISTRIBUTION','47');");
E_D("replace into `engrave_order_log` values('272','1438503666','1','admin','订单商品已由 admin 送至打包','192.168.1.3','ORDERPACK','47');");
E_D("replace into `engrave_order_log` values('273','1438503903','31698','tester','tester 在线提交包裹订单，生成订单号为：150802002(ID:48)，当前状态为：未处理（费用核算中）','192.168.1.3','ORDERCREATE','48');");
E_D("replace into `engrave_order_log` values('274','1438503916','1','admin','订单商品已由 admin 配货完成','192.168.1.3','ORDERDISTRIBUTION','48');");
E_D("replace into `engrave_order_log` values('275','1438504570','1','admin','订单商品已由 admin 送至打包','192.168.1.3','ORDERPACK','48');");
E_D("replace into `engrave_order_log` values('276','1438504588','1','admin','订单商品已由 admin 称重打包，总重量：123123.00g，运费： 150日元,实际需支付总费用： 151.00日元 （手动确认支付，待客户支付！）','192.168.1.3','ORDERWEIGHTING','48');");
E_D("replace into `engrave_order_log` values('277','1438504630','31698','tester','用户 tester 支付完成。支付金额：0人民币；优惠券面值：0；积分：763','192.168.1.3','CUSTOMERORDERPAY','48');");
E_D("replace into `engrave_order_log` values('278','1438504690','1','admin','订单商品已由 admin 发出，货运单号为：XXXXXx用户等待收货','192.168.1.3','ORDERDELIVERY','48');");
E_D("replace into `engrave_order_log` values('279','1438599349','31698','tester','tester 在线提交包裹订单，生成订单号为：150803001(ID:49)，当前状态为：未处理（费用核算中）','119.167.48.140','ORDERCREATE','49');");
E_D("replace into `engrave_order_log` values('280','1438599413','1','admin','订单商品已由 admin 配货完成','119.167.48.140','ORDERDISTRIBUTION','49');");
E_D("replace into `engrave_order_log` values('281','1438599418','1','admin','订单商品已由 admin 送至打包','119.167.48.140','ORDERPACK','49');");
E_D("replace into `engrave_order_log` values('282','1438599432','1','admin','订单商品已由 admin 称重打包，总重量：1.00g，运费： 2500日元,实际需支付总费用： 2701.90日元 （手动确认支付，待客户支付！）','119.167.48.140','ORDERWEIGHTING','49');");
E_D("replace into `engrave_order_log` values('283','1438604959','31698','tester','用户 tester 支付完成。支付金额：136.5人民币；优惠券面值：0；积分：10','180.5.163.185','CUSTOMERORDERPAY','49');");
E_D("replace into `engrave_order_log` values('284','1438606271','1','admin','订单商品已由 admin 配货完成','180.5.163.185','ORDERDISTRIBUTION','48');");
E_D("replace into `engrave_order_log` values('285','1438606274','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','48');");
E_D("replace into `engrave_order_log` values('286','1438689902','31698','tester','用户 tester 支付完成。支付金额：126.6人民币；优惠券面值：0；积分：1000','180.5.163.185','CUSTOMERORDERPAY','49');");
E_D("replace into `engrave_order_log` values('287','1438690074','31698','tester','用户 tester 支付完成。支付金额：136.6人民币；优惠券面值：0；积分：0','180.5.163.185','CUSTOMERORDERPAY','49');");
E_D("replace into `engrave_order_log` values('288','1438690760','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','49');");
E_D("replace into `engrave_order_log` values('289','1438690877','1','admin','订单商品已由 admin 称重打包，总重量：1.00g，运费： 2500日元,实际需支付总费用： 2702.90日元 （称重后自动结算，已支付成功！）','180.5.163.185','ORDERWEIGHTING','49');");
E_D("replace into `engrave_order_log` values('290','1438691200','1','admin','订单商品已由 admin 送至打包','180.5.163.185','ORDERPACK','49');");
E_D("replace into `engrave_order_log` values('291','1438726398','1','admin','订单商品已由 admin 称重打包，总重量：413231.00g，运费： 148850日元,实际需支付总费用： 149052.90日元 （称重后自动结算，已支付成功！）','180.5.163.185','ORDERWEIGHTING','49');");

require("../../inc/footer.php");
?>