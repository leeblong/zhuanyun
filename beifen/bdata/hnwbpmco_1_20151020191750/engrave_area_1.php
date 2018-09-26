<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_area`;");
E_C("CREATE TABLE `engrave_area` (
  `Id` int(12) unsigned NOT NULL AUTO_INCREMENT COMMENT '地区ID',
  `Name` varchar(30) NOT NULL DEFAULT '' COMMENT '地区名称',
  `ParentId` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '地区父ID',
  `IsDeleteArea` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=89000001 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_area` values('1','中国','0','0');");
E_D("replace into `engrave_area` values('11000000','北京市','1','0');");
E_D("replace into `engrave_area` values('11010100','东城区','11000000','0');");
E_D("replace into `engrave_area` values('11010200','西城区','11000000','0');");
E_D("replace into `engrave_area` values('11010300','崇文区','11000000','0');");
E_D("replace into `engrave_area` values('11010400','宣武区','11000000','0');");
E_D("replace into `engrave_area` values('11010500','朝阳区','11000000','0');");
E_D("replace into `engrave_area` values('11010600','丰台区','11000000','0');");
E_D("replace into `engrave_area` values('11010700','石景山区','11000000','0');");
E_D("replace into `engrave_area` values('11010800','海淀区','11000000','0');");
E_D("replace into `engrave_area` values('11010900','门头沟区','11000000','0');");
E_D("replace into `engrave_area` values('11011100','房山区','11000000','0');");
E_D("replace into `engrave_area` values('11011200','通州区','11000000','0');");
E_D("replace into `engrave_area` values('11011300','顺义区','11000000','0');");
E_D("replace into `engrave_area` values('11011400','昌平区','11000000','0');");
E_D("replace into `engrave_area` values('11011500','大兴区','11000000','0');");
E_D("replace into `engrave_area` values('11011600','怀柔区','11000000','0');");
E_D("replace into `engrave_area` values('11011700','平谷区','11000000','0');");
E_D("replace into `engrave_area` values('11022800','密云县','11000000','0');");
E_D("replace into `engrave_area` values('11022900','延庆县','11000000','0');");
E_D("replace into `engrave_area` values('12000000','天津市','1','0');");
E_D("replace into `engrave_area` values('12010100','和平区','12000000','0');");
E_D("replace into `engrave_area` values('12010200','河东区','12000000','0');");
E_D("replace into `engrave_area` values('12010300','河西区','12000000','0');");
E_D("replace into `engrave_area` values('12010400','南开区','12000000','0');");
E_D("replace into `engrave_area` values('12010500','河北区','12000000','0');");
E_D("replace into `engrave_area` values('12010600','红桥区','12000000','0');");
E_D("replace into `engrave_area` values('12010700','塘沽区','12000000','0');");
E_D("replace into `engrave_area` values('12010800','汉沽区','12000000','0');");
E_D("replace into `engrave_area` values('12010900','大港区','12000000','0');");
E_D("replace into `engrave_area` values('12011000','东丽区','12000000','0');");
E_D("replace into `engrave_area` values('12011100','西青区','12000000','0');");
E_D("replace into `engrave_area` values('12011200','津南区','12000000','0');");
E_D("replace into `engrave_area` values('12011300','北辰区','12000000','0');");
E_D("replace into `engrave_area` values('12011400','武清区','12000000','0');");
E_D("replace into `engrave_area` values('12011500','宝坻区','12000000','0');");
E_D("replace into `engrave_area` values('12022100','宁河县','12000000','0');");
E_D("replace into `engrave_area` values('12022300','静海县','12000000','0');");
E_D("replace into `engrave_area` values('12022500','蓟县','12000000','0');");
E_D("replace into `engrave_area` values('13000000','河北省','1','0');");
E_D("replace into `engrave_area` values('13010000','石家庄市','13000000','0');");
E_D("replace into `engrave_area` values('13010100','市辖区','13010000','0');");
E_D("replace into `engrave_area` values('13010200','长安区','13010000','0');");
E_D("replace into `engrave_area` values('13010300','桥东区','13010000','0');");
E_D("replace into `engrave_area` values('13010400','桥西区','13010000','0');");
E_D("replace into `engrave_area` values('13010500','新华区','13010000','0');");
E_D("replace into `engrave_area` values('13010700','井陉矿区','13010000','0');");
E_D("replace into `engrave_area` values('13010800','裕华区','13010000','0');");
E_D("replace into `engrave_area` values('13012100','井陉县','13010000','0');");
E_D("replace into `engrave_area` values('13012300','正定县','13010000','0');");
E_D("replace into `engrave_area` values('13012400','栾城县','13010000','0');");
E_D("replace into `engrave_area` values('13012500','行唐县','13010000','0');");
E_D("replace into `engrave_area` values('13012600','灵寿县','13010000','0');");
E_D("replace into `engrave_area` values('13012700','高邑县','13010000','0');");
E_D("replace into `engrave_area` values('13012800','深泽县','13010000','0');");
E_D("replace into `engrave_area` values('13012900','赞皇县','13010000','0');");
E_D("replace into `engrave_area` values('13013000','无极县','13010000','0');");
E_D("replace into `engrave_area` values('13013100','平山县','13010000','0');");
E_D("replace into `engrave_area` values('13013200','元氏县','13010000','0');");
E_D("replace into `engrave_area` values('13013300','赵县','13010000','0');");
E_D("replace into `engrave_area` values('13018100','辛集市','13010000','0');");
E_D("replace into `engrave_area` values('13018200','藁城市','13010000','0');");
E_D("replace into `engrave_area` values('13018300','晋州市','13010000','0');");
E_D("replace into `engrave_area` values('13018400','新乐市','13010000','0');");
E_D("replace into `engrave_area` values('13018500','鹿泉市','13010000','0');");
E_D("replace into `engrave_area` values('13020000','唐山市','13000000','0');");
E_D("replace into `engrave_area` values('13020100','市辖区','13020000','0');");
E_D("replace into `engrave_area` values('13020200','路南区','13020000','0');");
E_D("replace into `engrave_area` values('13020300','路北区','13020000','0');");
E_D("replace into `engrave_area` values('13020400','古冶区','13020000','0');");
E_D("replace into `engrave_area` values('13020500','开平区','13020000','0');");
E_D("replace into `engrave_area` values('13020700','丰南区','13020000','0');");
E_D("replace into `engrave_area` values('13020800','丰润区','13020000','0');");
E_D("replace into `engrave_area` values('13022300','滦县','13020000','0');");
E_D("replace into `engrave_area` values('13022400','滦南县','13020000','0');");
E_D("replace into `engrave_area` values('13022500','乐亭县','13020000','0');");
E_D("replace into `engrave_area` values('13022700','迁西县','13020000','0');");
E_D("replace into `engrave_area` values('13022900','玉田县','13020000','0');");
E_D("replace into `engrave_area` values('13023000','唐海县','13020000','0');");
E_D("replace into `engrave_area` values('13028100','遵化市','13020000','0');");
E_D("replace into `engrave_area` values('13028300','迁安市','13020000','0');");
E_D("replace into `engrave_area` values('13030000','秦皇岛市','13000000','0');");
E_D("replace into `engrave_area` values('13030100','市辖区','13030000','0');");
E_D("replace into `engrave_area` values('13030200','海港区','13030000','0');");
E_D("replace into `engrave_area` values('13030300','山海关区','13030000','0');");
E_D("replace into `engrave_area` values('13030400','北戴河区','13030000','0');");
E_D("replace into `engrave_area` values('13032100','青龙满族自治县','13030000','0');");
E_D("replace into `engrave_area` values('13032200','昌黎县','13030000','0');");
E_D("replace into `engrave_area` values('13032300','抚宁县','13030000','0');");
E_D("replace into `engrave_area` values('13032400','卢龙县','13030000','0');");
E_D("replace into `engrave_area` values('13040000','邯郸市','13000000','0');");
E_D("replace into `engrave_area` values('13040100','市辖区','13040000','0');");
E_D("replace into `engrave_area` values('13040200','邯山区','13040000','0');");
E_D("replace into `engrave_area` values('13040300','丛台区','13040000','0');");
E_D("replace into `engrave_area` values('13040400','复兴区','13040000','0');");
E_D("replace into `engrave_area` values('13040600','峰峰矿区','13040000','0');");
E_D("replace into `engrave_area` values('13042100','邯郸县','13040000','0');");
E_D("replace into `engrave_area` values('13042300','临漳县','13040000','0');");
E_D("replace into `engrave_area` values('13042400','成安县','13040000','0');");
E_D("replace into `engrave_area` values('13042500','大名县','13040000','0');");
E_D("replace into `engrave_area` values('13042600','涉县','13040000','0');");
E_D("replace into `engrave_area` values('13042700','磁县','13040000','0');");
E_D("replace into `engrave_area` values('13042800','肥乡县','13040000','0');");
E_D("replace into `engrave_area` values('13042900','永年县','13040000','0');");
E_D("replace into `engrave_area` values('13043000','邱县','13040000','0');");
E_D("replace into `engrave_area` values('13043100','鸡泽县','13040000','0');");
E_D("replace into `engrave_area` values('13043200','广平县','13040000','0');");
E_D("replace into `engrave_area` values('13043300','馆陶县','13040000','0');");
E_D("replace into `engrave_area` values('13043400','魏县','13040000','0');");
E_D("replace into `engrave_area` values('13043500','曲周县','13040000','0');");
E_D("replace into `engrave_area` values('13048100','武安市','13040000','0');");
E_D("replace into `engrave_area` values('13050000','邢台市','13000000','0');");
E_D("replace into `engrave_area` values('13050100','市辖区','13050000','0');");
E_D("replace into `engrave_area` values('13050200','桥东区','13050000','0');");
E_D("replace into `engrave_area` values('13050300','桥西区','13050000','0');");
E_D("replace into `engrave_area` values('13052100','邢台县','13050000','0');");
E_D("replace into `engrave_area` values('13052200','临城县','13050000','0');");
E_D("replace into `engrave_area` values('13052300','内丘县','13050000','0');");
E_D("replace into `engrave_area` values('13052400','柏乡县','13050000','0');");
E_D("replace into `engrave_area` values('13052500','隆尧县','13050000','0');");
E_D("replace into `engrave_area` values('13052600','任县','13050000','0');");
E_D("replace into `engrave_area` values('13052700','南和县','13050000','0');");
E_D("replace into `engrave_area` values('13052800','宁晋县','13050000','0');");
E_D("replace into `engrave_area` values('13052900','巨鹿县','13050000','0');");
E_D("replace into `engrave_area` values('13053000','新河县','13050000','0');");
E_D("replace into `engrave_area` values('13053100','广宗县','13050000','0');");
E_D("replace into `engrave_area` values('13053200','平乡县','13050000','0');");
E_D("replace into `engrave_area` values('13053300','威县','13050000','0');");
E_D("replace into `engrave_area` values('13053400','清河县','13050000','0');");
E_D("replace into `engrave_area` values('13053500','临西县','13050000','0');");
E_D("replace into `engrave_area` values('13058100','南宫市','13050000','0');");
E_D("replace into `engrave_area` values('13058200','沙河市','13050000','0');");
E_D("replace into `engrave_area` values('13060000','保定市','13000000','0');");
E_D("replace into `engrave_area` values('13060100','市辖区','13060000','0');");
E_D("replace into `engrave_area` values('13060200','新市区','13060000','0');");
E_D("replace into `engrave_area` values('13060300','北市区','13060000','0');");
E_D("replace into `engrave_area` values('13060400','南市区','13060000','0');");
E_D("replace into `engrave_area` values('13062100','满城县','13060000','0');");
E_D("replace into `engrave_area` values('13062200','清苑县','13060000','0');");
E_D("replace into `engrave_area` values('13062300','涞水县','13060000','0');");
E_D("replace into `engrave_area` values('13062400','阜平县','13060000','0');");
E_D("replace into `engrave_area` values('13062500','徐水县','13060000','0');");
E_D("replace into `engrave_area` values('13062600','定兴县','13060000','0');");
E_D("replace into `engrave_area` values('13062700','唐县','13060000','0');");
E_D("replace into `engrave_area` values('13062800','高阳县','13060000','0');");
E_D("replace into `engrave_area` values('13062900','容城县','13060000','0');");
E_D("replace into `engrave_area` values('13063000','涞源县','13060000','0');");
E_D("replace into `engrave_area` values('13063100','望都县','13060000','0');");
E_D("replace into `engrave_area` values('13063200','安新县','13060000','0');");
E_D("replace into `engrave_area` values('13063300','易县','13060000','0');");
E_D("replace into `engrave_area` values('13063400','曲阳县','13060000','0');");
E_D("replace into `engrave_area` values('13063500','蠡县','13060000','0');");
E_D("replace into `engrave_area` values('13063600','顺平县','13060000','0');");
E_D("replace into `engrave_area` values('13063700','博野县','13060000','0');");
E_D("replace into `engrave_area` values('13063800','雄县','13060000','0');");
E_D("replace into `engrave_area` values('13068100','涿州市','13060000','0');");
E_D("replace into `engrave_area` values('13068200','定州市','13060000','0');");
E_D("replace into `engrave_area` values('13068300','安国市','13060000','0');");
E_D("replace into `engrave_area` values('13068400','高碑店市','13060000','0');");
E_D("replace into `engrave_area` values('13070000','张家口市','13000000','0');");
E_D("replace into `engrave_area` values('13070100','市辖区','13070000','0');");
E_D("replace into `engrave_area` values('13070200','桥东区','13070000','0');");
E_D("replace into `engrave_area` values('13070300','桥西区','13070000','0');");
E_D("replace into `engrave_area` values('13070500','宣化区','13070000','0');");
E_D("replace into `engrave_area` values('13070600','下花园区','13070000','0');");
E_D("replace into `engrave_area` values('13072100','宣化县','13070000','0');");
E_D("replace into `engrave_area` values('13072200','张北县','13070000','0');");
E_D("replace into `engrave_area` values('13072300','康保县','13070000','0');");
E_D("replace into `engrave_area` values('13072400','沽源县','13070000','0');");
E_D("replace into `engrave_area` values('13072500','尚义县','13070000','0');");
E_D("replace into `engrave_area` values('13072600','蔚县','13070000','0');");
E_D("replace into `engrave_area` values('13072700','阳原县','13070000','0');");
E_D("replace into `engrave_area` values('13072800','怀安县','13070000','0');");
E_D("replace into `engrave_area` values('13072900','万全县','13070000','0');");
E_D("replace into `engrave_area` values('13073000','怀来县','13070000','0');");
E_D("replace into `engrave_area` values('13073100','涿鹿县','13070000','0');");
E_D("replace into `engrave_area` values('13073200','赤城县','13070000','0');");
E_D("replace into `engrave_area` values('13073300','崇礼县','13070000','0');");
E_D("replace into `engrave_area` values('13080000','承德市','13000000','0');");
E_D("replace into `engrave_area` values('13080100','市辖区','13080000','0');");
E_D("replace into `engrave_area` values('13080200','双桥区','13080000','0');");
E_D("replace into `engrave_area` values('13080300','双滦区','13080000','0');");
E_D("replace into `engrave_area` values('13080400','鹰手营子矿区','13080000','0');");
E_D("replace into `engrave_area` values('13082100','承德县','13080000','0');");
E_D("replace into `engrave_area` values('13082200','兴隆县','13080000','0');");
E_D("replace into `engrave_area` values('13082300','平泉县','13080000','0');");
E_D("replace into `engrave_area` values('13082400','滦平县','13080000','0');");
E_D("replace into `engrave_area` values('13082500','隆化县','13080000','0');");
E_D("replace into `engrave_area` values('13082600','丰宁满族自治县','13080000','0');");
E_D("replace into `engrave_area` values('13082700','宽城满族自治县','13080000','0');");
E_D("replace into `engrave_area` values('13082800','围场满族蒙古族自治县','13080000','0');");
E_D("replace into `engrave_area` values('13090000','沧州市','13000000','0');");
E_D("replace into `engrave_area` values('13090100','市辖区','13090000','0');");
E_D("replace into `engrave_area` values('13090200','新华区','13090000','0');");
E_D("replace into `engrave_area` values('13090300','运河区','13090000','0');");
E_D("replace into `engrave_area` values('13092100','沧县','13090000','0');");
E_D("replace into `engrave_area` values('13092200','青县','13090000','0');");
E_D("replace into `engrave_area` values('13092300','东光县','13090000','0');");
E_D("replace into `engrave_area` values('13092400','海兴县','13090000','0');");
E_D("replace into `engrave_area` values('13092500','盐山县','13090000','0');");
E_D("replace into `engrave_area` values('13092600','肃宁县','13090000','0');");
E_D("replace into `engrave_area` values('13092700','南皮县','13090000','0');");
E_D("replace into `engrave_area` values('13092800','吴桥县','13090000','0');");
E_D("replace into `engrave_area` values('13092900','献县','13090000','0');");
E_D("replace into `engrave_area` values('13093000','孟村回族自治县','13090000','0');");
E_D("replace into `engrave_area` values('13098100','泊头市','13090000','0');");
E_D("replace into `engrave_area` values('13098200','任丘市','13090000','0');");
E_D("replace into `engrave_area` values('13098300','黄骅市','13090000','0');");
E_D("replace into `engrave_area` values('13098400','河间市','13090000','0');");
E_D("replace into `engrave_area` values('13100000','廊坊市','13000000','0');");
E_D("replace into `engrave_area` values('13100100','市辖区','13100000','0');");
E_D("replace into `engrave_area` values('13100200','安次区','13100000','0');");
E_D("replace into `engrave_area` values('13100300','广阳区','13100000','0');");
E_D("replace into `engrave_area` values('13102200','固安县','13100000','0');");
E_D("replace into `engrave_area` values('13102300','永清县','13100000','0');");
E_D("replace into `engrave_area` values('13102400','香河县','13100000','0');");
E_D("replace into `engrave_area` values('13102500','大城县','13100000','0');");
E_D("replace into `engrave_area` values('13102600','文安县','13100000','0');");
E_D("replace into `engrave_area` values('13102800','大厂回族自治县','13100000','0');");
E_D("replace into `engrave_area` values('13108100','霸州市','13100000','0');");
E_D("replace into `engrave_area` values('13108200','三河市','13100000','0');");
E_D("replace into `engrave_area` values('13110000','衡水市','13000000','0');");
E_D("replace into `engrave_area` values('13110100','市辖区','13110000','0');");
E_D("replace into `engrave_area` values('13110200','桃城区','13110000','0');");
E_D("replace into `engrave_area` values('13112100','枣强县','13110000','0');");
E_D("replace into `engrave_area` values('13112200','武邑县','13110000','0');");
E_D("replace into `engrave_area` values('13112300','武强县','13110000','0');");
E_D("replace into `engrave_area` values('13112400','饶阳县','13110000','0');");
E_D("replace into `engrave_area` values('13112500','安平县','13110000','0');");
E_D("replace into `engrave_area` values('13112600','故城县','13110000','0');");
E_D("replace into `engrave_area` values('13112700','景县','13110000','0');");
E_D("replace into `engrave_area` values('13112800','阜城县','13110000','0');");
E_D("replace into `engrave_area` values('13118100','冀州市','13110000','0');");
E_D("replace into `engrave_area` values('13118200','深州市','13110000','0');");
E_D("replace into `engrave_area` values('14000000','山西省','1','0');");
E_D("replace into `engrave_area` values('14010000','太原市','14000000','0');");
E_D("replace into `engrave_area` values('14010100','市辖区','14010000','0');");
E_D("replace into `engrave_area` values('14010500','小店区','14010000','0');");
E_D("replace into `engrave_area` values('14010600','迎泽区','14010000','0');");
E_D("replace into `engrave_area` values('14010700','杏花岭区','14010000','0');");
E_D("replace into `engrave_area` values('14010800','尖草坪区','14010000','0');");
E_D("replace into `engrave_area` values('14010900','万柏林区','14010000','0');");
E_D("replace into `engrave_area` values('14011000','晋源区','14010000','0');");
E_D("replace into `engrave_area` values('14012100','清徐县','14010000','0');");
E_D("replace into `engrave_area` values('14012200','阳曲县','14010000','0');");
E_D("replace into `engrave_area` values('14012300','娄烦县','14010000','0');");
E_D("replace into `engrave_area` values('14018100','古交市','14010000','0');");
E_D("replace into `engrave_area` values('14020000','大同市','14000000','0');");
E_D("replace into `engrave_area` values('14020100','市辖区','14020000','0');");
E_D("replace into `engrave_area` values('14020200','城区','14020000','0');");
E_D("replace into `engrave_area` values('14020300','矿区','14020000','0');");
E_D("replace into `engrave_area` values('14021100','南郊区','14020000','0');");
E_D("replace into `engrave_area` values('14021200','新荣区','14020000','0');");
E_D("replace into `engrave_area` values('14022100','阳高县','14020000','0');");
E_D("replace into `engrave_area` values('14022200','天镇县','14020000','0');");
E_D("replace into `engrave_area` values('14022300','广灵县','14020000','0');");
E_D("replace into `engrave_area` values('14022400','灵丘县','14020000','0');");
E_D("replace into `engrave_area` values('14022500','浑源县','14020000','0');");
E_D("replace into `engrave_area` values('14022600','左云县','14020000','0');");
E_D("replace into `engrave_area` values('14022700','大同县','14020000','0');");
E_D("replace into `engrave_area` values('14030000','阳泉市','14000000','0');");
E_D("replace into `engrave_area` values('14030100','市辖区','14030000','0');");
E_D("replace into `engrave_area` values('14030200','城区','14030000','0');");
E_D("replace into `engrave_area` values('14030300','矿区','14030000','0');");
E_D("replace into `engrave_area` values('14031100','郊区','14030000','0');");
E_D("replace into `engrave_area` values('14032100','平定县','14030000','0');");
E_D("replace into `engrave_area` values('14032200','盂县','14030000','0');");
E_D("replace into `engrave_area` values('14040000','长治市','14000000','0');");
E_D("replace into `engrave_area` values('14040100','市辖区','14040000','0');");
E_D("replace into `engrave_area` values('14040200','城区','14040000','0');");
E_D("replace into `engrave_area` values('14041100','郊区','14040000','0');");
E_D("replace into `engrave_area` values('14042100','长治县','14040000','0');");
E_D("replace into `engrave_area` values('14042300','襄垣县','14040000','0');");
E_D("replace into `engrave_area` values('14042400','屯留县','14040000','0');");
E_D("replace into `engrave_area` values('14042500','平顺县','14040000','0');");
E_D("replace into `engrave_area` values('14042600','黎城县','14040000','0');");
E_D("replace into `engrave_area` values('14042700','壶关县','14040000','0');");
E_D("replace into `engrave_area` values('14042800','长子县','14040000','0');");
E_D("replace into `engrave_area` values('14042900','武乡县','14040000','0');");
E_D("replace into `engrave_area` values('14043000','沁县','14040000','0');");
E_D("replace into `engrave_area` values('14043100','沁源县','14040000','0');");
E_D("replace into `engrave_area` values('14048100','潞城市','14040000','0');");
E_D("replace into `engrave_area` values('14050000','晋城市','14000000','0');");
E_D("replace into `engrave_area` values('14050100','市辖区','14050000','0');");
E_D("replace into `engrave_area` values('14050200','城区','14050000','0');");
E_D("replace into `engrave_area` values('14052100','沁水县','14050000','0');");
E_D("replace into `engrave_area` values('14052200','阳城县','14050000','0');");
E_D("replace into `engrave_area` values('14052400','陵川县','14050000','0');");
E_D("replace into `engrave_area` values('14052500','泽州县','14050000','0');");
E_D("replace into `engrave_area` values('14058100','高平市','14050000','0');");
E_D("replace into `engrave_area` values('14060000','朔州市','14000000','0');");
E_D("replace into `engrave_area` values('14060100','市辖区','14060000','0');");
E_D("replace into `engrave_area` values('14060200','朔城区','14060000','0');");
E_D("replace into `engrave_area` values('14060300','平鲁区','14060000','0');");
E_D("replace into `engrave_area` values('14062100','山阴县','14060000','0');");
E_D("replace into `engrave_area` values('14062200','应县','14060000','0');");
E_D("replace into `engrave_area` values('14062300','右玉县','14060000','0');");
E_D("replace into `engrave_area` values('14062400','怀仁县','14060000','0');");
E_D("replace into `engrave_area` values('14070000','晋中市','14000000','0');");
E_D("replace into `engrave_area` values('14070100','市辖区','14070000','0');");
E_D("replace into `engrave_area` values('14070200','榆次区','14070000','0');");
E_D("replace into `engrave_area` values('14072100','榆社县','14070000','0');");
E_D("replace into `engrave_area` values('14072200','左权县','14070000','0');");
E_D("replace into `engrave_area` values('14072300','和顺县','14070000','0');");
E_D("replace into `engrave_area` values('14072400','昔阳县','14070000','0');");
E_D("replace into `engrave_area` values('14072500','寿阳县','14070000','0');");
E_D("replace into `engrave_area` values('14072600','太谷县','14070000','0');");
E_D("replace into `engrave_area` values('14072700','祁县','14070000','0');");
E_D("replace into `engrave_area` values('14072800','平遥县','14070000','0');");
E_D("replace into `engrave_area` values('14072900','灵石县','14070000','0');");
E_D("replace into `engrave_area` values('14078100','介休市','14070000','0');");
E_D("replace into `engrave_area` values('14080000','运城市','14000000','0');");
E_D("replace into `engrave_area` values('14080100','市辖区','14080000','0');");
E_D("replace into `engrave_area` values('14080200','盐湖区','14080000','0');");
E_D("replace into `engrave_area` values('14082100','临猗县','14080000','0');");
E_D("replace into `engrave_area` values('14082200','万荣县','14080000','0');");
E_D("replace into `engrave_area` values('14082300','闻喜县','14080000','0');");
E_D("replace into `engrave_area` values('14082400','稷山县','14080000','0');");
E_D("replace into `engrave_area` values('14082500','新绛县','14080000','0');");
E_D("replace into `engrave_area` values('14082600','绛县','14080000','0');");
E_D("replace into `engrave_area` values('14082700','垣曲县','14080000','0');");
E_D("replace into `engrave_area` values('14082800','夏县','14080000','0');");
E_D("replace into `engrave_area` values('14082900','平陆县','14080000','0');");
E_D("replace into `engrave_area` values('14083000','芮城县','14080000','0');");
E_D("replace into `engrave_area` values('14088100','永济市','14080000','0');");
E_D("replace into `engrave_area` values('14088200','河津市','14080000','0');");
E_D("replace into `engrave_area` values('14090000','忻州市','14000000','0');");
E_D("replace into `engrave_area` values('14090100','市辖区','14090000','0');");
E_D("replace into `engrave_area` values('14090200','忻府区','14090000','0');");
E_D("replace into `engrave_area` values('14092100','定襄县','14090000','0');");
E_D("replace into `engrave_area` values('14092200','五台县','14090000','0');");
E_D("replace into `engrave_area` values('14092300','代县','14090000','0');");
E_D("replace into `engrave_area` values('14092400','繁峙县','14090000','0');");
E_D("replace into `engrave_area` values('14092500','宁武县','14090000','0');");
E_D("replace into `engrave_area` values('14092600','静乐县','14090000','0');");
E_D("replace into `engrave_area` values('14092700','神池县','14090000','0');");
E_D("replace into `engrave_area` values('14092800','五寨县','14090000','0');");
E_D("replace into `engrave_area` values('14092900','岢岚县','14090000','0');");
E_D("replace into `engrave_area` values('14093000','河曲县','14090000','0');");
E_D("replace into `engrave_area` values('14093100','保德县','14090000','0');");
E_D("replace into `engrave_area` values('14093200','偏关县','14090000','0');");
E_D("replace into `engrave_area` values('14098100','原平市','14090000','0');");
E_D("replace into `engrave_area` values('14100000','临汾市','14000000','0');");
E_D("replace into `engrave_area` values('14100100','市辖区','14100000','0');");
E_D("replace into `engrave_area` values('14100200','尧都区','14100000','0');");
E_D("replace into `engrave_area` values('14102100','曲沃县','14100000','0');");
E_D("replace into `engrave_area` values('14102200','翼城县','14100000','0');");
E_D("replace into `engrave_area` values('14102300','襄汾县','14100000','0');");
E_D("replace into `engrave_area` values('14102400','洪洞县','14100000','0');");
E_D("replace into `engrave_area` values('14102500','古县','14100000','0');");
E_D("replace into `engrave_area` values('14102600','安泽县','14100000','0');");
E_D("replace into `engrave_area` values('14102700','浮山县','14100000','0');");
E_D("replace into `engrave_area` values('14102800','吉县','14100000','0');");
E_D("replace into `engrave_area` values('14102900','乡宁县','14100000','0');");
E_D("replace into `engrave_area` values('14103000','大宁县','14100000','0');");
E_D("replace into `engrave_area` values('14103100','隰县','14100000','0');");
E_D("replace into `engrave_area` values('14103200','永和县','14100000','0');");
E_D("replace into `engrave_area` values('14103300','蒲县','14100000','0');");
E_D("replace into `engrave_area` values('14103400','汾西县','14100000','0');");
E_D("replace into `engrave_area` values('14108100','侯马市','14100000','0');");
E_D("replace into `engrave_area` values('14108200','霍州市','14100000','0');");
E_D("replace into `engrave_area` values('14110000','吕梁市','14000000','0');");
E_D("replace into `engrave_area` values('14110100','市辖区','14110000','0');");
E_D("replace into `engrave_area` values('14110200','离石区','14110000','0');");
E_D("replace into `engrave_area` values('14112100','文水县','14110000','0');");
E_D("replace into `engrave_area` values('14112200','交城县','14110000','0');");
E_D("replace into `engrave_area` values('14112300','兴县','14110000','0');");
E_D("replace into `engrave_area` values('14112400','临县','14110000','0');");
E_D("replace into `engrave_area` values('14112500','柳林县','14110000','0');");
E_D("replace into `engrave_area` values('14112600','石楼县','14110000','0');");
E_D("replace into `engrave_area` values('14112700','岚县','14110000','0');");
E_D("replace into `engrave_area` values('14112800','方山县','14110000','0');");
E_D("replace into `engrave_area` values('14112900','中阳县','14110000','0');");
E_D("replace into `engrave_area` values('14113000','交口县','14110000','0');");
E_D("replace into `engrave_area` values('14118100','孝义市','14110000','0');");
E_D("replace into `engrave_area` values('14118200','汾阳市','14110000','0');");
E_D("replace into `engrave_area` values('15000000','内蒙古自治区','1','0');");
E_D("replace into `engrave_area` values('15010000','呼和浩特市','15000000','0');");
E_D("replace into `engrave_area` values('15010100','市辖区','15010000','0');");
E_D("replace into `engrave_area` values('15010200','新城区','15010000','0');");
E_D("replace into `engrave_area` values('15010300','回民区','15010000','0');");
E_D("replace into `engrave_area` values('15010400','玉泉区','15010000','0');");
E_D("replace into `engrave_area` values('15010500','赛罕区','15010000','0');");
E_D("replace into `engrave_area` values('15012100','土默特左旗','15010000','0');");
E_D("replace into `engrave_area` values('15012200','托克托县','15010000','0');");
E_D("replace into `engrave_area` values('15012300','和林格尔县','15010000','0');");
E_D("replace into `engrave_area` values('15012400','清水河县','15010000','0');");
E_D("replace into `engrave_area` values('15012500','武川县','15010000','0');");
E_D("replace into `engrave_area` values('15020000','包头市','15000000','0');");
E_D("replace into `engrave_area` values('15020100','市辖区','15020000','0');");
E_D("replace into `engrave_area` values('15020200','东河区','15020000','0');");
E_D("replace into `engrave_area` values('15020300','昆都仑区','15020000','0');");
E_D("replace into `engrave_area` values('15020400','青山区','15020000','0');");
E_D("replace into `engrave_area` values('15020500','石拐区','15020000','0');");
E_D("replace into `engrave_area` values('15020600','白云矿区','15020000','0');");
E_D("replace into `engrave_area` values('15020700','九原区','15020000','0');");
E_D("replace into `engrave_area` values('15022100','土默特右旗','15020000','0');");
E_D("replace into `engrave_area` values('15022200','固阳县','15020000','0');");
E_D("replace into `engrave_area` values('15022300','达尔罕茂明安联合旗','15020000','0');");
E_D("replace into `engrave_area` values('15030000','乌海市','15000000','0');");
E_D("replace into `engrave_area` values('15030100','市辖区','15030000','0');");
E_D("replace into `engrave_area` values('15030200','海勃湾区','15030000','0');");
E_D("replace into `engrave_area` values('15030300','海南区','15030000','0');");
E_D("replace into `engrave_area` values('15030400','乌达区','15030000','0');");
E_D("replace into `engrave_area` values('15040000','赤峰市','15000000','0');");
E_D("replace into `engrave_area` values('15040100','市辖区','15040000','0');");
E_D("replace into `engrave_area` values('15040200','红山区','15040000','0');");
E_D("replace into `engrave_area` values('15040300','元宝山区','15040000','0');");
E_D("replace into `engrave_area` values('15040400','松山区','15040000','0');");
E_D("replace into `engrave_area` values('15042100','阿鲁科尔沁旗','15040000','0');");
E_D("replace into `engrave_area` values('15042200','巴林左旗','15040000','0');");
E_D("replace into `engrave_area` values('15042300','巴林右旗','15040000','0');");
E_D("replace into `engrave_area` values('15042400','林西县','15040000','0');");
E_D("replace into `engrave_area` values('15042500','克什克腾旗','15040000','0');");
E_D("replace into `engrave_area` values('15042600','翁牛特旗','15040000','0');");
E_D("replace into `engrave_area` values('15042800','喀喇沁旗','15040000','0');");
E_D("replace into `engrave_area` values('15042900','宁城县','15040000','0');");
E_D("replace into `engrave_area` values('15043000','敖汉旗','15040000','0');");
E_D("replace into `engrave_area` values('15050000','通辽市','15000000','0');");
E_D("replace into `engrave_area` values('15050100','市辖区','15050000','0');");
E_D("replace into `engrave_area` values('15050200','科尔沁区','15050000','0');");
E_D("replace into `engrave_area` values('15052100','科尔沁左翼中旗','15050000','0');");
E_D("replace into `engrave_area` values('15052200','科尔沁左翼后旗','15050000','0');");
E_D("replace into `engrave_area` values('15052300','开鲁县','15050000','0');");
E_D("replace into `engrave_area` values('15052400','库伦旗','15050000','0');");
E_D("replace into `engrave_area` values('15052500','奈曼旗','15050000','0');");
E_D("replace into `engrave_area` values('15052600','扎鲁特旗','15050000','0');");
E_D("replace into `engrave_area` values('15058100','霍林郭勒市','15050000','0');");
E_D("replace into `engrave_area` values('15060000','鄂尔多斯市','15000000','0');");
E_D("replace into `engrave_area` values('15060100','市辖区','15060000','0');");
E_D("replace into `engrave_area` values('15060200','东胜区','15060000','0');");
E_D("replace into `engrave_area` values('15062100','达拉特旗','15060000','0');");
E_D("replace into `engrave_area` values('15062200','准格尔旗','15060000','0');");
E_D("replace into `engrave_area` values('15062300','鄂托克前旗','15060000','0');");
E_D("replace into `engrave_area` values('15062400','鄂托克旗','15060000','0');");
E_D("replace into `engrave_area` values('15062500','杭锦旗','15060000','0');");
E_D("replace into `engrave_area` values('15062600','乌审旗','15060000','0');");
E_D("replace into `engrave_area` values('15062700','伊金霍洛旗','15060000','0');");
E_D("replace into `engrave_area` values('15070000','呼伦贝尔市','15000000','0');");
E_D("replace into `engrave_area` values('15070100','市辖区','15070000','0');");
E_D("replace into `engrave_area` values('15070200','海拉尔区','15070000','0');");
E_D("replace into `engrave_area` values('15072100','阿荣旗','15070000','0');");
E_D("replace into `engrave_area` values('15072200','莫力达瓦达斡尔族自治旗','15070000','0');");
E_D("replace into `engrave_area` values('15072300','鄂伦春自治旗','15070000','0');");
E_D("replace into `engrave_area` values('15072400','鄂温克族自治旗','15070000','0');");
E_D("replace into `engrave_area` values('15072500','陈巴尔虎旗','15070000','0');");
E_D("replace into `engrave_area` values('15072600','新巴尔虎左旗','15070000','0');");
E_D("replace into `engrave_area` values('15072700','新巴尔虎右旗','15070000','0');");
E_D("replace into `engrave_area` values('15078100','满洲里市','15070000','0');");
E_D("replace into `engrave_area` values('15078200','牙克石市','15070000','0');");
E_D("replace into `engrave_area` values('15078300','扎兰屯市','15070000','0');");
E_D("replace into `engrave_area` values('15078400','额尔古纳市','15070000','0');");
E_D("replace into `engrave_area` values('15078500','根河市','15070000','0');");
E_D("replace into `engrave_area` values('15080000','巴彦淖尔市','15000000','0');");
E_D("replace into `engrave_area` values('15080100','市辖区','15080000','0');");
E_D("replace into `engrave_area` values('15080200','临河区','15080000','0');");
E_D("replace into `engrave_area` values('15082100','五原县','15080000','0');");
E_D("replace into `engrave_area` values('15082200','磴口县','15080000','0');");
E_D("replace into `engrave_area` values('15082300','乌拉特前旗','15080000','0');");
E_D("replace into `engrave_area` values('15082400','乌拉特中旗','15080000','0');");
E_D("replace into `engrave_area` values('15082500','乌拉特后旗','15080000','0');");
E_D("replace into `engrave_area` values('15082600','杭锦后旗','15080000','0');");
E_D("replace into `engrave_area` values('15090000','乌兰察布市','15000000','0');");
E_D("replace into `engrave_area` values('15090100','市辖区','15090000','0');");
E_D("replace into `engrave_area` values('15090200','集宁区','15090000','0');");
E_D("replace into `engrave_area` values('15092100','卓资县','15090000','0');");
E_D("replace into `engrave_area` values('15092200','化德县','15090000','0');");
E_D("replace into `engrave_area` values('15092300','商都县','15090000','0');");
E_D("replace into `engrave_area` values('15092400','兴和县','15090000','0');");
E_D("replace into `engrave_area` values('15092500','凉城县','15090000','0');");
E_D("replace into `engrave_area` values('15092600','察哈尔右翼前旗','15090000','0');");
E_D("replace into `engrave_area` values('15092700','察哈尔右翼中旗','15090000','0');");
E_D("replace into `engrave_area` values('15092800','察哈尔右翼后旗','15090000','0');");
E_D("replace into `engrave_area` values('15092900','四子王旗','15090000','0');");
E_D("replace into `engrave_area` values('15098100','丰镇市','15090000','0');");
E_D("replace into `engrave_area` values('15220000','兴安盟','15000000','0');");
E_D("replace into `engrave_area` values('15220100','乌兰浩特市','15220000','0');");
E_D("replace into `engrave_area` values('15220200','阿尔山市','15220000','0');");
E_D("replace into `engrave_area` values('15222100','科尔沁右翼前旗','15220000','0');");
E_D("replace into `engrave_area` values('15222200','科尔沁右翼中旗','15220000','0');");
E_D("replace into `engrave_area` values('15222300','扎赉特旗','15220000','0');");
E_D("replace into `engrave_area` values('15222400','突泉县','15220000','0');");
E_D("replace into `engrave_area` values('15250000','锡林郭勒盟','15000000','0');");
E_D("replace into `engrave_area` values('15250100','二连浩特市','15250000','0');");
E_D("replace into `engrave_area` values('15250200','锡林浩特市','15250000','0');");
E_D("replace into `engrave_area` values('15252200','阿巴嘎旗','15250000','0');");
E_D("replace into `engrave_area` values('15252300','苏尼特左旗','15250000','0');");
E_D("replace into `engrave_area` values('15252400','苏尼特右旗','15250000','0');");
E_D("replace into `engrave_area` values('15252500','东乌珠穆沁旗','15250000','0');");
E_D("replace into `engrave_area` values('15252600','西乌珠穆沁旗','15250000','0');");
E_D("replace into `engrave_area` values('15252700','太仆寺旗','15250000','0');");
E_D("replace into `engrave_area` values('15252800','镶黄旗','15250000','0');");
E_D("replace into `engrave_area` values('15252900','正镶白旗','15250000','0');");
E_D("replace into `engrave_area` values('15253000','正蓝旗','15250000','0');");
E_D("replace into `engrave_area` values('15253100','多伦县','15250000','0');");
E_D("replace into `engrave_area` values('15290000','阿拉善盟','15000000','0');");
E_D("replace into `engrave_area` values('15292100','阿拉善左旗','15290000','0');");
E_D("replace into `engrave_area` values('15292200','阿拉善右旗','15290000','0');");
E_D("replace into `engrave_area` values('15292300','额济纳旗','15290000','0');");
E_D("replace into `engrave_area` values('15292400','巴彦浩特','15290000','0');");
E_D("replace into `engrave_area` values('21000000','辽宁省','1','0');");
E_D("replace into `engrave_area` values('21010000','沈阳市','21000000','0');");
E_D("replace into `engrave_area` values('21010100','市辖区','21010000','0');");
E_D("replace into `engrave_area` values('21010200','和平区','21010000','0');");
E_D("replace into `engrave_area` values('21010300','沈河区','21010000','0');");
E_D("replace into `engrave_area` values('21010400','大东区','21010000','0');");
E_D("replace into `engrave_area` values('21010500','皇姑区','21010000','0');");
E_D("replace into `engrave_area` values('21010600','铁西区','21010000','0');");
E_D("replace into `engrave_area` values('21011100','苏家屯区','21010000','0');");
E_D("replace into `engrave_area` values('21011200','东陵区','21010000','0');");
E_D("replace into `engrave_area` values('21011300','沈北新区','21010000','0');");
E_D("replace into `engrave_area` values('21011400','于洪区','21010000','0');");
E_D("replace into `engrave_area` values('21012200','辽中县','21010000','0');");
E_D("replace into `engrave_area` values('21012300','康平县','21010000','0');");
E_D("replace into `engrave_area` values('21012400','法库县','21010000','0');");
E_D("replace into `engrave_area` values('21018100','新民市','21010000','0');");
E_D("replace into `engrave_area` values('21020000','大连市','21000000','0');");
E_D("replace into `engrave_area` values('21020100','市辖区','21020000','0');");
E_D("replace into `engrave_area` values('21020200','中山区','21020000','0');");
E_D("replace into `engrave_area` values('21020300','西岗区','21020000','0');");
E_D("replace into `engrave_area` values('21020400','沙河口区','21020000','0');");
E_D("replace into `engrave_area` values('21021100','甘井子区','21020000','0');");
E_D("replace into `engrave_area` values('21021200','旅顺口区','21020000','0');");
E_D("replace into `engrave_area` values('21021300','金州区','21020000','0');");
E_D("replace into `engrave_area` values('21022400','长海县','21020000','0');");
E_D("replace into `engrave_area` values('21028100','瓦房店市','21020000','0');");
E_D("replace into `engrave_area` values('21028200','普兰店市','21020000','0');");
E_D("replace into `engrave_area` values('21028300','庄河市','21020000','0');");
E_D("replace into `engrave_area` values('21030000','鞍山市','21000000','0');");
E_D("replace into `engrave_area` values('21030100','市辖区','21030000','0');");
E_D("replace into `engrave_area` values('21030200','铁东区','21030000','0');");
E_D("replace into `engrave_area` values('21030300','铁西区','21030000','0');");
E_D("replace into `engrave_area` values('21030400','立山区','21030000','0');");
E_D("replace into `engrave_area` values('21031100','千山区','21030000','0');");
E_D("replace into `engrave_area` values('21032100','台安县','21030000','0');");
E_D("replace into `engrave_area` values('21032300','岫岩满族自治县','21030000','0');");
E_D("replace into `engrave_area` values('21038100','海城市','21030000','0');");
E_D("replace into `engrave_area` values('21040000','抚顺市','21000000','0');");
E_D("replace into `engrave_area` values('21040100','市辖区','21040000','0');");
E_D("replace into `engrave_area` values('21040200','新抚区','21040000','0');");
E_D("replace into `engrave_area` values('21040300','东洲区','21040000','0');");
E_D("replace into `engrave_area` values('21040400','望花区','21040000','0');");
E_D("replace into `engrave_area` values('21041100','顺城区','21040000','0');");
E_D("replace into `engrave_area` values('21042100','抚顺县','21040000','0');");
E_D("replace into `engrave_area` values('21042200','新宾满族自治县','21040000','0');");
E_D("replace into `engrave_area` values('21042300','清原满族自治县','21040000','0');");
E_D("replace into `engrave_area` values('21050000','本溪市','21000000','0');");
E_D("replace into `engrave_area` values('21050100','市辖区','21050000','0');");
E_D("replace into `engrave_area` values('21050200','平山区','21050000','0');");
E_D("replace into `engrave_area` values('21050300','溪湖区','21050000','0');");
E_D("replace into `engrave_area` values('21050400','明山区','21050000','0');");
E_D("replace into `engrave_area` values('21050500','南芬区','21050000','0');");
E_D("replace into `engrave_area` values('21052100','本溪满族自治县','21050000','0');");
E_D("replace into `engrave_area` values('21052200','桓仁满族自治县','21050000','0');");
E_D("replace into `engrave_area` values('21060000','丹东市','21000000','0');");
E_D("replace into `engrave_area` values('21060100','市辖区','21060000','0');");
E_D("replace into `engrave_area` values('21060200','元宝区','21060000','0');");
E_D("replace into `engrave_area` values('21060300','振兴区','21060000','0');");
E_D("replace into `engrave_area` values('21060400','振安区','21060000','0');");
E_D("replace into `engrave_area` values('21062400','宽甸满族自治县','21060000','0');");
E_D("replace into `engrave_area` values('21068100','东港市','21060000','0');");
E_D("replace into `engrave_area` values('21068200','凤城市','21060000','0');");
E_D("replace into `engrave_area` values('21070000','锦州市','21000000','0');");
E_D("replace into `engrave_area` values('21070100','市辖区','21070000','0');");
E_D("replace into `engrave_area` values('21070200','古塔区','21070000','0');");
E_D("replace into `engrave_area` values('21070300','凌河区','21070000','0');");
E_D("replace into `engrave_area` values('21071100','太和区','21070000','0');");
E_D("replace into `engrave_area` values('21072600','黑山县','21070000','0');");
E_D("replace into `engrave_area` values('21072700','义县','21070000','0');");
E_D("replace into `engrave_area` values('21078100','凌海市','21070000','0');");
E_D("replace into `engrave_area` values('21078200','北镇市','21070000','0');");
E_D("replace into `engrave_area` values('21080000','营口市','21000000','0');");
E_D("replace into `engrave_area` values('21080100','市辖区','21080000','0');");
E_D("replace into `engrave_area` values('21080200','站前区','21080000','0');");
E_D("replace into `engrave_area` values('21080300','西市区','21080000','0');");
E_D("replace into `engrave_area` values('21080400','鲅鱼圈区','21080000','0');");
E_D("replace into `engrave_area` values('21081100','老边区','21080000','0');");
E_D("replace into `engrave_area` values('21088100','盖州市','21080000','0');");
E_D("replace into `engrave_area` values('21088200','大石桥市','21080000','0');");
E_D("replace into `engrave_area` values('21090000','阜新市','21000000','0');");
E_D("replace into `engrave_area` values('21090100','市辖区','21090000','0');");
E_D("replace into `engrave_area` values('21090200','海州区','21090000','0');");
E_D("replace into `engrave_area` values('21090300','新邱区','21090000','0');");
E_D("replace into `engrave_area` values('21090400','太平区','21090000','0');");
E_D("replace into `engrave_area` values('21090500','清河门区','21090000','0');");
E_D("replace into `engrave_area` values('21091100','细河区','21090000','0');");
E_D("replace into `engrave_area` values('21092100','阜新蒙古族自治县','21090000','0');");
E_D("replace into `engrave_area` values('21092200','彰武县','21090000','0');");
E_D("replace into `engrave_area` values('21100000','辽阳市','21000000','0');");
E_D("replace into `engrave_area` values('21100100','市辖区','21100000','0');");
E_D("replace into `engrave_area` values('21100200','白塔区','21100000','0');");
E_D("replace into `engrave_area` values('21100300','文圣区','21100000','0');");
E_D("replace into `engrave_area` values('21100400','宏伟区','21100000','0');");
E_D("replace into `engrave_area` values('21100500','弓长岭区','21100000','0');");
E_D("replace into `engrave_area` values('21101100','太子河区','21100000','0');");
E_D("replace into `engrave_area` values('21102100','辽阳县','21100000','0');");
E_D("replace into `engrave_area` values('21108100','灯塔市','21100000','0');");
E_D("replace into `engrave_area` values('21110000','盘锦市','21000000','0');");
E_D("replace into `engrave_area` values('21110100','市辖区','21110000','0');");
E_D("replace into `engrave_area` values('21110200','双台子区','21110000','0');");
E_D("replace into `engrave_area` values('21110300','兴隆台区','21110000','0');");
E_D("replace into `engrave_area` values('21112100','大洼县','21110000','0');");
E_D("replace into `engrave_area` values('21112200','盘山县','21110000','0');");
E_D("replace into `engrave_area` values('21120000','铁岭市','21000000','0');");
E_D("replace into `engrave_area` values('21120100','市辖区','21120000','0');");
E_D("replace into `engrave_area` values('21120200','银州区','21120000','0');");
E_D("replace into `engrave_area` values('21120400','清河区','21120000','0');");
E_D("replace into `engrave_area` values('21122100','铁岭县','21120000','0');");
E_D("replace into `engrave_area` values('21122300','西丰县','21120000','0');");
E_D("replace into `engrave_area` values('21122400','昌图县','21120000','0');");
E_D("replace into `engrave_area` values('21128100','调兵山市','21120000','0');");
E_D("replace into `engrave_area` values('21128200','开原市','21120000','0');");
E_D("replace into `engrave_area` values('21130000','朝阳市','21000000','0');");
E_D("replace into `engrave_area` values('21130100','市辖区','21130000','0');");
E_D("replace into `engrave_area` values('21130200','双塔区','21130000','0');");
E_D("replace into `engrave_area` values('21130300','龙城区','21130000','0');");
E_D("replace into `engrave_area` values('21132100','朝阳县','21130000','0');");
E_D("replace into `engrave_area` values('21132200','建平县','21130000','0');");
E_D("replace into `engrave_area` values('21132400','喀喇沁左翼蒙古族自治县','21130000','0');");
E_D("replace into `engrave_area` values('21138100','北票市','21130000','0');");
E_D("replace into `engrave_area` values('21138200','凌源市','21130000','0');");
E_D("replace into `engrave_area` values('21140000','葫芦岛市','21000000','0');");
E_D("replace into `engrave_area` values('21140100','市辖区','21140000','0');");
E_D("replace into `engrave_area` values('21140200','连山区','21140000','0');");
E_D("replace into `engrave_area` values('21140300','龙港区','21140000','0');");
E_D("replace into `engrave_area` values('21140400','南票区','21140000','0');");
E_D("replace into `engrave_area` values('21142100','绥中县','21140000','0');");
E_D("replace into `engrave_area` values('21142200','建昌县','21140000','0');");
E_D("replace into `engrave_area` values('21148100','兴城市','21140000','0');");
E_D("replace into `engrave_area` values('22000000','吉林省','1','0');");
E_D("replace into `engrave_area` values('22010000','长春市','22000000','0');");
E_D("replace into `engrave_area` values('22010100','市辖区','22010000','0');");
E_D("replace into `engrave_area` values('22010200','南关区','22010000','0');");
E_D("replace into `engrave_area` values('22010300','宽城区','22010000','0');");
E_D("replace into `engrave_area` values('22010400','朝阳区','22010000','0');");
E_D("replace into `engrave_area` values('22010500','二道区','22010000','0');");
E_D("replace into `engrave_area` values('22010600','绿园区','22010000','0');");
E_D("replace into `engrave_area` values('22011200','双阳区','22010000','0');");
E_D("replace into `engrave_area` values('22012200','农安县','22010000','0');");
E_D("replace into `engrave_area` values('22018100','九台市','22010000','0');");
E_D("replace into `engrave_area` values('22018200','榆树市','22010000','0');");
E_D("replace into `engrave_area` values('22018300','德惠市','22010000','0');");
E_D("replace into `engrave_area` values('22020000','吉林市','22000000','0');");
E_D("replace into `engrave_area` values('22020100','市辖区','22020000','0');");
E_D("replace into `engrave_area` values('22020200','昌邑区','22020000','0');");
E_D("replace into `engrave_area` values('22020300','龙潭区','22020000','0');");
E_D("replace into `engrave_area` values('22020400','船营区','22020000','0');");
E_D("replace into `engrave_area` values('22021100','丰满区','22020000','0');");
E_D("replace into `engrave_area` values('22022100','永吉县','22020000','0');");
E_D("replace into `engrave_area` values('22028100','蛟河市','22020000','0');");
E_D("replace into `engrave_area` values('22028200','桦甸市','22020000','0');");
E_D("replace into `engrave_area` values('22028300','舒兰市','22020000','0');");
E_D("replace into `engrave_area` values('22028400','磐石市','22020000','0');");
E_D("replace into `engrave_area` values('22030000','四平市','22000000','0');");
E_D("replace into `engrave_area` values('22030100','市辖区','22030000','0');");
E_D("replace into `engrave_area` values('22030200','铁西区','22030000','0');");
E_D("replace into `engrave_area` values('22030300','铁东区','22030000','0');");
E_D("replace into `engrave_area` values('22032200','梨树县','22030000','0');");
E_D("replace into `engrave_area` values('22032300','伊通满族自治县','22030000','0');");
E_D("replace into `engrave_area` values('22038100','公主岭市','22030000','0');");
E_D("replace into `engrave_area` values('22038200','双辽市','22030000','0');");
E_D("replace into `engrave_area` values('22040000','辽源市','22000000','0');");
E_D("replace into `engrave_area` values('22040100','市辖区','22040000','0');");
E_D("replace into `engrave_area` values('22040200','龙山区','22040000','0');");
E_D("replace into `engrave_area` values('22040300','西安区','22040000','0');");
E_D("replace into `engrave_area` values('22042100','东丰县','22040000','0');");
E_D("replace into `engrave_area` values('22042200','东辽县','22040000','0');");
E_D("replace into `engrave_area` values('22050000','通化市','22000000','0');");
E_D("replace into `engrave_area` values('22050100','市辖区','22050000','0');");
E_D("replace into `engrave_area` values('22050200','东昌区','22050000','0');");
E_D("replace into `engrave_area` values('22050300','二道江区','22050000','0');");
E_D("replace into `engrave_area` values('22052100','通化县','22050000','0');");
E_D("replace into `engrave_area` values('22052300','辉南县','22050000','0');");
E_D("replace into `engrave_area` values('22052400','柳河县','22050000','0');");
E_D("replace into `engrave_area` values('22058100','梅河口市','22050000','0');");
E_D("replace into `engrave_area` values('22058200','集安市','22050000','0');");
E_D("replace into `engrave_area` values('22060000','白山市','22000000','0');");
E_D("replace into `engrave_area` values('22060100','市辖区','22060000','0');");
E_D("replace into `engrave_area` values('22060200','八道江区','22060000','0');");
E_D("replace into `engrave_area` values('22060500','江源区 ','22060000','0');");
E_D("replace into `engrave_area` values('22062100','抚松县','22060000','0');");
E_D("replace into `engrave_area` values('22062200','靖宇县','22060000','0');");
E_D("replace into `engrave_area` values('22062300','长白朝鲜族自治县','22060000','0');");
E_D("replace into `engrave_area` values('22068100','临江市','22060000','0');");
E_D("replace into `engrave_area` values('22070000','松原市','22000000','0');");
E_D("replace into `engrave_area` values('22070100','市辖区','22070000','0');");
E_D("replace into `engrave_area` values('22070200','宁江区','22070000','0');");
E_D("replace into `engrave_area` values('22072100','前郭尔罗斯蒙古族自治县','22070000','0');");
E_D("replace into `engrave_area` values('22072200','长岭县','22070000','0');");
E_D("replace into `engrave_area` values('22072300','乾安县','22070000','0');");
E_D("replace into `engrave_area` values('22072400','扶余县','22070000','0');");
E_D("replace into `engrave_area` values('22080000','白城市','22000000','0');");
E_D("replace into `engrave_area` values('22080100','市辖区','22080000','0');");
E_D("replace into `engrave_area` values('22080200','洮北区','22080000','0');");
E_D("replace into `engrave_area` values('22082100','镇赉县','22080000','0');");
E_D("replace into `engrave_area` values('22082200','通榆县','22080000','0');");
E_D("replace into `engrave_area` values('22088100','洮南市','22080000','0');");
E_D("replace into `engrave_area` values('22088200','大安市','22080000','0');");
E_D("replace into `engrave_area` values('22240000','延边朝鲜族自治州','22000000','0');");
E_D("replace into `engrave_area` values('22240100','延吉市','22240000','0');");
E_D("replace into `engrave_area` values('22240200','图们市','22240000','0');");
E_D("replace into `engrave_area` values('22240300','敦化市','22240000','0');");
E_D("replace into `engrave_area` values('22240400','珲春市','22240000','0');");
E_D("replace into `engrave_area` values('22240500','龙井市','22240000','0');");
E_D("replace into `engrave_area` values('22240600','和龙市','22240000','0');");
E_D("replace into `engrave_area` values('22242400','汪清县','22240000','0');");
E_D("replace into `engrave_area` values('22242600','安图县','22240000','0');");
E_D("replace into `engrave_area` values('23000000','黑龙江省','1','0');");
E_D("replace into `engrave_area` values('23010000','哈尔滨市','23000000','0');");
E_D("replace into `engrave_area` values('23010100','市辖区','23010000','0');");
E_D("replace into `engrave_area` values('23010200','道里区','23010000','0');");
E_D("replace into `engrave_area` values('23010300','南岗区','23010000','0');");
E_D("replace into `engrave_area` values('23010400','道外区','23010000','0');");
E_D("replace into `engrave_area` values('23010800','平房区','23010000','0');");
E_D("replace into `engrave_area` values('23010900','松北区','23010000','0');");
E_D("replace into `engrave_area` values('23011000','香坊区','23010000','0');");
E_D("replace into `engrave_area` values('23011100','呼兰区','23010000','0');");
E_D("replace into `engrave_area` values('23011200','阿城区                 ','23010000','0');");
E_D("replace into `engrave_area` values('23012300','依兰县','23010000','0');");
E_D("replace into `engrave_area` values('23012400','方正县','23010000','0');");
E_D("replace into `engrave_area` values('23012500','宾县','23010000','0');");
E_D("replace into `engrave_area` values('23012600','巴彦县','23010000','0');");
E_D("replace into `engrave_area` values('23012700','木兰县','23010000','0');");
E_D("replace into `engrave_area` values('23012800','通河县','23010000','0');");
E_D("replace into `engrave_area` values('23012900','延寿县','23010000','0');");
E_D("replace into `engrave_area` values('23018200','双城市','23010000','0');");
E_D("replace into `engrave_area` values('23018300','尚志市','23010000','0');");
E_D("replace into `engrave_area` values('23018400','五常市','23010000','0');");
E_D("replace into `engrave_area` values('23020000','齐齐哈尔市','23000000','0');");
E_D("replace into `engrave_area` values('23020100','市辖区','23020000','0');");
E_D("replace into `engrave_area` values('23020200','龙沙区','23020000','0');");
E_D("replace into `engrave_area` values('23020300','建华区','23020000','0');");
E_D("replace into `engrave_area` values('23020400','铁锋区','23020000','0');");
E_D("replace into `engrave_area` values('23020500','昂昂溪区','23020000','0');");
E_D("replace into `engrave_area` values('23020600','富拉尔基区','23020000','0');");
E_D("replace into `engrave_area` values('23020700','碾子山区','23020000','0');");
E_D("replace into `engrave_area` values('23020800','梅里斯达斡尔族区','23020000','0');");
E_D("replace into `engrave_area` values('23022100','龙江县','23020000','0');");
E_D("replace into `engrave_area` values('23022300','依安县','23020000','0');");
E_D("replace into `engrave_area` values('23022400','泰来县','23020000','0');");
E_D("replace into `engrave_area` values('23022500','甘南县','23020000','0');");
E_D("replace into `engrave_area` values('23022700','富裕县','23020000','0');");
E_D("replace into `engrave_area` values('23022900','克山县','23020000','0');");
E_D("replace into `engrave_area` values('23023000','克东县','23020000','0');");
E_D("replace into `engrave_area` values('23023100','拜泉县','23020000','0');");
E_D("replace into `engrave_area` values('23028100','讷河市','23020000','0');");
E_D("replace into `engrave_area` values('23030000','鸡西市','23000000','0');");
E_D("replace into `engrave_area` values('23030100','市辖区','23030000','0');");
E_D("replace into `engrave_area` values('23030200','鸡冠区','23030000','0');");
E_D("replace into `engrave_area` values('23030300','恒山区','23030000','0');");
E_D("replace into `engrave_area` values('23030400','滴道区','23030000','0');");
E_D("replace into `engrave_area` values('23030500','梨树区','23030000','0');");
E_D("replace into `engrave_area` values('23030600','城子河区','23030000','0');");
E_D("replace into `engrave_area` values('23030700','麻山区','23030000','0');");
E_D("replace into `engrave_area` values('23032100','鸡东县','23030000','0');");
E_D("replace into `engrave_area` values('23038100','虎林市','23030000','0');");
E_D("replace into `engrave_area` values('23038200','密山市','23030000','0');");
E_D("replace into `engrave_area` values('23040000','鹤岗市','23000000','0');");
E_D("replace into `engrave_area` values('23040100','市辖区','23040000','0');");
E_D("replace into `engrave_area` values('23040200','向阳区','23040000','0');");
E_D("replace into `engrave_area` values('23040300','工农区','23040000','0');");
E_D("replace into `engrave_area` values('23040400','南山区','23040000','0');");
E_D("replace into `engrave_area` values('23040500','兴安区','23040000','0');");
E_D("replace into `engrave_area` values('23040600','东山区','23040000','0');");
E_D("replace into `engrave_area` values('23040700','兴山区','23040000','0');");
E_D("replace into `engrave_area` values('23042100','萝北县','23040000','0');");
E_D("replace into `engrave_area` values('23042200','绥滨县','23040000','0');");
E_D("replace into `engrave_area` values('23050000','双鸭山市','23000000','0');");
E_D("replace into `engrave_area` values('23050100','市辖区','23050000','0');");
E_D("replace into `engrave_area` values('23050200','尖山区','23050000','0');");
E_D("replace into `engrave_area` values('23050300','岭东区','23050000','0');");
E_D("replace into `engrave_area` values('23050500','四方台区','23050000','0');");
E_D("replace into `engrave_area` values('23050600','宝山区','23050000','0');");
E_D("replace into `engrave_area` values('23052100','集贤县','23050000','0');");
E_D("replace into `engrave_area` values('23052200','友谊县','23050000','0');");
E_D("replace into `engrave_area` values('23052300','宝清县','23050000','0');");
E_D("replace into `engrave_area` values('23052400','饶河县','23050000','0');");
E_D("replace into `engrave_area` values('23060000','大庆市','23000000','0');");
E_D("replace into `engrave_area` values('23060100','市辖区','23060000','0');");
E_D("replace into `engrave_area` values('23060200','萨尔图区','23060000','0');");
E_D("replace into `engrave_area` values('23060300','龙凤区','23060000','0');");
E_D("replace into `engrave_area` values('23060400','让胡路区','23060000','0');");
E_D("replace into `engrave_area` values('23060500','红岗区','23060000','0');");
E_D("replace into `engrave_area` values('23060600','大同区','23060000','0');");
E_D("replace into `engrave_area` values('23062100','肇州县','23060000','0');");
E_D("replace into `engrave_area` values('23062200','肇源县','23060000','0');");
E_D("replace into `engrave_area` values('23062300','林甸县','23060000','0');");
E_D("replace into `engrave_area` values('23062400','杜尔伯特蒙古族自治县','23060000','0');");
E_D("replace into `engrave_area` values('23070000','伊春市','23000000','0');");
E_D("replace into `engrave_area` values('23070100','市辖区','23070000','0');");
E_D("replace into `engrave_area` values('23070200','伊春区','23070000','0');");
E_D("replace into `engrave_area` values('23070300','南岔区','23070000','0');");
E_D("replace into `engrave_area` values('23070400','友好区','23070000','0');");
E_D("replace into `engrave_area` values('23070500','西林区','23070000','0');");
E_D("replace into `engrave_area` values('23070600','翠峦区','23070000','0');");
E_D("replace into `engrave_area` values('23070700','新青区','23070000','0');");
E_D("replace into `engrave_area` values('23070800','美溪区','23070000','0');");
E_D("replace into `engrave_area` values('23070900','金山屯区','23070000','0');");
E_D("replace into `engrave_area` values('23071000','五营区','23070000','0');");
E_D("replace into `engrave_area` values('23071100','乌马河区','23070000','0');");
E_D("replace into `engrave_area` values('23071200','汤旺河区','23070000','0');");
E_D("replace into `engrave_area` values('23071300','带岭区','23070000','0');");
E_D("replace into `engrave_area` values('23071400','乌伊岭区','23070000','0');");
E_D("replace into `engrave_area` values('23071500','红星区','23070000','0');");
E_D("replace into `engrave_area` values('23071600','上甘岭区','23070000','0');");
E_D("replace into `engrave_area` values('23072200','嘉荫县','23070000','0');");
E_D("replace into `engrave_area` values('23078100','铁力市','23070000','0');");
E_D("replace into `engrave_area` values('23080000','佳木斯市','23000000','0');");
E_D("replace into `engrave_area` values('23080100','市辖区','23080000','0');");
E_D("replace into `engrave_area` values('23080300','向阳区','23080000','0');");
E_D("replace into `engrave_area` values('23080400','前进区','23080000','0');");
E_D("replace into `engrave_area` values('23080500','东风区','23080000','0');");
E_D("replace into `engrave_area` values('23081100','郊区','23080000','0');");
E_D("replace into `engrave_area` values('23082200','桦南县','23080000','0');");
E_D("replace into `engrave_area` values('23082600','桦川县','23080000','0');");
E_D("replace into `engrave_area` values('23082800','汤原县','23080000','0');");
E_D("replace into `engrave_area` values('23083300','抚远县','23080000','0');");
E_D("replace into `engrave_area` values('23088100','同江市','23080000','0');");
E_D("replace into `engrave_area` values('23088200','富锦市','23080000','0');");
E_D("replace into `engrave_area` values('23090000','七台河市','23000000','0');");
E_D("replace into `engrave_area` values('23090100','市辖区','23090000','0');");
E_D("replace into `engrave_area` values('23090200','新兴区','23090000','0');");
E_D("replace into `engrave_area` values('23090300','桃山区','23090000','0');");
E_D("replace into `engrave_area` values('23090400','茄子河区','23090000','0');");
E_D("replace into `engrave_area` values('23092100','勃利县','23090000','0');");
E_D("replace into `engrave_area` values('23100000','牡丹江市','23000000','0');");
E_D("replace into `engrave_area` values('23100100','市辖区','23100000','0');");
E_D("replace into `engrave_area` values('23100200','东安区','23100000','0');");
E_D("replace into `engrave_area` values('23100300','阳明区','23100000','0');");
E_D("replace into `engrave_area` values('23100400','爱民区','23100000','0');");
E_D("replace into `engrave_area` values('23100500','西安区','23100000','0');");
E_D("replace into `engrave_area` values('23102400','东宁县','23100000','0');");
E_D("replace into `engrave_area` values('23102500','林口县','23100000','0');");
E_D("replace into `engrave_area` values('23108100','绥芬河市','23100000','0');");
E_D("replace into `engrave_area` values('23108300','海林市','23100000','0');");
E_D("replace into `engrave_area` values('23108400','宁安市','23100000','0');");
E_D("replace into `engrave_area` values('23108500','穆棱市','23100000','0');");
E_D("replace into `engrave_area` values('23110000','黑河市','23000000','0');");
E_D("replace into `engrave_area` values('23110100','市辖区','23110000','0');");
E_D("replace into `engrave_area` values('23110200','爱辉区','23110000','0');");
E_D("replace into `engrave_area` values('23112100','嫩江县','23110000','0');");
E_D("replace into `engrave_area` values('23112300','逊克县','23110000','0');");
E_D("replace into `engrave_area` values('23112400','孙吴县','23110000','0');");
E_D("replace into `engrave_area` values('23118100','北安市','23110000','0');");
E_D("replace into `engrave_area` values('23118200','五大连池市','23110000','0');");
E_D("replace into `engrave_area` values('23120000','绥化市','23000000','0');");
E_D("replace into `engrave_area` values('23120100','市辖区','23120000','0');");
E_D("replace into `engrave_area` values('23120200','北林区','23120000','0');");
E_D("replace into `engrave_area` values('23122100','望奎县','23120000','0');");
E_D("replace into `engrave_area` values('23122200','兰西县','23120000','0');");
E_D("replace into `engrave_area` values('23122300','青冈县','23120000','0');");
E_D("replace into `engrave_area` values('23122400','庆安县','23120000','0');");
E_D("replace into `engrave_area` values('23122500','明水县','23120000','0');");
E_D("replace into `engrave_area` values('23122600','绥棱县','23120000','0');");
E_D("replace into `engrave_area` values('23128100','安达市','23120000','0');");
E_D("replace into `engrave_area` values('23128200','肇东市','23120000','0');");
E_D("replace into `engrave_area` values('23128300','海伦市','23120000','0');");
E_D("replace into `engrave_area` values('23270000','大兴安岭地区','23000000','0');");
E_D("replace into `engrave_area` values('23270100','加格达奇区','23270000','0');");
E_D("replace into `engrave_area` values('23270200','松岭区','23270000','0');");
E_D("replace into `engrave_area` values('23270300','新林区','23270000','0');");
E_D("replace into `engrave_area` values('23270400','呼中区','23270000','0');");
E_D("replace into `engrave_area` values('23272100','呼玛县','23270000','0');");
E_D("replace into `engrave_area` values('23272200','塔河县','23270000','0');");
E_D("replace into `engrave_area` values('23272300','漠河县','23270000','0');");
E_D("replace into `engrave_area` values('31000000','上海市','1','0');");
E_D("replace into `engrave_area` values('31010100','黄浦区','31000000','0');");
E_D("replace into `engrave_area` values('31010300','卢湾区','31000000','0');");
E_D("replace into `engrave_area` values('31010400','徐汇区','31000000','0');");
E_D("replace into `engrave_area` values('31010500','长宁区','31000000','0');");
E_D("replace into `engrave_area` values('31010600','静安区','31000000','0');");
E_D("replace into `engrave_area` values('31010700','普陀区','31000000','0');");
E_D("replace into `engrave_area` values('31010800','闸北区','31000000','0');");
E_D("replace into `engrave_area` values('31010900','虹口区','31000000','0');");
E_D("replace into `engrave_area` values('31011000','杨浦区','31000000','0');");
E_D("replace into `engrave_area` values('31011200','闵行区','31000000','0');");
E_D("replace into `engrave_area` values('31011300','宝山区','31000000','0');");
E_D("replace into `engrave_area` values('31011400','嘉定区','31000000','0');");
E_D("replace into `engrave_area` values('31011500','浦东新区','31000000','0');");
E_D("replace into `engrave_area` values('31011600','金山区','31000000','0');");
E_D("replace into `engrave_area` values('31011700','松江区','31000000','0');");
E_D("replace into `engrave_area` values('31011800','青浦区','31000000','0');");
E_D("replace into `engrave_area` values('31011900','南汇区','31000000','0');");
E_D("replace into `engrave_area` values('31012000','奉贤区','31000000','0');");
E_D("replace into `engrave_area` values('31023000','崇明县','31000000','0');");
E_D("replace into `engrave_area` values('32000000','江苏省','1','0');");
E_D("replace into `engrave_area` values('32010000','南京市','32000000','0');");
E_D("replace into `engrave_area` values('32010100','市辖区','32010000','0');");
E_D("replace into `engrave_area` values('32010200','玄武区','32010000','0');");
E_D("replace into `engrave_area` values('32010300','白下区','32010000','0');");
E_D("replace into `engrave_area` values('32010400','秦淮区','32010000','0');");
E_D("replace into `engrave_area` values('32010500','建邺区','32010000','0');");
E_D("replace into `engrave_area` values('32010600','鼓楼区','32010000','0');");
E_D("replace into `engrave_area` values('32010700','下关区','32010000','0');");
E_D("replace into `engrave_area` values('32011100','浦口区','32010000','0');");
E_D("replace into `engrave_area` values('32011300','栖霞区','32010000','0');");
E_D("replace into `engrave_area` values('32011400','雨花台区','32010000','0');");
E_D("replace into `engrave_area` values('32011500','江宁区','32010000','0');");
E_D("replace into `engrave_area` values('32011600','六合区','32010000','0');");
E_D("replace into `engrave_area` values('32012400','溧水县','32010000','0');");
E_D("replace into `engrave_area` values('32012500','高淳县','32010000','0');");
E_D("replace into `engrave_area` values('32020000','无锡市','32000000','0');");
E_D("replace into `engrave_area` values('32020100','市辖区','32020000','0');");
E_D("replace into `engrave_area` values('32020200','崇安区','32020000','0');");
E_D("replace into `engrave_area` values('32020300','南长区','32020000','0');");
E_D("replace into `engrave_area` values('32020400','北塘区','32020000','0');");
E_D("replace into `engrave_area` values('32020500','锡山区','32020000','0');");
E_D("replace into `engrave_area` values('32020600','惠山区','32020000','0');");
E_D("replace into `engrave_area` values('32021100','滨湖区','32020000','0');");
E_D("replace into `engrave_area` values('32028100','江阴市','32020000','0');");
E_D("replace into `engrave_area` values('32028200','宜兴市','32020000','0');");
E_D("replace into `engrave_area` values('32030000','徐州市','32000000','0');");
E_D("replace into `engrave_area` values('32030100','市辖区','32030000','0');");
E_D("replace into `engrave_area` values('32030200','鼓楼区','32030000','0');");
E_D("replace into `engrave_area` values('32030300','云龙区','32030000','0');");
E_D("replace into `engrave_area` values('32030400','九里区','32030000','0');");
E_D("replace into `engrave_area` values('32030500','贾汪区','32030000','0');");
E_D("replace into `engrave_area` values('32031100','泉山区','32030000','0');");
E_D("replace into `engrave_area` values('32032100','丰县','32030000','0');");
E_D("replace into `engrave_area` values('32032200','沛县','32030000','0');");
E_D("replace into `engrave_area` values('32032300','铜山县','32030000','0');");
E_D("replace into `engrave_area` values('32032400','睢宁县','32030000','0');");
E_D("replace into `engrave_area` values('32038100','新沂市','32030000','0');");
E_D("replace into `engrave_area` values('32038200','邳州市','32030000','0');");
E_D("replace into `engrave_area` values('32040000','常州市','32000000','0');");
E_D("replace into `engrave_area` values('32040100','市辖区','32040000','0');");
E_D("replace into `engrave_area` values('32040200','天宁区','32040000','0');");
E_D("replace into `engrave_area` values('32040400','钟楼区','32040000','0');");
E_D("replace into `engrave_area` values('32040500','戚墅堰区','32040000','0');");
E_D("replace into `engrave_area` values('32041100','新北区','32040000','0');");
E_D("replace into `engrave_area` values('32041200','武进区','32040000','0');");
E_D("replace into `engrave_area` values('32048100','溧阳市','32040000','0');");
E_D("replace into `engrave_area` values('32048200','金坛市','32040000','0');");
E_D("replace into `engrave_area` values('32050000','苏州市','32000000','0');");
E_D("replace into `engrave_area` values('32050100','市辖区','32050000','0');");
E_D("replace into `engrave_area` values('32050200','沧浪区','32050000','0');");
E_D("replace into `engrave_area` values('32050300','平江区','32050000','0');");
E_D("replace into `engrave_area` values('32050400','金阊区','32050000','0');");
E_D("replace into `engrave_area` values('32050500','虎丘区','32050000','0');");
E_D("replace into `engrave_area` values('32050600','吴中区','32050000','0');");
E_D("replace into `engrave_area` values('32050700','相城区','32050000','0');");
E_D("replace into `engrave_area` values('32058100','常熟市','32050000','0');");
E_D("replace into `engrave_area` values('32058200','张家港市','32050000','0');");
E_D("replace into `engrave_area` values('32058300','昆山市','32050000','0');");
E_D("replace into `engrave_area` values('32058400','吴江市','32050000','0');");
E_D("replace into `engrave_area` values('32058500','太仓市','32050000','0');");
E_D("replace into `engrave_area` values('32060000','南通市','32000000','0');");
E_D("replace into `engrave_area` values('32060100','市辖区','32060000','0');");
E_D("replace into `engrave_area` values('32060200','崇川区','32060000','0');");
E_D("replace into `engrave_area` values('32061100','港闸区','32060000','0');");
E_D("replace into `engrave_area` values('32062100','海安县','32060000','0');");
E_D("replace into `engrave_area` values('32062300','如东县','32060000','0');");
E_D("replace into `engrave_area` values('32068100','启东市','32060000','0');");
E_D("replace into `engrave_area` values('32068200','如皋市','32060000','0');");
E_D("replace into `engrave_area` values('32068300','通州市','32060000','0');");
E_D("replace into `engrave_area` values('32068400','海门市','32060000','0');");
E_D("replace into `engrave_area` values('32070000','连云港市','32000000','0');");
E_D("replace into `engrave_area` values('32070100','市辖区','32070000','0');");
E_D("replace into `engrave_area` values('32070300','连云区','32070000','0');");
E_D("replace into `engrave_area` values('32070500','新浦区','32070000','0');");
E_D("replace into `engrave_area` values('32070600','海州区','32070000','0');");
E_D("replace into `engrave_area` values('32072100','赣榆县','32070000','0');");
E_D("replace into `engrave_area` values('32072200','东海县','32070000','0');");
E_D("replace into `engrave_area` values('32072300','灌云县','32070000','0');");
E_D("replace into `engrave_area` values('32072400','灌南县','32070000','0');");
E_D("replace into `engrave_area` values('32080000','淮安市','32000000','0');");
E_D("replace into `engrave_area` values('32080100','市辖区','32080000','0');");
E_D("replace into `engrave_area` values('32080200','清河区','32080000','0');");
E_D("replace into `engrave_area` values('32080300','楚州区','32080000','0');");
E_D("replace into `engrave_area` values('32080400','淮阴区','32080000','0');");
E_D("replace into `engrave_area` values('32081100','清浦区','32080000','0');");
E_D("replace into `engrave_area` values('32082600','涟水县','32080000','0');");
E_D("replace into `engrave_area` values('32082900','洪泽县','32080000','0');");
E_D("replace into `engrave_area` values('32083000','盱眙县','32080000','0');");
E_D("replace into `engrave_area` values('32083100','金湖县','32080000','0');");
E_D("replace into `engrave_area` values('32090000','盐城市','32000000','0');");
E_D("replace into `engrave_area` values('32090100','市辖区','32090000','0');");
E_D("replace into `engrave_area` values('32090200','亭湖区','32090000','0');");
E_D("replace into `engrave_area` values('32090300','盐都区','32090000','0');");
E_D("replace into `engrave_area` values('32092100','响水县','32090000','0');");
E_D("replace into `engrave_area` values('32092200','滨海县','32090000','0');");
E_D("replace into `engrave_area` values('32092300','阜宁县','32090000','0');");
E_D("replace into `engrave_area` values('32092400','射阳县','32090000','0');");
E_D("replace into `engrave_area` values('32092500','建湖县','32090000','0');");
E_D("replace into `engrave_area` values('32098100','东台市','32090000','0');");
E_D("replace into `engrave_area` values('32098200','大丰市','32090000','0');");
E_D("replace into `engrave_area` values('32100000','扬州市','32000000','0');");
E_D("replace into `engrave_area` values('32100100','市辖区','32100000','0');");
E_D("replace into `engrave_area` values('32100200','广陵区','32100000','0');");
E_D("replace into `engrave_area` values('32100300','邗江区','32100000','0');");
E_D("replace into `engrave_area` values('32101100','维扬区','32100000','0');");
E_D("replace into `engrave_area` values('32102300','宝应县','32100000','0');");
E_D("replace into `engrave_area` values('32108100','仪征市','32100000','0');");
E_D("replace into `engrave_area` values('32108400','高邮市','32100000','0');");
E_D("replace into `engrave_area` values('32108800','江都市','32100000','0');");
E_D("replace into `engrave_area` values('32110000','镇江市','32000000','0');");
E_D("replace into `engrave_area` values('32110100','市辖区','32110000','0');");
E_D("replace into `engrave_area` values('32110200','京口区','32110000','0');");
E_D("replace into `engrave_area` values('32111100','润州区','32110000','0');");
E_D("replace into `engrave_area` values('32111200','丹徒区','32110000','0');");
E_D("replace into `engrave_area` values('32118100','丹阳市','32110000','0');");
E_D("replace into `engrave_area` values('32118200','扬中市','32110000','0');");
E_D("replace into `engrave_area` values('32118300','句容市','32110000','0');");
E_D("replace into `engrave_area` values('32120000','泰州市','32000000','0');");
E_D("replace into `engrave_area` values('32120100','市辖区','32120000','0');");
E_D("replace into `engrave_area` values('32120200','海陵区','32120000','0');");
E_D("replace into `engrave_area` values('32120300','高港区','32120000','0');");
E_D("replace into `engrave_area` values('32128100','兴化市','32120000','0');");
E_D("replace into `engrave_area` values('32128200','靖江市','32120000','0');");
E_D("replace into `engrave_area` values('32128300','泰兴市','32120000','0');");
E_D("replace into `engrave_area` values('32128400','姜堰市','32120000','0');");
E_D("replace into `engrave_area` values('32130000','宿迁市','32000000','0');");
E_D("replace into `engrave_area` values('32130100','市辖区','32130000','0');");
E_D("replace into `engrave_area` values('32130200','宿城区','32130000','0');");
E_D("replace into `engrave_area` values('32131100','宿豫区','32130000','0');");
E_D("replace into `engrave_area` values('32132200','沭阳县','32130000','0');");
E_D("replace into `engrave_area` values('32132300','泗阳县','32130000','0');");
E_D("replace into `engrave_area` values('32132400','泗洪县','32130000','0');");
E_D("replace into `engrave_area` values('33000000','浙江省','1','0');");
E_D("replace into `engrave_area` values('33010000','杭州市','33000000','0');");
E_D("replace into `engrave_area` values('33010100','市辖区','33010000','0');");
E_D("replace into `engrave_area` values('33010200','上城区','33010000','0');");
E_D("replace into `engrave_area` values('33010300','下城区','33010000','0');");
E_D("replace into `engrave_area` values('33010400','江干区','33010000','0');");
E_D("replace into `engrave_area` values('33010500','拱墅区','33010000','0');");
E_D("replace into `engrave_area` values('33010600','西湖区','33010000','0');");
E_D("replace into `engrave_area` values('33010800','滨江区','33010000','0');");
E_D("replace into `engrave_area` values('33010900','萧山区','33010000','0');");
E_D("replace into `engrave_area` values('33011000','余杭区','33010000','0');");
E_D("replace into `engrave_area` values('33012200','桐庐县','33010000','0');");
E_D("replace into `engrave_area` values('33012700','淳安县','33010000','0');");
E_D("replace into `engrave_area` values('33018200','建德市','33010000','0');");
E_D("replace into `engrave_area` values('33018300','富阳市','33010000','0');");
E_D("replace into `engrave_area` values('33018500','临安市','33010000','0');");
E_D("replace into `engrave_area` values('33020000','宁波市','33000000','0');");
E_D("replace into `engrave_area` values('33020100','市辖区','33020000','0');");
E_D("replace into `engrave_area` values('33020300','海曙区','33020000','0');");
E_D("replace into `engrave_area` values('33020400','江东区','33020000','0');");
E_D("replace into `engrave_area` values('33020500','江北区','33020000','0');");
E_D("replace into `engrave_area` values('33020600','北仑区','33020000','0');");
E_D("replace into `engrave_area` values('33021100','镇海区','33020000','0');");
E_D("replace into `engrave_area` values('33021200','鄞州区','33020000','0');");
E_D("replace into `engrave_area` values('33022500','象山县','33020000','0');");
E_D("replace into `engrave_area` values('33022600','宁海县','33020000','0');");
E_D("replace into `engrave_area` values('33028100','余姚市','33020000','0');");
E_D("replace into `engrave_area` values('33028200','慈溪市','33020000','0');");
E_D("replace into `engrave_area` values('33028300','奉化市','33020000','0');");
E_D("replace into `engrave_area` values('33030000','温州市','33000000','0');");
E_D("replace into `engrave_area` values('33030100','市辖区','33030000','0');");
E_D("replace into `engrave_area` values('33030200','鹿城区','33030000','0');");
E_D("replace into `engrave_area` values('33030300','龙湾区','33030000','0');");
E_D("replace into `engrave_area` values('33030400','瓯海区','33030000','0');");
E_D("replace into `engrave_area` values('33032200','洞头县','33030000','0');");
E_D("replace into `engrave_area` values('33032400','永嘉县','33030000','0');");
E_D("replace into `engrave_area` values('33032600','平阳县','33030000','0');");
E_D("replace into `engrave_area` values('33032700','苍南县','33030000','0');");
E_D("replace into `engrave_area` values('33032800','文成县','33030000','0');");
E_D("replace into `engrave_area` values('33032900','泰顺县','33030000','0');");
E_D("replace into `engrave_area` values('33038100','瑞安市','33030000','0');");
E_D("replace into `engrave_area` values('33038200','乐清市','33030000','0');");
E_D("replace into `engrave_area` values('33040000','嘉兴市','33000000','0');");
E_D("replace into `engrave_area` values('33040100','市辖区','33040000','0');");
E_D("replace into `engrave_area` values('33040200','南湖区 ','33040000','0');");
E_D("replace into `engrave_area` values('33041100','秀洲区','33040000','0');");
E_D("replace into `engrave_area` values('33042100','嘉善县','33040000','0');");
E_D("replace into `engrave_area` values('33042400','海盐县','33040000','0');");
E_D("replace into `engrave_area` values('33048100','海宁市','33040000','0');");
E_D("replace into `engrave_area` values('33048200','平湖市','33040000','0');");
E_D("replace into `engrave_area` values('33048300','桐乡市','33040000','0');");
E_D("replace into `engrave_area` values('33050000','湖州市','33000000','0');");
E_D("replace into `engrave_area` values('33050100','市辖区','33050000','0');");
E_D("replace into `engrave_area` values('33050200','吴兴区','33050000','0');");
E_D("replace into `engrave_area` values('33050300','南浔区','33050000','0');");
E_D("replace into `engrave_area` values('33052100','德清县','33050000','0');");
E_D("replace into `engrave_area` values('33052200','长兴县','33050000','0');");
E_D("replace into `engrave_area` values('33052300','安吉县','33050000','0');");
E_D("replace into `engrave_area` values('33060000','绍兴市','33000000','0');");
E_D("replace into `engrave_area` values('33060100','市辖区','33060000','0');");
E_D("replace into `engrave_area` values('33060200','越城区','33060000','0');");
E_D("replace into `engrave_area` values('33062100','绍兴县','33060000','0');");
E_D("replace into `engrave_area` values('33062400','新昌县','33060000','0');");
E_D("replace into `engrave_area` values('33068100','诸暨市','33060000','0');");
E_D("replace into `engrave_area` values('33068200','上虞市','33060000','0');");
E_D("replace into `engrave_area` values('33068300','嵊州市','33060000','0');");
E_D("replace into `engrave_area` values('33070000','金华市','33000000','0');");
E_D("replace into `engrave_area` values('33070100','市辖区','33070000','0');");
E_D("replace into `engrave_area` values('33070200','婺城区','33070000','0');");
E_D("replace into `engrave_area` values('33070300','金东区','33070000','0');");
E_D("replace into `engrave_area` values('33072300','武义县','33070000','0');");
E_D("replace into `engrave_area` values('33072600','浦江县','33070000','0');");
E_D("replace into `engrave_area` values('33072700','磐安县','33070000','0');");
E_D("replace into `engrave_area` values('33078100','兰溪市','33070000','0');");
E_D("replace into `engrave_area` values('33078200','义乌市','33070000','0');");
E_D("replace into `engrave_area` values('33078300','东阳市','33070000','0');");
E_D("replace into `engrave_area` values('33078400','永康市','33070000','0');");
E_D("replace into `engrave_area` values('33080000','衢州市','33000000','0');");
E_D("replace into `engrave_area` values('33080100','市辖区','33080000','0');");
E_D("replace into `engrave_area` values('33080200','柯城区','33080000','0');");
E_D("replace into `engrave_area` values('33080300','衢江区','33080000','0');");
E_D("replace into `engrave_area` values('33082200','常山县','33080000','0');");
E_D("replace into `engrave_area` values('33082400','开化县','33080000','0');");
E_D("replace into `engrave_area` values('33082500','龙游县','33080000','0');");
E_D("replace into `engrave_area` values('33088100','江山市','33080000','0');");
E_D("replace into `engrave_area` values('33090000','舟山市','33000000','0');");
E_D("replace into `engrave_area` values('33090100','市辖区','33090000','0');");
E_D("replace into `engrave_area` values('33090200','定海区','33090000','0');");
E_D("replace into `engrave_area` values('33090300','普陀区','33090000','0');");
E_D("replace into `engrave_area` values('33092100','岱山县','33090000','0');");
E_D("replace into `engrave_area` values('33092200','嵊泗县','33090000','0');");
E_D("replace into `engrave_area` values('33100000','台州市','33000000','0');");
E_D("replace into `engrave_area` values('33100100','市辖区','33100000','0');");
E_D("replace into `engrave_area` values('33100200','椒江区','33100000','0');");
E_D("replace into `engrave_area` values('33100300','黄岩区','33100000','0');");
E_D("replace into `engrave_area` values('33100400','路桥区','33100000','0');");
E_D("replace into `engrave_area` values('33102100','玉环县','33100000','0');");
E_D("replace into `engrave_area` values('33102200','三门县','33100000','0');");
E_D("replace into `engrave_area` values('33102300','天台县','33100000','0');");
E_D("replace into `engrave_area` values('33102400','仙居县','33100000','0');");
E_D("replace into `engrave_area` values('33108100','温岭市','33100000','0');");
E_D("replace into `engrave_area` values('33108200','临海市','33100000','0');");
E_D("replace into `engrave_area` values('33110000','丽水市','33000000','0');");
E_D("replace into `engrave_area` values('33110100','市辖区','33110000','0');");
E_D("replace into `engrave_area` values('33110200','莲都区','33110000','0');");
E_D("replace into `engrave_area` values('33112100','青田县','33110000','0');");
E_D("replace into `engrave_area` values('33112200','缙云县','33110000','0');");
E_D("replace into `engrave_area` values('33112300','遂昌县','33110000','0');");
E_D("replace into `engrave_area` values('33112400','松阳县','33110000','0');");
E_D("replace into `engrave_area` values('33112500','云和县','33110000','0');");
E_D("replace into `engrave_area` values('33112600','庆元县','33110000','0');");
E_D("replace into `engrave_area` values('33112700','景宁畲族自治县','33110000','0');");
E_D("replace into `engrave_area` values('33118100','龙泉市','33110000','0');");
E_D("replace into `engrave_area` values('34000000','安徽省','1','0');");
E_D("replace into `engrave_area` values('34010000','合肥市','34000000','0');");
E_D("replace into `engrave_area` values('34010100','市辖区','34010000','0');");
E_D("replace into `engrave_area` values('34010200','瑶海区','34010000','0');");
E_D("replace into `engrave_area` values('34010300','庐阳区','34010000','0');");
E_D("replace into `engrave_area` values('34010400','蜀山区','34010000','0');");
E_D("replace into `engrave_area` values('34011100','包河区','34010000','0');");
E_D("replace into `engrave_area` values('34012100','长丰县','34010000','0');");
E_D("replace into `engrave_area` values('34012200','肥东县','34010000','0');");
E_D("replace into `engrave_area` values('34012300','肥西县','34010000','0');");
E_D("replace into `engrave_area` values('34020000','芜湖市','34000000','0');");
E_D("replace into `engrave_area` values('34020100','市辖区','34020000','0');");
E_D("replace into `engrave_area` values('34020200','镜湖区','34020000','0');");
E_D("replace into `engrave_area` values('34020300','弋江区','34020000','0');");
E_D("replace into `engrave_area` values('34020700','鸠江区','34020000','0');");
E_D("replace into `engrave_area` values('34020800','三山区','34020000','0');");
E_D("replace into `engrave_area` values('34022100','芜湖县','34020000','0');");
E_D("replace into `engrave_area` values('34022200','繁昌县','34020000','0');");
E_D("replace into `engrave_area` values('34022300','南陵县','34020000','0');");
E_D("replace into `engrave_area` values('34030000','蚌埠市','34000000','0');");
E_D("replace into `engrave_area` values('34030100','市辖区','34030000','0');");
E_D("replace into `engrave_area` values('34030200','龙子湖区','34030000','0');");
E_D("replace into `engrave_area` values('34030300','蚌山区','34030000','0');");
E_D("replace into `engrave_area` values('34030400','禹会区','34030000','0');");
E_D("replace into `engrave_area` values('34031100','淮上区','34030000','0');");
E_D("replace into `engrave_area` values('34032100','怀远县','34030000','0');");
E_D("replace into `engrave_area` values('34032200','五河县','34030000','0');");
E_D("replace into `engrave_area` values('34032300','固镇县','34030000','0');");
E_D("replace into `engrave_area` values('34040000','淮南市','34000000','0');");
E_D("replace into `engrave_area` values('34040100','市辖区','34040000','0');");
E_D("replace into `engrave_area` values('34040200','大通区','34040000','0');");
E_D("replace into `engrave_area` values('34040300','田家庵区','34040000','0');");
E_D("replace into `engrave_area` values('34040400','谢家集区','34040000','0');");
E_D("replace into `engrave_area` values('34040500','八公山区','34040000','0');");
E_D("replace into `engrave_area` values('34040600','潘集区','34040000','0');");
E_D("replace into `engrave_area` values('34042100','凤台县','34040000','0');");
E_D("replace into `engrave_area` values('34050000','马鞍山市','34000000','0');");
E_D("replace into `engrave_area` values('34050100','市辖区','34050000','0');");
E_D("replace into `engrave_area` values('34050200','金家庄区','34050000','0');");
E_D("replace into `engrave_area` values('34050300','花山区','34050000','0');");
E_D("replace into `engrave_area` values('34050400','雨山区','34050000','0');");
E_D("replace into `engrave_area` values('34052100','当涂县','34050000','0');");
E_D("replace into `engrave_area` values('34060000','淮北市','34000000','0');");
E_D("replace into `engrave_area` values('34060100','市辖区','34060000','0');");
E_D("replace into `engrave_area` values('34060200','杜集区','34060000','0');");
E_D("replace into `engrave_area` values('34060300','相山区','34060000','0');");
E_D("replace into `engrave_area` values('34060400','烈山区','34060000','0');");
E_D("replace into `engrave_area` values('34062100','濉溪县','34060000','0');");
E_D("replace into `engrave_area` values('34070000','铜陵市','34000000','0');");
E_D("replace into `engrave_area` values('34070100','市辖区','34070000','0');");
E_D("replace into `engrave_area` values('34070200','铜官山区','34070000','0');");
E_D("replace into `engrave_area` values('34070300','狮子山区','34070000','0');");
E_D("replace into `engrave_area` values('34071100','郊区','34070000','0');");
E_D("replace into `engrave_area` values('34072100','铜陵县','34070000','0');");
E_D("replace into `engrave_area` values('34080000','安庆市','34000000','0');");
E_D("replace into `engrave_area` values('34080100','市辖区','34080000','0');");
E_D("replace into `engrave_area` values('34080200','迎江区','34080000','0');");
E_D("replace into `engrave_area` values('34080300','大观区','34080000','0');");
E_D("replace into `engrave_area` values('34081100','宜秀区','34080000','0');");
E_D("replace into `engrave_area` values('34082200','怀宁县','34080000','0');");
E_D("replace into `engrave_area` values('34082300','枞阳县','34080000','0');");
E_D("replace into `engrave_area` values('34082400','潜山县','34080000','0');");
E_D("replace into `engrave_area` values('34082500','太湖县','34080000','0');");
E_D("replace into `engrave_area` values('34082600','宿松县','34080000','0');");
E_D("replace into `engrave_area` values('34082700','望江县','34080000','0');");
E_D("replace into `engrave_area` values('34082800','岳西县','34080000','0');");
E_D("replace into `engrave_area` values('34088100','桐城市','34080000','0');");
E_D("replace into `engrave_area` values('34100000','黄山市','34000000','0');");
E_D("replace into `engrave_area` values('34100100','市辖区','34100000','0');");
E_D("replace into `engrave_area` values('34100200','屯溪区','34100000','0');");
E_D("replace into `engrave_area` values('34100300','黄山区','34100000','0');");
E_D("replace into `engrave_area` values('34100400','徽州区','34100000','0');");
E_D("replace into `engrave_area` values('34102100','歙县','34100000','0');");
E_D("replace into `engrave_area` values('34102200','休宁县','34100000','0');");
E_D("replace into `engrave_area` values('34102300','黟县','34100000','0');");
E_D("replace into `engrave_area` values('34102400','祁门县','34100000','0');");
E_D("replace into `engrave_area` values('34110000','滁州市','34000000','0');");
E_D("replace into `engrave_area` values('34110100','市辖区','34110000','0');");
E_D("replace into `engrave_area` values('34110200','琅琊区','34110000','0');");
E_D("replace into `engrave_area` values('34110300','南谯区','34110000','0');");
E_D("replace into `engrave_area` values('34112200','来安县','34110000','0');");
E_D("replace into `engrave_area` values('34112400','全椒县','34110000','0');");
E_D("replace into `engrave_area` values('34112500','定远县','34110000','0');");
E_D("replace into `engrave_area` values('34112600','凤阳县','34110000','0');");
E_D("replace into `engrave_area` values('34118100','天长市','34110000','0');");
E_D("replace into `engrave_area` values('34118200','明光市','34110000','0');");
E_D("replace into `engrave_area` values('34120000','阜阳市','34000000','0');");
E_D("replace into `engrave_area` values('34120100','市辖区','34120000','0');");
E_D("replace into `engrave_area` values('34120200','颍州区','34120000','0');");
E_D("replace into `engrave_area` values('34120300','颍东区','34120000','0');");
E_D("replace into `engrave_area` values('34120400','颍泉区','34120000','0');");
E_D("replace into `engrave_area` values('34122100','临泉县','34120000','0');");
E_D("replace into `engrave_area` values('34122200','太和县','34120000','0');");
E_D("replace into `engrave_area` values('34122500','阜南县','34120000','0');");
E_D("replace into `engrave_area` values('34122600','颍上县','34120000','0');");
E_D("replace into `engrave_area` values('34128200','界首市','34120000','0');");
E_D("replace into `engrave_area` values('34130000','宿州市','34000000','0');");
E_D("replace into `engrave_area` values('34130100','市辖区','34130000','0');");
E_D("replace into `engrave_area` values('34130200','埇桥区','34130000','0');");
E_D("replace into `engrave_area` values('34132100','砀山县','34130000','0');");
E_D("replace into `engrave_area` values('34132200','萧县','34130000','0');");
E_D("replace into `engrave_area` values('34132300','灵璧县','34130000','0');");
E_D("replace into `engrave_area` values('34132400','泗县','34130000','0');");
E_D("replace into `engrave_area` values('34140000','巢湖市','34000000','0');");
E_D("replace into `engrave_area` values('34140100','市辖区','34140000','0');");
E_D("replace into `engrave_area` values('34140200','居巢区','34140000','0');");
E_D("replace into `engrave_area` values('34142100','庐江县','34140000','0');");
E_D("replace into `engrave_area` values('34142200','无为县','34140000','0');");
E_D("replace into `engrave_area` values('34142300','含山县','34140000','0');");
E_D("replace into `engrave_area` values('34142400','和县','34140000','0');");
E_D("replace into `engrave_area` values('34150000','六安市','34000000','0');");
E_D("replace into `engrave_area` values('34150100','市辖区','34150000','0');");
E_D("replace into `engrave_area` values('34150200','金安区','34150000','0');");
E_D("replace into `engrave_area` values('34150300','裕安区','34150000','0');");
E_D("replace into `engrave_area` values('34152100','寿县','34150000','0');");
E_D("replace into `engrave_area` values('34152200','霍邱县','34150000','0');");
E_D("replace into `engrave_area` values('34152300','舒城县','34150000','0');");
E_D("replace into `engrave_area` values('34152400','金寨县','34150000','0');");
E_D("replace into `engrave_area` values('34152500','霍山县','34150000','0');");
E_D("replace into `engrave_area` values('34160000','亳州市','34000000','0');");
E_D("replace into `engrave_area` values('34160100','市辖区','34160000','0');");
E_D("replace into `engrave_area` values('34160200','谯城区','34160000','0');");
E_D("replace into `engrave_area` values('34162100','涡阳县','34160000','0');");
E_D("replace into `engrave_area` values('34162200','蒙城县','34160000','0');");
E_D("replace into `engrave_area` values('34162300','利辛县','34160000','0');");
E_D("replace into `engrave_area` values('34170000','池州市','34000000','0');");
E_D("replace into `engrave_area` values('34170100','市辖区','34170000','0');");
E_D("replace into `engrave_area` values('34170200','贵池区','34170000','0');");
E_D("replace into `engrave_area` values('34172100','东至县','34170000','0');");
E_D("replace into `engrave_area` values('34172200','石台县','34170000','0');");
E_D("replace into `engrave_area` values('34172300','青阳县','34170000','0');");
E_D("replace into `engrave_area` values('34180000','宣城市','34000000','0');");
E_D("replace into `engrave_area` values('34180100','市辖区','34180000','0');");
E_D("replace into `engrave_area` values('34180200','宣州区','34180000','0');");
E_D("replace into `engrave_area` values('34182100','郎溪县','34180000','0');");
E_D("replace into `engrave_area` values('34182200','广德县','34180000','0');");
E_D("replace into `engrave_area` values('34182300','泾县','34180000','0');");
E_D("replace into `engrave_area` values('34182400','绩溪县','34180000','0');");
E_D("replace into `engrave_area` values('34182500','旌德县','34180000','0');");
E_D("replace into `engrave_area` values('34188100','宁国市','34180000','0');");
E_D("replace into `engrave_area` values('35000000','福建省','1','0');");
E_D("replace into `engrave_area` values('35010000','福州市','35000000','0');");
E_D("replace into `engrave_area` values('35010100','市辖区','35010000','0');");
E_D("replace into `engrave_area` values('35010200','鼓楼区','35010000','0');");
E_D("replace into `engrave_area` values('35010300','台江区','35010000','0');");
E_D("replace into `engrave_area` values('35010400','仓山区','35010000','0');");
E_D("replace into `engrave_area` values('35010500','马尾区','35010000','0');");
E_D("replace into `engrave_area` values('35011100','晋安区','35010000','0');");
E_D("replace into `engrave_area` values('35012100','闽侯县','35010000','0');");
E_D("replace into `engrave_area` values('35012200','连江县','35010000','0');");
E_D("replace into `engrave_area` values('35012300','罗源县','35010000','0');");
E_D("replace into `engrave_area` values('35012400','闽清县','35010000','0');");
E_D("replace into `engrave_area` values('35012500','永泰县','35010000','0');");
E_D("replace into `engrave_area` values('35012800','平潭县','35010000','0');");
E_D("replace into `engrave_area` values('35018100','福清市','35010000','0');");
E_D("replace into `engrave_area` values('35018200','长乐市','35010000','0');");
E_D("replace into `engrave_area` values('35020000','厦门市','35000000','0');");
E_D("replace into `engrave_area` values('35020100','市辖区','35020000','0');");
E_D("replace into `engrave_area` values('35020300','思明区','35020000','0');");
E_D("replace into `engrave_area` values('35020500','海沧区','35020000','0');");
E_D("replace into `engrave_area` values('35020600','湖里区','35020000','0');");
E_D("replace into `engrave_area` values('35021100','集美区','35020000','0');");
E_D("replace into `engrave_area` values('35021200','同安区','35020000','0');");
E_D("replace into `engrave_area` values('35021300','翔安区','35020000','0');");
E_D("replace into `engrave_area` values('35030000','莆田市','35000000','0');");
E_D("replace into `engrave_area` values('35030100','市辖区','35030000','0');");
E_D("replace into `engrave_area` values('35030200','城厢区','35030000','0');");
E_D("replace into `engrave_area` values('35030300','涵江区','35030000','0');");
E_D("replace into `engrave_area` values('35030400','荔城区','35030000','0');");
E_D("replace into `engrave_area` values('35030500','秀屿区','35030000','0');");
E_D("replace into `engrave_area` values('35032200','仙游县','35030000','0');");
E_D("replace into `engrave_area` values('35040000','三明市','35000000','0');");
E_D("replace into `engrave_area` values('35040100','市辖区','35040000','0');");
E_D("replace into `engrave_area` values('35040200','梅列区','35040000','0');");
E_D("replace into `engrave_area` values('35040300','三元区','35040000','0');");
E_D("replace into `engrave_area` values('35042100','明溪县','35040000','0');");
E_D("replace into `engrave_area` values('35042300','清流县','35040000','0');");
E_D("replace into `engrave_area` values('35042400','宁化县','35040000','0');");
E_D("replace into `engrave_area` values('35042500','大田县','35040000','0');");
E_D("replace into `engrave_area` values('35042600','尤溪县','35040000','0');");
E_D("replace into `engrave_area` values('35042700','沙县','35040000','0');");
E_D("replace into `engrave_area` values('35042800','将乐县','35040000','0');");
E_D("replace into `engrave_area` values('35042900','泰宁县','35040000','0');");
E_D("replace into `engrave_area` values('35043000','建宁县','35040000','0');");
E_D("replace into `engrave_area` values('35048100','永安市','35040000','0');");
E_D("replace into `engrave_area` values('35050000','泉州市','35000000','0');");
E_D("replace into `engrave_area` values('35050100','市辖区','35050000','0');");
E_D("replace into `engrave_area` values('35050200','鲤城区','35050000','0');");
E_D("replace into `engrave_area` values('35050300','丰泽区','35050000','0');");
E_D("replace into `engrave_area` values('35050400','洛江区','35050000','0');");
E_D("replace into `engrave_area` values('35050500','泉港区','35050000','0');");
E_D("replace into `engrave_area` values('35052100','惠安县','35050000','0');");
E_D("replace into `engrave_area` values('35052400','安溪县','35050000','0');");
E_D("replace into `engrave_area` values('35052500','永春县','35050000','0');");
E_D("replace into `engrave_area` values('35052600','德化县','35050000','0');");
E_D("replace into `engrave_area` values('35052700','金门县','35050000','0');");
E_D("replace into `engrave_area` values('35058100','石狮市','35050000','0');");
E_D("replace into `engrave_area` values('35058200','晋江市','35050000','0');");
E_D("replace into `engrave_area` values('35058300','南安市','35050000','0');");
E_D("replace into `engrave_area` values('35060000','漳州市','35000000','0');");
E_D("replace into `engrave_area` values('35060100','市辖区','35060000','0');");
E_D("replace into `engrave_area` values('35060200','芗城区','35060000','0');");
E_D("replace into `engrave_area` values('35060300','龙文区','35060000','0');");
E_D("replace into `engrave_area` values('35062200','云霄县','35060000','0');");
E_D("replace into `engrave_area` values('35062300','漳浦县','35060000','0');");
E_D("replace into `engrave_area` values('35062400','诏安县','35060000','0');");
E_D("replace into `engrave_area` values('35062500','长泰县','35060000','0');");
E_D("replace into `engrave_area` values('35062600','东山县','35060000','0');");
E_D("replace into `engrave_area` values('35062700','南靖县','35060000','0');");
E_D("replace into `engrave_area` values('35062800','平和县','35060000','0');");
E_D("replace into `engrave_area` values('35062900','华安县','35060000','0');");
E_D("replace into `engrave_area` values('35068100','龙海市','35060000','0');");
E_D("replace into `engrave_area` values('35070000','南平市','35000000','0');");
E_D("replace into `engrave_area` values('35070100','市辖区','35070000','0');");
E_D("replace into `engrave_area` values('35070200','延平区','35070000','0');");
E_D("replace into `engrave_area` values('35072100','顺昌县','35070000','0');");
E_D("replace into `engrave_area` values('35072200','浦城县','35070000','0');");
E_D("replace into `engrave_area` values('35072300','光泽县','35070000','0');");
E_D("replace into `engrave_area` values('35072400','松溪县','35070000','0');");
E_D("replace into `engrave_area` values('35072500','政和县','35070000','0');");
E_D("replace into `engrave_area` values('35078100','邵武市','35070000','0');");
E_D("replace into `engrave_area` values('35078200','武夷山市','35070000','0');");
E_D("replace into `engrave_area` values('35078300','建瓯市','35070000','0');");
E_D("replace into `engrave_area` values('35078400','建阳市','35070000','0');");
E_D("replace into `engrave_area` values('35080000','龙岩市','35000000','0');");
E_D("replace into `engrave_area` values('35080100','市辖区','35080000','0');");
E_D("replace into `engrave_area` values('35080200','新罗区','35080000','0');");
E_D("replace into `engrave_area` values('35082100','长汀县','35080000','0');");
E_D("replace into `engrave_area` values('35082200','永定县','35080000','0');");
E_D("replace into `engrave_area` values('35082300','上杭县','35080000','0');");
E_D("replace into `engrave_area` values('35082400','武平县','35080000','0');");
E_D("replace into `engrave_area` values('35082500','连城县','35080000','0');");
E_D("replace into `engrave_area` values('35088100','漳平市','35080000','0');");
E_D("replace into `engrave_area` values('35090000','宁德市','35000000','0');");
E_D("replace into `engrave_area` values('35090100','市辖区','35090000','0');");
E_D("replace into `engrave_area` values('35090200','蕉城区','35090000','0');");
E_D("replace into `engrave_area` values('35092100','霞浦县','35090000','0');");
E_D("replace into `engrave_area` values('35092200','古田县','35090000','0');");
E_D("replace into `engrave_area` values('35092300','屏南县','35090000','0');");
E_D("replace into `engrave_area` values('35092400','寿宁县','35090000','0');");
E_D("replace into `engrave_area` values('35092500','周宁县','35090000','0');");
E_D("replace into `engrave_area` values('35092600','柘荣县','35090000','0');");
E_D("replace into `engrave_area` values('35098100','福安市','35090000','0');");
E_D("replace into `engrave_area` values('35098200','福鼎市','35090000','0');");
E_D("replace into `engrave_area` values('36000000','江西省','1','0');");
E_D("replace into `engrave_area` values('36010000','南昌市','36000000','0');");
E_D("replace into `engrave_area` values('36010100','市辖区','36010000','0');");
E_D("replace into `engrave_area` values('36010200','东湖区','36010000','0');");
E_D("replace into `engrave_area` values('36010300','西湖区','36010000','0');");
E_D("replace into `engrave_area` values('36010400','青云谱区','36010000','0');");
E_D("replace into `engrave_area` values('36010500','湾里区','36010000','0');");
E_D("replace into `engrave_area` values('36011100','青山湖区','36010000','0');");
E_D("replace into `engrave_area` values('36012100','南昌县','36010000','0');");
E_D("replace into `engrave_area` values('36012200','新建县','36010000','0');");
E_D("replace into `engrave_area` values('36012300','安义县','36010000','0');");
E_D("replace into `engrave_area` values('36012400','进贤县','36010000','0');");
E_D("replace into `engrave_area` values('36020000','景德镇市','36000000','0');");
E_D("replace into `engrave_area` values('36020100','市辖区','36020000','0');");
E_D("replace into `engrave_area` values('36020200','昌江区','36020000','0');");
E_D("replace into `engrave_area` values('36020300','珠山区','36020000','0');");
E_D("replace into `engrave_area` values('36022200','浮梁县','36020000','0');");
E_D("replace into `engrave_area` values('36028100','乐平市','36020000','0');");
E_D("replace into `engrave_area` values('36030000','萍乡市','36000000','0');");
E_D("replace into `engrave_area` values('36030100','市辖区','36030000','0');");
E_D("replace into `engrave_area` values('36030200','安源区','36030000','0');");
E_D("replace into `engrave_area` values('36031300','湘东区','36030000','0');");
E_D("replace into `engrave_area` values('36032100','莲花县','36030000','0');");
E_D("replace into `engrave_area` values('36032200','上栗县','36030000','0');");
E_D("replace into `engrave_area` values('36032300','芦溪县','36030000','0');");
E_D("replace into `engrave_area` values('36040000','九江市','36000000','0');");
E_D("replace into `engrave_area` values('36040100','市辖区','36040000','0');");
E_D("replace into `engrave_area` values('36040200','庐山区','36040000','0');");
E_D("replace into `engrave_area` values('36040300','浔阳区','36040000','0');");
E_D("replace into `engrave_area` values('36042100','九江县','36040000','0');");
E_D("replace into `engrave_area` values('36042300','武宁县','36040000','0');");
E_D("replace into `engrave_area` values('36042400','修水县','36040000','0');");
E_D("replace into `engrave_area` values('36042500','永修县','36040000','0');");
E_D("replace into `engrave_area` values('36042600','德安县','36040000','0');");
E_D("replace into `engrave_area` values('36042700','星子县','36040000','0');");
E_D("replace into `engrave_area` values('36042800','都昌县','36040000','0');");
E_D("replace into `engrave_area` values('36042900','湖口县','36040000','0');");
E_D("replace into `engrave_area` values('36043000','彭泽县','36040000','0');");
E_D("replace into `engrave_area` values('36048100','瑞昌市','36040000','0');");
E_D("replace into `engrave_area` values('36050000','新余市','36000000','0');");
E_D("replace into `engrave_area` values('36050100','市辖区','36050000','0');");
E_D("replace into `engrave_area` values('36050200','渝水区','36050000','0');");
E_D("replace into `engrave_area` values('36052100','分宜县','36050000','0');");
E_D("replace into `engrave_area` values('36060000','鹰潭市','36000000','0');");
E_D("replace into `engrave_area` values('36060100','市辖区','36060000','0');");
E_D("replace into `engrave_area` values('36060200','月湖区','36060000','0');");
E_D("replace into `engrave_area` values('36062200','余江县','36060000','0');");
E_D("replace into `engrave_area` values('36068100','贵溪市','36060000','0');");
E_D("replace into `engrave_area` values('36070000','赣州市','36000000','0');");
E_D("replace into `engrave_area` values('36070100','市辖区','36070000','0');");
E_D("replace into `engrave_area` values('36070200','章贡区','36070000','0');");
E_D("replace into `engrave_area` values('36072100','赣县','36070000','0');");
E_D("replace into `engrave_area` values('36072200','信丰县','36070000','0');");
E_D("replace into `engrave_area` values('36072300','大余县','36070000','0');");
E_D("replace into `engrave_area` values('36072400','上犹县','36070000','0');");
E_D("replace into `engrave_area` values('36072500','崇义县','36070000','0');");
E_D("replace into `engrave_area` values('36072600','安远县','36070000','0');");
E_D("replace into `engrave_area` values('36072700','龙南县','36070000','0');");
E_D("replace into `engrave_area` values('36072800','定南县','36070000','0');");
E_D("replace into `engrave_area` values('36072900','全南县','36070000','0');");
E_D("replace into `engrave_area` values('36073000','宁都县','36070000','0');");
E_D("replace into `engrave_area` values('36073100','于都县','36070000','0');");
E_D("replace into `engrave_area` values('36073200','兴国县','36070000','0');");
E_D("replace into `engrave_area` values('36073300','会昌县','36070000','0');");
E_D("replace into `engrave_area` values('36073400','寻乌县','36070000','0');");
E_D("replace into `engrave_area` values('36073500','石城县','36070000','0');");
E_D("replace into `engrave_area` values('36078100','瑞金市','36070000','0');");
E_D("replace into `engrave_area` values('36078200','南康市','36070000','0');");
E_D("replace into `engrave_area` values('36080000','吉安市','36000000','0');");
E_D("replace into `engrave_area` values('36080100','市辖区','36080000','0');");
E_D("replace into `engrave_area` values('36080200','吉州区','36080000','0');");
E_D("replace into `engrave_area` values('36080300','青原区','36080000','0');");
E_D("replace into `engrave_area` values('36082100','吉安县','36080000','0');");
E_D("replace into `engrave_area` values('36082200','吉水县','36080000','0');");
E_D("replace into `engrave_area` values('36082300','峡江县','36080000','0');");
E_D("replace into `engrave_area` values('36082400','新干县','36080000','0');");
E_D("replace into `engrave_area` values('36082500','永丰县','36080000','0');");
E_D("replace into `engrave_area` values('36082600','泰和县','36080000','0');");
E_D("replace into `engrave_area` values('36082700','遂川县','36080000','0');");
E_D("replace into `engrave_area` values('36082800','万安县','36080000','0');");
E_D("replace into `engrave_area` values('36082900','安福县','36080000','0');");
E_D("replace into `engrave_area` values('36083000','永新县','36080000','0');");
E_D("replace into `engrave_area` values('36088100','井冈山市','36080000','0');");
E_D("replace into `engrave_area` values('36090000','宜春市','36000000','0');");
E_D("replace into `engrave_area` values('36090100','市辖区','36090000','0');");
E_D("replace into `engrave_area` values('36090200','袁州区','36090000','0');");
E_D("replace into `engrave_area` values('36092100','奉新县','36090000','0');");
E_D("replace into `engrave_area` values('36092200','万载县','36090000','0');");
E_D("replace into `engrave_area` values('36092300','上高县','36090000','0');");
E_D("replace into `engrave_area` values('36092400','宜丰县','36090000','0');");
E_D("replace into `engrave_area` values('36092500','靖安县','36090000','0');");
E_D("replace into `engrave_area` values('36092600','铜鼓县','36090000','0');");
E_D("replace into `engrave_area` values('36098100','丰城市','36090000','0');");
E_D("replace into `engrave_area` values('36098200','樟树市','36090000','0');");
E_D("replace into `engrave_area` values('36098300','高安市','36090000','0');");
E_D("replace into `engrave_area` values('36100000','抚州市','36000000','0');");
E_D("replace into `engrave_area` values('36100100','市辖区','36100000','0');");
E_D("replace into `engrave_area` values('36100200','临川区','36100000','0');");
E_D("replace into `engrave_area` values('36102100','南城县','36100000','0');");
E_D("replace into `engrave_area` values('36102200','黎川县','36100000','0');");
E_D("replace into `engrave_area` values('36102300','南丰县','36100000','0');");
E_D("replace into `engrave_area` values('36102400','崇仁县','36100000','0');");
E_D("replace into `engrave_area` values('36102500','乐安县','36100000','0');");
E_D("replace into `engrave_area` values('36102600','宜黄县','36100000','0');");
E_D("replace into `engrave_area` values('36102700','金溪县','36100000','0');");
E_D("replace into `engrave_area` values('36102800','资溪县','36100000','0');");
E_D("replace into `engrave_area` values('36102900','东乡县','36100000','0');");
E_D("replace into `engrave_area` values('36103000','广昌县','36100000','0');");
E_D("replace into `engrave_area` values('36110000','上饶市','36000000','0');");
E_D("replace into `engrave_area` values('36110100','市辖区','36110000','0');");
E_D("replace into `engrave_area` values('36110200','信州区','36110000','0');");
E_D("replace into `engrave_area` values('36112100','上饶县','36110000','0');");
E_D("replace into `engrave_area` values('36112200','广丰县','36110000','0');");
E_D("replace into `engrave_area` values('36112300','玉山县','36110000','0');");
E_D("replace into `engrave_area` values('36112400','铅山县','36110000','0');");
E_D("replace into `engrave_area` values('36112500','横峰县','36110000','0');");
E_D("replace into `engrave_area` values('36112600','弋阳县','36110000','0');");
E_D("replace into `engrave_area` values('36112700','余干县','36110000','0');");
E_D("replace into `engrave_area` values('36112800','鄱阳县','36110000','0');");
E_D("replace into `engrave_area` values('36112900','万年县','36110000','0');");
E_D("replace into `engrave_area` values('36113000','婺源县','36110000','0');");
E_D("replace into `engrave_area` values('36118100','德兴市','36110000','0');");
E_D("replace into `engrave_area` values('37000000','山东省','1','0');");
E_D("replace into `engrave_area` values('37010000','济南市','37000000','0');");
E_D("replace into `engrave_area` values('37010100','市辖区','37010000','0');");
E_D("replace into `engrave_area` values('37010200','历下区','37010000','0');");
E_D("replace into `engrave_area` values('37010300','市中区','37010000','0');");
E_D("replace into `engrave_area` values('37010400','槐荫区','37010000','0');");
E_D("replace into `engrave_area` values('37010500','天桥区','37010000','0');");
E_D("replace into `engrave_area` values('37011200','历城区','37010000','0');");
E_D("replace into `engrave_area` values('37011300','长清区','37010000','0');");
E_D("replace into `engrave_area` values('37012400','平阴县','37010000','0');");
E_D("replace into `engrave_area` values('37012500','济阳县','37010000','0');");
E_D("replace into `engrave_area` values('37012600','商河县','37010000','0');");
E_D("replace into `engrave_area` values('37018100','章丘市','37010000','0');");
E_D("replace into `engrave_area` values('37020000','青岛市','37000000','0');");
E_D("replace into `engrave_area` values('37020100','市辖区','37020000','0');");
E_D("replace into `engrave_area` values('37020200','市南区','37020000','0');");
E_D("replace into `engrave_area` values('37020300','市北区','37020000','0');");
E_D("replace into `engrave_area` values('37020500','四方区','37020000','0');");
E_D("replace into `engrave_area` values('37021100','黄岛区','37020000','0');");
E_D("replace into `engrave_area` values('37021200','崂山区','37020000','0');");
E_D("replace into `engrave_area` values('37021300','李沧区','37020000','0');");
E_D("replace into `engrave_area` values('37021400','城阳区','37020000','0');");
E_D("replace into `engrave_area` values('37028100','胶州市','37020000','0');");
E_D("replace into `engrave_area` values('37028200','即墨市','37020000','0');");
E_D("replace into `engrave_area` values('37028300','平度市','37020000','0');");
E_D("replace into `engrave_area` values('37028400','胶南市','37020000','0');");
E_D("replace into `engrave_area` values('37028500','莱西市','37020000','0');");
E_D("replace into `engrave_area` values('37030000','淄博市','37000000','0');");
E_D("replace into `engrave_area` values('37030100','市辖区','37030000','0');");
E_D("replace into `engrave_area` values('37030200','淄川区','37030000','0');");
E_D("replace into `engrave_area` values('37030300','张店区','37030000','0');");
E_D("replace into `engrave_area` values('37030400','博山区','37030000','0');");
E_D("replace into `engrave_area` values('37030500','临淄区','37030000','0');");
E_D("replace into `engrave_area` values('37030600','周村区','37030000','0');");
E_D("replace into `engrave_area` values('37032100','桓台县','37030000','0');");
E_D("replace into `engrave_area` values('37032200','高青县','37030000','0');");
E_D("replace into `engrave_area` values('37032300','沂源县','37030000','0');");
E_D("replace into `engrave_area` values('37040000','枣庄市','37000000','0');");
E_D("replace into `engrave_area` values('37040100','市辖区','37040000','0');");
E_D("replace into `engrave_area` values('37040200','市中区','37040000','0');");
E_D("replace into `engrave_area` values('37040300','薛城区','37040000','0');");
E_D("replace into `engrave_area` values('37040400','峄城区','37040000','0');");
E_D("replace into `engrave_area` values('37040500','台儿庄区','37040000','0');");
E_D("replace into `engrave_area` values('37040600','山亭区','37040000','0');");
E_D("replace into `engrave_area` values('37048100','滕州市','37040000','0');");
E_D("replace into `engrave_area` values('37050000','东营市','37000000','0');");
E_D("replace into `engrave_area` values('37050100','市辖区','37050000','0');");
E_D("replace into `engrave_area` values('37050200','东营区','37050000','0');");
E_D("replace into `engrave_area` values('37050300','河口区','37050000','0');");
E_D("replace into `engrave_area` values('37052100','垦利县','37050000','0');");
E_D("replace into `engrave_area` values('37052200','利津县','37050000','0');");
E_D("replace into `engrave_area` values('37052300','广饶县','37050000','0');");
E_D("replace into `engrave_area` values('37060000','烟台市','37000000','0');");
E_D("replace into `engrave_area` values('37060100','市辖区','37060000','0');");
E_D("replace into `engrave_area` values('37060200','芝罘区','37060000','0');");
E_D("replace into `engrave_area` values('37061100','福山区','37060000','0');");
E_D("replace into `engrave_area` values('37061200','牟平区','37060000','0');");
E_D("replace into `engrave_area` values('37061300','莱山区','37060000','0');");
E_D("replace into `engrave_area` values('37063400','长岛县','37060000','0');");
E_D("replace into `engrave_area` values('37068100','龙口市','37060000','0');");
E_D("replace into `engrave_area` values('37068200','莱阳市','37060000','0');");
E_D("replace into `engrave_area` values('37068300','莱州市','37060000','0');");
E_D("replace into `engrave_area` values('37068400','蓬莱市','37060000','0');");
E_D("replace into `engrave_area` values('37068500','招远市','37060000','0');");
E_D("replace into `engrave_area` values('37068600','栖霞市','37060000','0');");
E_D("replace into `engrave_area` values('37068700','海阳市','37060000','0');");
E_D("replace into `engrave_area` values('37070000','潍坊市','37000000','0');");
E_D("replace into `engrave_area` values('37070100','市辖区','37070000','0');");
E_D("replace into `engrave_area` values('37070200','潍城区','37070000','0');");
E_D("replace into `engrave_area` values('37070300','寒亭区','37070000','0');");
E_D("replace into `engrave_area` values('37070400','坊子区','37070000','0');");
E_D("replace into `engrave_area` values('37070500','奎文区','37070000','0');");
E_D("replace into `engrave_area` values('37072400','临朐县','37070000','0');");
E_D("replace into `engrave_area` values('37072500','昌乐县','37070000','0');");
E_D("replace into `engrave_area` values('37078100','青州市','37070000','0');");
E_D("replace into `engrave_area` values('37078200','诸城市','37070000','0');");
E_D("replace into `engrave_area` values('37078300','寿光市','37070000','0');");
E_D("replace into `engrave_area` values('37078400','安丘市','37070000','0');");
E_D("replace into `engrave_area` values('37078500','高密市','37070000','0');");
E_D("replace into `engrave_area` values('37078600','昌邑市','37070000','0');");
E_D("replace into `engrave_area` values('37080000','济宁市','37000000','0');");
E_D("replace into `engrave_area` values('37080100','市辖区','37080000','0');");
E_D("replace into `engrave_area` values('37080200','市中区','37080000','0');");
E_D("replace into `engrave_area` values('37081100','任城区','37080000','0');");
E_D("replace into `engrave_area` values('37082600','微山县','37080000','0');");
E_D("replace into `engrave_area` values('37082700','鱼台县','37080000','0');");
E_D("replace into `engrave_area` values('37082800','金乡县','37080000','0');");
E_D("replace into `engrave_area` values('37082900','嘉祥县','37080000','0');");
E_D("replace into `engrave_area` values('37083000','汶上县','37080000','0');");
E_D("replace into `engrave_area` values('37083100','泗水县','37080000','0');");
E_D("replace into `engrave_area` values('37083200','梁山县','37080000','0');");
E_D("replace into `engrave_area` values('37088100','曲阜市','37080000','0');");
E_D("replace into `engrave_area` values('37088200','兖州市','37080000','0');");
E_D("replace into `engrave_area` values('37088300','邹城市','37080000','0');");
E_D("replace into `engrave_area` values('37090000','泰安市','37000000','0');");
E_D("replace into `engrave_area` values('37090100','市辖区','37090000','0');");
E_D("replace into `engrave_area` values('37090200','泰山区','37090000','0');");
E_D("replace into `engrave_area` values('37091100','岱岳区 ','37090000','0');");
E_D("replace into `engrave_area` values('37092100','宁阳县','37090000','0');");
E_D("replace into `engrave_area` values('37092300','东平县','37090000','0');");
E_D("replace into `engrave_area` values('37098200','新泰市','37090000','0');");
E_D("replace into `engrave_area` values('37098300','肥城市','37090000','0');");
E_D("replace into `engrave_area` values('37100000','威海市','37000000','0');");
E_D("replace into `engrave_area` values('37100100','市辖区','37100000','0');");
E_D("replace into `engrave_area` values('37100200','环翠区','37100000','0');");
E_D("replace into `engrave_area` values('37108100','文登市','37100000','0');");
E_D("replace into `engrave_area` values('37108200','荣成市','37100000','0');");
E_D("replace into `engrave_area` values('37108300','乳山市','37100000','0');");
E_D("replace into `engrave_area` values('37110000','日照市','37000000','0');");
E_D("replace into `engrave_area` values('37110100','市辖区','37110000','0');");
E_D("replace into `engrave_area` values('37110200','东港区','37110000','0');");
E_D("replace into `engrave_area` values('37110300','岚山区','37110000','0');");
E_D("replace into `engrave_area` values('37112100','五莲县','37110000','0');");
E_D("replace into `engrave_area` values('37112200','莒县','37110000','0');");
E_D("replace into `engrave_area` values('37120000','莱芜市','37000000','0');");
E_D("replace into `engrave_area` values('37120100','市辖区','37120000','0');");
E_D("replace into `engrave_area` values('37120200','莱城区','37120000','0');");
E_D("replace into `engrave_area` values('37120300','钢城区','37120000','0');");
E_D("replace into `engrave_area` values('37130000','临沂市','37000000','0');");
E_D("replace into `engrave_area` values('37130100','市辖区','37130000','0');");
E_D("replace into `engrave_area` values('37130200','兰山区','37130000','0');");
E_D("replace into `engrave_area` values('37131100','罗庄区','37130000','0');");
E_D("replace into `engrave_area` values('37131200','河东区','37130000','0');");
E_D("replace into `engrave_area` values('37132100','沂南县','37130000','0');");
E_D("replace into `engrave_area` values('37132200','郯城县','37130000','0');");
E_D("replace into `engrave_area` values('37132300','沂水县','37130000','0');");
E_D("replace into `engrave_area` values('37132400','苍山县','37130000','0');");
E_D("replace into `engrave_area` values('37132500','费县','37130000','0');");
E_D("replace into `engrave_area` values('37132600','平邑县','37130000','0');");
E_D("replace into `engrave_area` values('37132700','莒南县','37130000','0');");
E_D("replace into `engrave_area` values('37132800','蒙阴县','37130000','0');");
E_D("replace into `engrave_area` values('37132900','临沭县','37130000','0');");
E_D("replace into `engrave_area` values('37140000','德州市','37000000','0');");
E_D("replace into `engrave_area` values('37140100','市辖区','37140000','0');");
E_D("replace into `engrave_area` values('37140200','德城区','37140000','0');");
E_D("replace into `engrave_area` values('37142100','陵县','37140000','0');");
E_D("replace into `engrave_area` values('37142200','宁津县','37140000','0');");
E_D("replace into `engrave_area` values('37142300','庆云县','37140000','0');");
E_D("replace into `engrave_area` values('37142400','临邑县','37140000','0');");
E_D("replace into `engrave_area` values('37142500','齐河县','37140000','0');");
E_D("replace into `engrave_area` values('37142600','平原县','37140000','0');");
E_D("replace into `engrave_area` values('37142700','夏津县','37140000','0');");
E_D("replace into `engrave_area` values('37142800','武城县','37140000','0');");
E_D("replace into `engrave_area` values('37148100','乐陵市','37140000','0');");
E_D("replace into `engrave_area` values('37148200','禹城市','37140000','0');");
E_D("replace into `engrave_area` values('37150000','聊城市','37000000','0');");
E_D("replace into `engrave_area` values('37150100','市辖区','37150000','0');");
E_D("replace into `engrave_area` values('37150200','东昌府区','37150000','0');");
E_D("replace into `engrave_area` values('37152100','阳谷县','37150000','0');");
E_D("replace into `engrave_area` values('37152200','莘县','37150000','0');");
E_D("replace into `engrave_area` values('37152300','茌平县','37150000','0');");
E_D("replace into `engrave_area` values('37152400','东阿县','37150000','0');");
E_D("replace into `engrave_area` values('37152500','冠县','37150000','0');");
E_D("replace into `engrave_area` values('37152600','高唐县','37150000','0');");
E_D("replace into `engrave_area` values('37158100','临清市','37150000','0');");
E_D("replace into `engrave_area` values('37160000','滨州市','37000000','0');");
E_D("replace into `engrave_area` values('37160100','市辖区','37160000','0');");
E_D("replace into `engrave_area` values('37160200','滨城区','37160000','0');");
E_D("replace into `engrave_area` values('37162100','惠民县','37160000','0');");
E_D("replace into `engrave_area` values('37162200','阳信县','37160000','0');");
E_D("replace into `engrave_area` values('37162300','无棣县','37160000','0');");
E_D("replace into `engrave_area` values('37162400','沾化县','37160000','0');");
E_D("replace into `engrave_area` values('37162500','博兴县','37160000','0');");
E_D("replace into `engrave_area` values('37162600','邹平县','37160000','0');");
E_D("replace into `engrave_area` values('37170000','菏泽市','37000000','0');");
E_D("replace into `engrave_area` values('37170100','市辖区','37170000','0');");
E_D("replace into `engrave_area` values('37170200','牡丹区','37170000','0');");
E_D("replace into `engrave_area` values('37172100','曹县','37170000','0');");
E_D("replace into `engrave_area` values('37172200','单县','37170000','0');");
E_D("replace into `engrave_area` values('37172300','成武县','37170000','0');");
E_D("replace into `engrave_area` values('37172400','巨野县','37170000','0');");
E_D("replace into `engrave_area` values('37172500','郓城县','37170000','0');");
E_D("replace into `engrave_area` values('37172600','鄄城县','37170000','0');");
E_D("replace into `engrave_area` values('37172700','定陶县','37170000','0');");
E_D("replace into `engrave_area` values('37172800','东明县','37170000','0');");
E_D("replace into `engrave_area` values('41000000','河南省','1','0');");
E_D("replace into `engrave_area` values('41010000','郑州市','41000000','0');");
E_D("replace into `engrave_area` values('41010100','市辖区','41010000','0');");
E_D("replace into `engrave_area` values('41010200','中原区','41010000','0');");
E_D("replace into `engrave_area` values('41010300','二七区','41010000','0');");
E_D("replace into `engrave_area` values('41010400','管城回族区','41010000','0');");
E_D("replace into `engrave_area` values('41010500','金水区','41010000','0');");
E_D("replace into `engrave_area` values('41010600','上街区','41010000','0');");
E_D("replace into `engrave_area` values('41010800','惠济区','41010000','0');");
E_D("replace into `engrave_area` values('41012200','中牟县','41010000','0');");
E_D("replace into `engrave_area` values('41018100','巩义市','41010000','0');");
E_D("replace into `engrave_area` values('41018200','荥阳市','41010000','0');");
E_D("replace into `engrave_area` values('41018300','新密市','41010000','0');");
E_D("replace into `engrave_area` values('41018400','新郑市','41010000','0');");
E_D("replace into `engrave_area` values('41018500','登封市','41010000','0');");
E_D("replace into `engrave_area` values('41020000','开封市','41000000','0');");
E_D("replace into `engrave_area` values('41020100','市辖区','41020000','0');");
E_D("replace into `engrave_area` values('41020200','龙亭区','41020000','0');");
E_D("replace into `engrave_area` values('41020300','顺河回族区','41020000','0');");
E_D("replace into `engrave_area` values('41020400','鼓楼区','41020000','0');");
E_D("replace into `engrave_area` values('41020500','禹王台区','41020000','0');");
E_D("replace into `engrave_area` values('41021100','金明区','41020000','0');");
E_D("replace into `engrave_area` values('41022100','杞县','41020000','0');");
E_D("replace into `engrave_area` values('41022200','通许县','41020000','0');");
E_D("replace into `engrave_area` values('41022300','尉氏县','41020000','0');");
E_D("replace into `engrave_area` values('41022400','开封县','41020000','0');");
E_D("replace into `engrave_area` values('41022500','兰考县','41020000','0');");
E_D("replace into `engrave_area` values('41030000','洛阳市','41000000','0');");
E_D("replace into `engrave_area` values('41030100','市辖区','41030000','0');");
E_D("replace into `engrave_area` values('41030200','老城区','41030000','0');");
E_D("replace into `engrave_area` values('41030300','西工区','41030000','0');");
E_D("replace into `engrave_area` values('41030400','瀍河回族区 ','41030000','0');");
E_D("replace into `engrave_area` values('41030500','涧西区','41030000','0');");
E_D("replace into `engrave_area` values('41030600','吉利区','41030000','0');");
E_D("replace into `engrave_area` values('41031100','洛龙区 ','41030000','0');");
E_D("replace into `engrave_area` values('41032200','孟津县','41030000','0');");
E_D("replace into `engrave_area` values('41032300','新安县','41030000','0');");
E_D("replace into `engrave_area` values('41032400','栾川县','41030000','0');");
E_D("replace into `engrave_area` values('41032500','嵩县','41030000','0');");
E_D("replace into `engrave_area` values('41032600','汝阳县','41030000','0');");
E_D("replace into `engrave_area` values('41032700','宜阳县','41030000','0');");
E_D("replace into `engrave_area` values('41032800','洛宁县','41030000','0');");
E_D("replace into `engrave_area` values('41032900','伊川县','41030000','0');");
E_D("replace into `engrave_area` values('41038100','偃师市','41030000','0');");
E_D("replace into `engrave_area` values('41040000','平顶山市','41000000','0');");
E_D("replace into `engrave_area` values('41040100','市辖区','41040000','0');");
E_D("replace into `engrave_area` values('41040200','新华区','41040000','0');");
E_D("replace into `engrave_area` values('41040300','卫东区','41040000','0');");
E_D("replace into `engrave_area` values('41040400','石龙区','41040000','0');");
E_D("replace into `engrave_area` values('41041100','湛河区','41040000','0');");
E_D("replace into `engrave_area` values('41042100','宝丰县','41040000','0');");
E_D("replace into `engrave_area` values('41042200','叶县','41040000','0');");
E_D("replace into `engrave_area` values('41042300','鲁山县','41040000','0');");
E_D("replace into `engrave_area` values('41042500','郏县','41040000','0');");
E_D("replace into `engrave_area` values('41048100','舞钢市','41040000','0');");
E_D("replace into `engrave_area` values('41048200','汝州市','41040000','0');");
E_D("replace into `engrave_area` values('41050000','安阳市','41000000','0');");
E_D("replace into `engrave_area` values('41050100','市辖区','41050000','0');");
E_D("replace into `engrave_area` values('41050200','文峰区','41050000','0');");
E_D("replace into `engrave_area` values('41050300','北关区','41050000','0');");
E_D("replace into `engrave_area` values('41050500','殷都区','41050000','0');");
E_D("replace into `engrave_area` values('41050600','龙安区','41050000','0');");
E_D("replace into `engrave_area` values('41052200','安阳县','41050000','0');");
E_D("replace into `engrave_area` values('41052300','汤阴县','41050000','0');");
E_D("replace into `engrave_area` values('41052600','滑县','41050000','0');");
E_D("replace into `engrave_area` values('41052700','内黄县','41050000','0');");
E_D("replace into `engrave_area` values('41058100','林州市','41050000','0');");
E_D("replace into `engrave_area` values('41060000','鹤壁市','41000000','0');");
E_D("replace into `engrave_area` values('41060100','市辖区','41060000','0');");
E_D("replace into `engrave_area` values('41060200','鹤山区','41060000','0');");
E_D("replace into `engrave_area` values('41060300','山城区','41060000','0');");
E_D("replace into `engrave_area` values('41061100','淇滨区','41060000','0');");
E_D("replace into `engrave_area` values('41062100','浚县','41060000','0');");
E_D("replace into `engrave_area` values('41062200','淇县','41060000','0');");
E_D("replace into `engrave_area` values('41070000','新乡市','41000000','0');");
E_D("replace into `engrave_area` values('41070100','市辖区','41070000','0');");
E_D("replace into `engrave_area` values('41070200','红旗区','41070000','0');");
E_D("replace into `engrave_area` values('41070300','卫滨区','41070000','0');");
E_D("replace into `engrave_area` values('41070400','凤泉区','41070000','0');");
E_D("replace into `engrave_area` values('41071100','牧野区','41070000','0');");
E_D("replace into `engrave_area` values('41072100','新乡县','41070000','0');");
E_D("replace into `engrave_area` values('41072400','获嘉县','41070000','0');");
E_D("replace into `engrave_area` values('41072500','原阳县','41070000','0');");
E_D("replace into `engrave_area` values('41072600','延津县','41070000','0');");
E_D("replace into `engrave_area` values('41072700','封丘县','41070000','0');");
E_D("replace into `engrave_area` values('41072800','长垣县','41070000','0');");
E_D("replace into `engrave_area` values('41078100','卫辉市','41070000','0');");
E_D("replace into `engrave_area` values('41078200','辉县市','41070000','0');");
E_D("replace into `engrave_area` values('41080000','焦作市','41000000','0');");
E_D("replace into `engrave_area` values('41080100','市辖区','41080000','0');");
E_D("replace into `engrave_area` values('41080200','解放区','41080000','0');");
E_D("replace into `engrave_area` values('41080300','中站区','41080000','0');");
E_D("replace into `engrave_area` values('41080400','马村区','41080000','0');");
E_D("replace into `engrave_area` values('41081100','山阳区','41080000','0');");
E_D("replace into `engrave_area` values('41082100','修武县','41080000','0');");
E_D("replace into `engrave_area` values('41082200','博爱县','41080000','0');");
E_D("replace into `engrave_area` values('41082300','武陟县','41080000','0');");
E_D("replace into `engrave_area` values('41082500','温县','41080000','0');");
E_D("replace into `engrave_area` values('41088100','济源市','41080000','0');");
E_D("replace into `engrave_area` values('41088200','沁阳市','41080000','0');");
E_D("replace into `engrave_area` values('41088300','孟州市','41080000','0');");
E_D("replace into `engrave_area` values('41090000','濮阳市','41000000','0');");
E_D("replace into `engrave_area` values('41090100','市辖区','41090000','0');");
E_D("replace into `engrave_area` values('41090200','华龙区','41090000','0');");
E_D("replace into `engrave_area` values('41092200','清丰县','41090000','0');");
E_D("replace into `engrave_area` values('41092300','南乐县','41090000','0');");
E_D("replace into `engrave_area` values('41092600','范县','41090000','0');");
E_D("replace into `engrave_area` values('41092700','台前县','41090000','0');");
E_D("replace into `engrave_area` values('41092800','濮阳县','41090000','0');");
E_D("replace into `engrave_area` values('41100000','许昌市','41000000','0');");
E_D("replace into `engrave_area` values('41100100','市辖区','41100000','0');");
E_D("replace into `engrave_area` values('41100200','魏都区','41100000','0');");
E_D("replace into `engrave_area` values('41102300','许昌县','41100000','0');");
E_D("replace into `engrave_area` values('41102400','鄢陵县','41100000','0');");
E_D("replace into `engrave_area` values('41102500','襄城县','41100000','0');");
E_D("replace into `engrave_area` values('41108100','禹州市','41100000','0');");
E_D("replace into `engrave_area` values('41108200','长葛市','41100000','0');");
E_D("replace into `engrave_area` values('41110000','漯河市','41000000','0');");
E_D("replace into `engrave_area` values('41110100','市辖区','41110000','0');");
E_D("replace into `engrave_area` values('41110200','源汇区','41110000','0');");
E_D("replace into `engrave_area` values('41110300','郾城区','41110000','0');");
E_D("replace into `engrave_area` values('41110400','召陵区','41110000','0');");
E_D("replace into `engrave_area` values('41112100','舞阳县','41110000','0');");
E_D("replace into `engrave_area` values('41112200','临颍县','41110000','0');");
E_D("replace into `engrave_area` values('41120000','三门峡市','41000000','0');");
E_D("replace into `engrave_area` values('41120100','市辖区','41120000','0');");
E_D("replace into `engrave_area` values('41120200','湖滨区','41120000','0');");
E_D("replace into `engrave_area` values('41122100','渑池县','41120000','0');");
E_D("replace into `engrave_area` values('41122200','陕县','41120000','0');");
E_D("replace into `engrave_area` values('41122400','卢氏县','41120000','0');");
E_D("replace into `engrave_area` values('41128100','义马市','41120000','0');");
E_D("replace into `engrave_area` values('41128200','灵宝市','41120000','0');");
E_D("replace into `engrave_area` values('41130000','南阳市','41000000','0');");
E_D("replace into `engrave_area` values('41130100','市辖区','41130000','0');");
E_D("replace into `engrave_area` values('41130200','宛城区','41130000','0');");
E_D("replace into `engrave_area` values('41130300','卧龙区','41130000','0');");
E_D("replace into `engrave_area` values('41132100','南召县','41130000','0');");
E_D("replace into `engrave_area` values('41132200','方城县','41130000','0');");
E_D("replace into `engrave_area` values('41132300','西峡县','41130000','0');");
E_D("replace into `engrave_area` values('41132400','镇平县','41130000','0');");
E_D("replace into `engrave_area` values('41132500','内乡县','41130000','0');");
E_D("replace into `engrave_area` values('41132600','淅川县','41130000','0');");
E_D("replace into `engrave_area` values('41132700','社旗县','41130000','0');");
E_D("replace into `engrave_area` values('41132800','唐河县','41130000','0');");
E_D("replace into `engrave_area` values('41132900','新野县','41130000','0');");
E_D("replace into `engrave_area` values('41133000','桐柏县','41130000','0');");
E_D("replace into `engrave_area` values('41138100','邓州市','41130000','0');");
E_D("replace into `engrave_area` values('41140000','商丘市','41000000','0');");
E_D("replace into `engrave_area` values('41140100','市辖区','41140000','0');");
E_D("replace into `engrave_area` values('41140200','梁园区','41140000','0');");
E_D("replace into `engrave_area` values('41140300','睢阳区','41140000','0');");
E_D("replace into `engrave_area` values('41142100','民权县','41140000','0');");
E_D("replace into `engrave_area` values('41142200','睢县','41140000','0');");
E_D("replace into `engrave_area` values('41142300','宁陵县','41140000','0');");
E_D("replace into `engrave_area` values('41142400','柘城县','41140000','0');");
E_D("replace into `engrave_area` values('41142500','虞城县','41140000','0');");
E_D("replace into `engrave_area` values('41142600','夏邑县','41140000','0');");
E_D("replace into `engrave_area` values('41148100','永城市','41140000','0');");
E_D("replace into `engrave_area` values('41150000','信阳市','41000000','0');");
E_D("replace into `engrave_area` values('41150100','市辖区','41150000','0');");
E_D("replace into `engrave_area` values('41150200','浉河区','41150000','0');");
E_D("replace into `engrave_area` values('41150300','平桥区','41150000','0');");
E_D("replace into `engrave_area` values('41152100','罗山县','41150000','0');");
E_D("replace into `engrave_area` values('41152200','光山县','41150000','0');");
E_D("replace into `engrave_area` values('41152300','新县','41150000','0');");
E_D("replace into `engrave_area` values('41152400','商城县','41150000','0');");
E_D("replace into `engrave_area` values('41152500','固始县','41150000','0');");
E_D("replace into `engrave_area` values('41152600','潢川县','41150000','0');");
E_D("replace into `engrave_area` values('41152700','淮滨县','41150000','0');");
E_D("replace into `engrave_area` values('41152800','息县','41150000','0');");
E_D("replace into `engrave_area` values('41160000','周口市','41000000','0');");
E_D("replace into `engrave_area` values('41160100','市辖区','41160000','0');");
E_D("replace into `engrave_area` values('41160200','川汇区','41160000','0');");
E_D("replace into `engrave_area` values('41162100','扶沟县','41160000','0');");
E_D("replace into `engrave_area` values('41162200','西华县','41160000','0');");
E_D("replace into `engrave_area` values('41162300','商水县','41160000','0');");
E_D("replace into `engrave_area` values('41162400','沈丘县','41160000','0');");
E_D("replace into `engrave_area` values('41162500','郸城县','41160000','0');");
E_D("replace into `engrave_area` values('41162600','淮阳县','41160000','0');");
E_D("replace into `engrave_area` values('41162700','太康县','41160000','0');");
E_D("replace into `engrave_area` values('41162800','鹿邑县','41160000','0');");
E_D("replace into `engrave_area` values('41168100','项城市','41160000','0');");
E_D("replace into `engrave_area` values('41170000','驻马店市','41000000','0');");
E_D("replace into `engrave_area` values('41170100','市辖区','41170000','0');");
E_D("replace into `engrave_area` values('41170200','驿城区','41170000','0');");
E_D("replace into `engrave_area` values('41172100','西平县','41170000','0');");
E_D("replace into `engrave_area` values('41172200','上蔡县','41170000','0');");
E_D("replace into `engrave_area` values('41172300','平舆县','41170000','0');");
E_D("replace into `engrave_area` values('41172400','正阳县','41170000','0');");
E_D("replace into `engrave_area` values('41172500','确山县','41170000','0');");
E_D("replace into `engrave_area` values('41172600','泌阳县','41170000','0');");
E_D("replace into `engrave_area` values('41172700','汝南县','41170000','0');");
E_D("replace into `engrave_area` values('41172800','遂平县','41170000','0');");
E_D("replace into `engrave_area` values('41172900','新蔡县','41170000','0');");
E_D("replace into `engrave_area` values('42000000','湖北省','1','0');");
E_D("replace into `engrave_area` values('42010000','武汉市','42000000','0');");
E_D("replace into `engrave_area` values('42010100','市辖区','42010000','0');");
E_D("replace into `engrave_area` values('42010200','江岸区','42010000','0');");
E_D("replace into `engrave_area` values('42010300','江汉区','42010000','0');");
E_D("replace into `engrave_area` values('42010400','硚口区','42010000','0');");
E_D("replace into `engrave_area` values('42010500','汉阳区','42010000','0');");
E_D("replace into `engrave_area` values('42010600','武昌区','42010000','0');");
E_D("replace into `engrave_area` values('42010700','青山区','42010000','0');");
E_D("replace into `engrave_area` values('42011100','洪山区','42010000','0');");
E_D("replace into `engrave_area` values('42011200','东西湖区','42010000','0');");
E_D("replace into `engrave_area` values('42011300','汉南区','42010000','0');");
E_D("replace into `engrave_area` values('42011400','蔡甸区','42010000','0');");
E_D("replace into `engrave_area` values('42011500','江夏区','42010000','0');");
E_D("replace into `engrave_area` values('42011600','黄陂区','42010000','0');");
E_D("replace into `engrave_area` values('42011700','新洲区','42010000','0');");
E_D("replace into `engrave_area` values('42020000','黄石市','42000000','0');");
E_D("replace into `engrave_area` values('42020100','市辖区','42020000','0');");
E_D("replace into `engrave_area` values('42020200','黄石港区','42020000','0');");
E_D("replace into `engrave_area` values('42020300','西塞山区','42020000','0');");
E_D("replace into `engrave_area` values('42020400','下陆区','42020000','0');");
E_D("replace into `engrave_area` values('42020500','铁山区','42020000','0');");
E_D("replace into `engrave_area` values('42022200','阳新县','42020000','0');");
E_D("replace into `engrave_area` values('42028100','大冶市','42020000','0');");
E_D("replace into `engrave_area` values('42030000','十堰市','42000000','0');");
E_D("replace into `engrave_area` values('42030100','市辖区','42030000','0');");
E_D("replace into `engrave_area` values('42030200','茅箭区','42030000','0');");
E_D("replace into `engrave_area` values('42030300','张湾区','42030000','0');");
E_D("replace into `engrave_area` values('42032100','郧县','42030000','0');");
E_D("replace into `engrave_area` values('42032200','郧西县','42030000','0');");
E_D("replace into `engrave_area` values('42032300','竹山县','42030000','0');");
E_D("replace into `engrave_area` values('42032400','竹溪县','42030000','0');");
E_D("replace into `engrave_area` values('42032500','房县','42030000','0');");
E_D("replace into `engrave_area` values('42038100','丹江口市','42030000','0');");
E_D("replace into `engrave_area` values('42050000','宜昌市','42000000','0');");
E_D("replace into `engrave_area` values('42050100','市辖区','42050000','0');");
E_D("replace into `engrave_area` values('42050200','西陵区','42050000','0');");
E_D("replace into `engrave_area` values('42050300','伍家岗区','42050000','0');");
E_D("replace into `engrave_area` values('42050400','点军区','42050000','0');");
E_D("replace into `engrave_area` values('42050500','猇亭区','42050000','0');");
E_D("replace into `engrave_area` values('42050600','夷陵区','42050000','0');");
E_D("replace into `engrave_area` values('42052500','远安县','42050000','0');");
E_D("replace into `engrave_area` values('42052600','兴山县','42050000','0');");
E_D("replace into `engrave_area` values('42052700','秭归县','42050000','0');");
E_D("replace into `engrave_area` values('42052800','长阳土家族自治县','42050000','0');");
E_D("replace into `engrave_area` values('42052900','五峰土家族自治县','42050000','0');");
E_D("replace into `engrave_area` values('42058100','宜都市','42050000','0');");
E_D("replace into `engrave_area` values('42058200','当阳市','42050000','0');");
E_D("replace into `engrave_area` values('42058300','枝江市','42050000','0');");
E_D("replace into `engrave_area` values('42060000','襄樊市','42000000','0');");
E_D("replace into `engrave_area` values('42060100','市辖区','42060000','0');");
E_D("replace into `engrave_area` values('42060200','襄城区','42060000','0');");
E_D("replace into `engrave_area` values('42060600','樊城区','42060000','0');");
E_D("replace into `engrave_area` values('42060700','襄阳区','42060000','0');");
E_D("replace into `engrave_area` values('42062400','南漳县','42060000','0');");
E_D("replace into `engrave_area` values('42062500','谷城县','42060000','0');");
E_D("replace into `engrave_area` values('42062600','保康县','42060000','0');");
E_D("replace into `engrave_area` values('42068200','老河口市','42060000','0');");
E_D("replace into `engrave_area` values('42068300','枣阳市','42060000','0');");
E_D("replace into `engrave_area` values('42068400','宜城市','42060000','0');");
E_D("replace into `engrave_area` values('42070000','鄂州市','42000000','0');");
E_D("replace into `engrave_area` values('42070100','市辖区','42070000','0');");
E_D("replace into `engrave_area` values('42070200','梁子湖区','42070000','0');");
E_D("replace into `engrave_area` values('42070300','华容区','42070000','0');");
E_D("replace into `engrave_area` values('42070400','鄂城区','42070000','0');");
E_D("replace into `engrave_area` values('42080000','荆门市','42000000','0');");
E_D("replace into `engrave_area` values('42080100','市辖区','42080000','0');");
E_D("replace into `engrave_area` values('42080200','东宝区','42080000','0');");
E_D("replace into `engrave_area` values('42080400','掇刀区','42080000','0');");
E_D("replace into `engrave_area` values('42082100','京山县','42080000','0');");
E_D("replace into `engrave_area` values('42082200','沙洋县','42080000','0');");
E_D("replace into `engrave_area` values('42088100','钟祥市','42080000','0');");
E_D("replace into `engrave_area` values('42090000','孝感市','42000000','0');");
E_D("replace into `engrave_area` values('42090100','市辖区','42090000','0');");
E_D("replace into `engrave_area` values('42090200','孝南区','42090000','0');");
E_D("replace into `engrave_area` values('42092100','孝昌县','42090000','0');");
E_D("replace into `engrave_area` values('42092200','大悟县','42090000','0');");
E_D("replace into `engrave_area` values('42092300','云梦县','42090000','0');");
E_D("replace into `engrave_area` values('42098100','应城市','42090000','0');");
E_D("replace into `engrave_area` values('42098200','安陆市','42090000','0');");
E_D("replace into `engrave_area` values('42098400','汉川市','42090000','0');");
E_D("replace into `engrave_area` values('42100000','荆州市','42000000','0');");
E_D("replace into `engrave_area` values('42100100','市辖区','42100000','0');");
E_D("replace into `engrave_area` values('42100200','沙市区','42100000','0');");
E_D("replace into `engrave_area` values('42100300','荆州区','42100000','0');");
E_D("replace into `engrave_area` values('42102200','公安县','42100000','0');");
E_D("replace into `engrave_area` values('42102300','监利县','42100000','0');");
E_D("replace into `engrave_area` values('42102400','江陵县','42100000','0');");
E_D("replace into `engrave_area` values('42108100','石首市','42100000','0');");
E_D("replace into `engrave_area` values('42108300','洪湖市','42100000','0');");
E_D("replace into `engrave_area` values('42108700','松滋市','42100000','0');");
E_D("replace into `engrave_area` values('42110000','黄冈市','42000000','0');");
E_D("replace into `engrave_area` values('42110100','市辖区','42110000','0');");
E_D("replace into `engrave_area` values('42110200','黄州区','42110000','0');");
E_D("replace into `engrave_area` values('42112100','团风县','42110000','0');");
E_D("replace into `engrave_area` values('42112200','红安县','42110000','0');");
E_D("replace into `engrave_area` values('42112300','罗田县','42110000','0');");
E_D("replace into `engrave_area` values('42112400','英山县','42110000','0');");
E_D("replace into `engrave_area` values('42112500','浠水县','42110000','0');");
E_D("replace into `engrave_area` values('42112600','蕲春县','42110000','0');");
E_D("replace into `engrave_area` values('42112700','黄梅县','42110000','0');");
E_D("replace into `engrave_area` values('42118100','麻城市','42110000','0');");
E_D("replace into `engrave_area` values('42118200','武穴市','42110000','0');");
E_D("replace into `engrave_area` values('42120000','咸宁市','42000000','0');");
E_D("replace into `engrave_area` values('42120100','市辖区','42120000','0');");
E_D("replace into `engrave_area` values('42120200','咸安区','42120000','0');");
E_D("replace into `engrave_area` values('42122100','嘉鱼县','42120000','0');");
E_D("replace into `engrave_area` values('42122200','通城县','42120000','0');");
E_D("replace into `engrave_area` values('42122300','崇阳县','42120000','0');");
E_D("replace into `engrave_area` values('42122400','通山县','42120000','0');");
E_D("replace into `engrave_area` values('42128100','赤壁市','42120000','0');");
E_D("replace into `engrave_area` values('42130000','随州市','42000000','0');");
E_D("replace into `engrave_area` values('42130100','市辖区','42130000','0');");
E_D("replace into `engrave_area` values('42130200','曾都区','42130000','0');");
E_D("replace into `engrave_area` values('42138100','广水市','42130000','0');");
E_D("replace into `engrave_area` values('42280000','恩施土家族苗族自治州','42000000','0');");
E_D("replace into `engrave_area` values('42280100','恩施市','42280000','0');");
E_D("replace into `engrave_area` values('42280200','利川市','42280000','0');");
E_D("replace into `engrave_area` values('42282200','建始县','42280000','0');");
E_D("replace into `engrave_area` values('42282300','巴东县','42280000','0');");
E_D("replace into `engrave_area` values('42282500','宣恩县','42280000','0');");
E_D("replace into `engrave_area` values('42282600','咸丰县','42280000','0');");
E_D("replace into `engrave_area` values('42282700','来凤县','42280000','0');");
E_D("replace into `engrave_area` values('42282800','鹤峰县','42280000','0');");
E_D("replace into `engrave_area` values('42900000','省直辖县级行政单位 ','42000000','0');");
E_D("replace into `engrave_area` values('42900400','仙桃市','42900000','0');");
E_D("replace into `engrave_area` values('42900500','潜江市','42900000','0');");
E_D("replace into `engrave_area` values('42900600','天门市','42900000','0');");
E_D("replace into `engrave_area` values('42902100','神农架林区','42900000','0');");
E_D("replace into `engrave_area` values('43000000','湖南省','1','0');");
E_D("replace into `engrave_area` values('43010000','长沙市','43000000','0');");
E_D("replace into `engrave_area` values('43010100','市辖区','43010000','0');");
E_D("replace into `engrave_area` values('43010200','芙蓉区','43010000','0');");
E_D("replace into `engrave_area` values('43010300','天心区','43010000','0');");
E_D("replace into `engrave_area` values('43010400','岳麓区','43010000','0');");
E_D("replace into `engrave_area` values('43010500','开福区','43010000','0');");
E_D("replace into `engrave_area` values('43011100','雨花区','43010000','0');");
E_D("replace into `engrave_area` values('43012100','长沙县','43010000','0');");
E_D("replace into `engrave_area` values('43012200','望城县','43010000','0');");
E_D("replace into `engrave_area` values('43012400','宁乡县','43010000','0');");
E_D("replace into `engrave_area` values('43018100','浏阳市','43010000','0');");
E_D("replace into `engrave_area` values('43020000','株洲市','43000000','0');");
E_D("replace into `engrave_area` values('43020100','市辖区','43020000','0');");
E_D("replace into `engrave_area` values('43020200','荷塘区','43020000','0');");
E_D("replace into `engrave_area` values('43020300','芦淞区','43020000','0');");
E_D("replace into `engrave_area` values('43020400','石峰区','43020000','0');");
E_D("replace into `engrave_area` values('43021100','天元区','43020000','0');");
E_D("replace into `engrave_area` values('43022100','株洲县','43020000','0');");
E_D("replace into `engrave_area` values('43022300','攸县','43020000','0');");
E_D("replace into `engrave_area` values('43022400','茶陵县','43020000','0');");
E_D("replace into `engrave_area` values('43022500','炎陵县','43020000','0');");
E_D("replace into `engrave_area` values('43028100','醴陵市','43020000','0');");
E_D("replace into `engrave_area` values('43030000','湘潭市','43000000','0');");
E_D("replace into `engrave_area` values('43030100','市辖区','43030000','0');");
E_D("replace into `engrave_area` values('43030200','雨湖区','43030000','0');");
E_D("replace into `engrave_area` values('43030400','岳塘区','43030000','0');");
E_D("replace into `engrave_area` values('43032100','湘潭县','43030000','0');");
E_D("replace into `engrave_area` values('43038100','湘乡市','43030000','0');");
E_D("replace into `engrave_area` values('43038200','韶山市','43030000','0');");
E_D("replace into `engrave_area` values('43040000','衡阳市','43000000','0');");
E_D("replace into `engrave_area` values('43040100','市辖区','43040000','0');");
E_D("replace into `engrave_area` values('43040500','珠晖区','43040000','0');");
E_D("replace into `engrave_area` values('43040600','雁峰区','43040000','0');");
E_D("replace into `engrave_area` values('43040700','石鼓区','43040000','0');");
E_D("replace into `engrave_area` values('43040800','蒸湘区','43040000','0');");
E_D("replace into `engrave_area` values('43041200','南岳区','43040000','0');");
E_D("replace into `engrave_area` values('43042100','衡阳县','43040000','0');");
E_D("replace into `engrave_area` values('43042200','衡南县','43040000','0');");
E_D("replace into `engrave_area` values('43042300','衡山县','43040000','0');");
E_D("replace into `engrave_area` values('43042400','衡东县','43040000','0');");
E_D("replace into `engrave_area` values('43042600','祁东县','43040000','0');");
E_D("replace into `engrave_area` values('43048100','耒阳市','43040000','0');");
E_D("replace into `engrave_area` values('43048200','常宁市','43040000','0');");
E_D("replace into `engrave_area` values('43050000','邵阳市','43000000','0');");
E_D("replace into `engrave_area` values('43050100','市辖区','43050000','0');");
E_D("replace into `engrave_area` values('43050200','双清区','43050000','0');");
E_D("replace into `engrave_area` values('43050300','大祥区','43050000','0');");
E_D("replace into `engrave_area` values('43051100','北塔区','43050000','0');");
E_D("replace into `engrave_area` values('43052100','邵东县','43050000','0');");
E_D("replace into `engrave_area` values('43052200','新邵县','43050000','0');");
E_D("replace into `engrave_area` values('43052300','邵阳县','43050000','0');");
E_D("replace into `engrave_area` values('43052400','隆回县','43050000','0');");
E_D("replace into `engrave_area` values('43052500','洞口县','43050000','0');");
E_D("replace into `engrave_area` values('43052700','绥宁县','43050000','0');");
E_D("replace into `engrave_area` values('43052800','新宁县','43050000','0');");
E_D("replace into `engrave_area` values('43052900','城步苗族自治县','43050000','0');");
E_D("replace into `engrave_area` values('43058100','武冈市','43050000','0');");
E_D("replace into `engrave_area` values('43060000','岳阳市','43000000','0');");
E_D("replace into `engrave_area` values('43060100','市辖区','43060000','0');");
E_D("replace into `engrave_area` values('43060200','岳阳楼区','43060000','0');");
E_D("replace into `engrave_area` values('43060300','云溪区','43060000','0');");
E_D("replace into `engrave_area` values('43061100','君山区','43060000','0');");
E_D("replace into `engrave_area` values('43062100','岳阳县','43060000','0');");
E_D("replace into `engrave_area` values('43062300','华容县','43060000','0');");
E_D("replace into `engrave_area` values('43062400','湘阴县','43060000','0');");
E_D("replace into `engrave_area` values('43062600','平江县','43060000','0');");
E_D("replace into `engrave_area` values('43068100','汨罗市','43060000','0');");
E_D("replace into `engrave_area` values('43068200','临湘市','43060000','0');");
E_D("replace into `engrave_area` values('43070000','常德市','43000000','0');");
E_D("replace into `engrave_area` values('43070100','市辖区','43070000','0');");
E_D("replace into `engrave_area` values('43070200','武陵区','43070000','0');");
E_D("replace into `engrave_area` values('43070300','鼎城区','43070000','0');");
E_D("replace into `engrave_area` values('43072100','安乡县','43070000','0');");
E_D("replace into `engrave_area` values('43072200','汉寿县','43070000','0');");
E_D("replace into `engrave_area` values('43072300','澧县','43070000','0');");
E_D("replace into `engrave_area` values('43072400','临澧县','43070000','0');");
E_D("replace into `engrave_area` values('43072500','桃源县','43070000','0');");
E_D("replace into `engrave_area` values('43072600','石门县','43070000','0');");
E_D("replace into `engrave_area` values('43078100','津市市','43070000','0');");
E_D("replace into `engrave_area` values('43080000','张家界市','43000000','0');");
E_D("replace into `engrave_area` values('43080100','市辖区','43080000','0');");
E_D("replace into `engrave_area` values('43080200','永定区','43080000','0');");
E_D("replace into `engrave_area` values('43081100','武陵源区','43080000','0');");
E_D("replace into `engrave_area` values('43082100','慈利县','43080000','0');");
E_D("replace into `engrave_area` values('43082200','桑植县','43080000','0');");
E_D("replace into `engrave_area` values('43090000','益阳市','43000000','0');");
E_D("replace into `engrave_area` values('43090100','市辖区','43090000','0');");
E_D("replace into `engrave_area` values('43090200','资阳区','43090000','0');");
E_D("replace into `engrave_area` values('43090300','赫山区','43090000','0');");
E_D("replace into `engrave_area` values('43092100','南县','43090000','0');");
E_D("replace into `engrave_area` values('43092200','桃江县','43090000','0');");
E_D("replace into `engrave_area` values('43092300','安化县','43090000','0');");
E_D("replace into `engrave_area` values('43098100','沅江市','43090000','0');");
E_D("replace into `engrave_area` values('43100000','郴州市','43000000','0');");
E_D("replace into `engrave_area` values('43100100','市辖区','43100000','0');");
E_D("replace into `engrave_area` values('43100200','北湖区','43100000','0');");
E_D("replace into `engrave_area` values('43100300','苏仙区','43100000','0');");
E_D("replace into `engrave_area` values('43102100','桂阳县','43100000','0');");
E_D("replace into `engrave_area` values('43102200','宜章县','43100000','0');");
E_D("replace into `engrave_area` values('43102300','永兴县','43100000','0');");
E_D("replace into `engrave_area` values('43102400','嘉禾县','43100000','0');");
E_D("replace into `engrave_area` values('43102500','临武县','43100000','0');");
E_D("replace into `engrave_area` values('43102600','汝城县','43100000','0');");
E_D("replace into `engrave_area` values('43102700','桂东县','43100000','0');");
E_D("replace into `engrave_area` values('43102800','安仁县','43100000','0');");
E_D("replace into `engrave_area` values('43108100','资兴市','43100000','0');");
E_D("replace into `engrave_area` values('43110000','永州市','43000000','0');");
E_D("replace into `engrave_area` values('43110100','市辖区','43110000','0');");
E_D("replace into `engrave_area` values('43110200','零陵区','43110000','0');");
E_D("replace into `engrave_area` values('43110300','冷水滩区','43110000','0');");
E_D("replace into `engrave_area` values('43112100','祁阳县','43110000','0');");
E_D("replace into `engrave_area` values('43112200','东安县','43110000','0');");
E_D("replace into `engrave_area` values('43112300','双牌县','43110000','0');");
E_D("replace into `engrave_area` values('43112400','道县','43110000','0');");
E_D("replace into `engrave_area` values('43112500','江永县','43110000','0');");
E_D("replace into `engrave_area` values('43112600','宁远县','43110000','0');");
E_D("replace into `engrave_area` values('43112700','蓝山县','43110000','0');");
E_D("replace into `engrave_area` values('43112800','新田县','43110000','0');");
E_D("replace into `engrave_area` values('43112900','江华瑶族自治县','43110000','0');");
E_D("replace into `engrave_area` values('43120000','怀化市','43000000','0');");
E_D("replace into `engrave_area` values('43120100','市辖区','43120000','0');");
E_D("replace into `engrave_area` values('43120200','鹤城区','43120000','0');");
E_D("replace into `engrave_area` values('43122100','中方县','43120000','0');");
E_D("replace into `engrave_area` values('43122200','沅陵县','43120000','0');");
E_D("replace into `engrave_area` values('43122300','辰溪县','43120000','0');");
E_D("replace into `engrave_area` values('43122400','溆浦县','43120000','0');");
E_D("replace into `engrave_area` values('43122500','会同县','43120000','0');");
E_D("replace into `engrave_area` values('43122600','麻阳苗族自治县','43120000','0');");
E_D("replace into `engrave_area` values('43122700','新晃侗族自治县','43120000','0');");
E_D("replace into `engrave_area` values('43122800','芷江侗族自治县','43120000','0');");
E_D("replace into `engrave_area` values('43122900','靖州苗族侗族自治县','43120000','0');");
E_D("replace into `engrave_area` values('43123000','通道侗族自治县','43120000','0');");
E_D("replace into `engrave_area` values('43128100','洪江市','43120000','0');");
E_D("replace into `engrave_area` values('43130000','娄底市','43000000','0');");
E_D("replace into `engrave_area` values('43130100','市辖区','43130000','0');");
E_D("replace into `engrave_area` values('43130200','娄星区','43130000','0');");
E_D("replace into `engrave_area` values('43132100','双峰县','43130000','0');");
E_D("replace into `engrave_area` values('43132200','新化县','43130000','0');");
E_D("replace into `engrave_area` values('43138100','冷水江市','43130000','0');");
E_D("replace into `engrave_area` values('43138200','涟源市','43130000','0');");
E_D("replace into `engrave_area` values('43310000','湘西土家族苗族自治州','43000000','0');");
E_D("replace into `engrave_area` values('43310100','吉首市','43310000','0');");
E_D("replace into `engrave_area` values('43312200','泸溪县','43310000','0');");
E_D("replace into `engrave_area` values('43312300','凤凰县','43310000','0');");
E_D("replace into `engrave_area` values('43312400','花垣县','43310000','0');");
E_D("replace into `engrave_area` values('43312500','保靖县','43310000','0');");
E_D("replace into `engrave_area` values('43312600','古丈县','43310000','0');");
E_D("replace into `engrave_area` values('43312700','永顺县','43310000','0');");
E_D("replace into `engrave_area` values('43313000','龙山县','43310000','0');");
E_D("replace into `engrave_area` values('44000000','广东省','1','0');");
E_D("replace into `engrave_area` values('44010000','广州市','44000000','0');");
E_D("replace into `engrave_area` values('44010100','市辖区','44010000','0');");
E_D("replace into `engrave_area` values('44010300','荔湾区','44010000','0');");
E_D("replace into `engrave_area` values('44010400','越秀区','44010000','0');");
E_D("replace into `engrave_area` values('44010500','海珠区','44010000','0');");
E_D("replace into `engrave_area` values('44010600','天河区','44010000','0');");
E_D("replace into `engrave_area` values('44011100','白云区','44010000','0');");
E_D("replace into `engrave_area` values('44011200','黄埔区','44010000','0');");
E_D("replace into `engrave_area` values('44011300','番禺区','44010000','0');");
E_D("replace into `engrave_area` values('44011400','花都区','44010000','0');");
E_D("replace into `engrave_area` values('44011500','南沙区','44010000','0');");
E_D("replace into `engrave_area` values('44011600','萝岗区','44010000','0');");
E_D("replace into `engrave_area` values('44018300','增城市','44010000','0');");
E_D("replace into `engrave_area` values('44018400','从化市','44010000','0');");
E_D("replace into `engrave_area` values('44020000','韶关市','44000000','0');");
E_D("replace into `engrave_area` values('44020100','市辖区','44020000','0');");
E_D("replace into `engrave_area` values('44020300','武江区','44020000','0');");
E_D("replace into `engrave_area` values('44020400','浈江区','44020000','0');");
E_D("replace into `engrave_area` values('44020500','曲江区','44020000','0');");
E_D("replace into `engrave_area` values('44022200','始兴县','44020000','0');");
E_D("replace into `engrave_area` values('44022400','仁化县','44020000','0');");
E_D("replace into `engrave_area` values('44022900','翁源县','44020000','0');");
E_D("replace into `engrave_area` values('44023200','乳源瑶族自治县','44020000','0');");
E_D("replace into `engrave_area` values('44023300','新丰县','44020000','0');");
E_D("replace into `engrave_area` values('44028100','乐昌市','44020000','0');");
E_D("replace into `engrave_area` values('44028200','南雄市','44020000','0');");
E_D("replace into `engrave_area` values('44030000','深圳市','44000000','0');");
E_D("replace into `engrave_area` values('44030100','市辖区','44030000','0');");
E_D("replace into `engrave_area` values('44030300','罗湖区','44030000','0');");
E_D("replace into `engrave_area` values('44030400','福田区','44030000','0');");
E_D("replace into `engrave_area` values('44030500','南山区','44030000','0');");
E_D("replace into `engrave_area` values('44030600','宝安区','44030000','0');");
E_D("replace into `engrave_area` values('44030700','龙岗区','44030000','0');");
E_D("replace into `engrave_area` values('44030800','盐田区','44030000','0');");
E_D("replace into `engrave_area` values('44040000','珠海市','44000000','0');");
E_D("replace into `engrave_area` values('44040100','市辖区','44040000','0');");
E_D("replace into `engrave_area` values('44040200','香洲区','44040000','0');");
E_D("replace into `engrave_area` values('44040300','斗门区','44040000','0');");
E_D("replace into `engrave_area` values('44040400','金湾区','44040000','0');");
E_D("replace into `engrave_area` values('44050000','汕头市','44000000','0');");
E_D("replace into `engrave_area` values('44050100','市辖区','44050000','0');");
E_D("replace into `engrave_area` values('44050700','龙湖区','44050000','0');");
E_D("replace into `engrave_area` values('44051100','金平区','44050000','0');");
E_D("replace into `engrave_area` values('44051200','濠江区','44050000','0');");
E_D("replace into `engrave_area` values('44051300','潮阳区','44050000','0');");
E_D("replace into `engrave_area` values('44051400','潮南区','44050000','0');");
E_D("replace into `engrave_area` values('44051500','澄海区','44050000','0');");
E_D("replace into `engrave_area` values('44052300','南澳县','44050000','0');");
E_D("replace into `engrave_area` values('44060000','佛山市','44000000','0');");
E_D("replace into `engrave_area` values('44060100','市辖区','44060000','0');");
E_D("replace into `engrave_area` values('44060400','禅城区','44060000','0');");
E_D("replace into `engrave_area` values('44060500','南海区','44060000','0');");
E_D("replace into `engrave_area` values('44060600','顺德区','44060000','0');");
E_D("replace into `engrave_area` values('44060700','三水区','44060000','0');");
E_D("replace into `engrave_area` values('44060800','高明区','44060000','0');");
E_D("replace into `engrave_area` values('44070000','江门市','44000000','0');");
E_D("replace into `engrave_area` values('44070100','市辖区','44070000','0');");
E_D("replace into `engrave_area` values('44070300','蓬江区','44070000','0');");
E_D("replace into `engrave_area` values('44070400','江海区','44070000','0');");
E_D("replace into `engrave_area` values('44070500','新会区','44070000','0');");
E_D("replace into `engrave_area` values('44078100','台山市','44070000','0');");
E_D("replace into `engrave_area` values('44078300','开平市','44070000','0');");
E_D("replace into `engrave_area` values('44078400','鹤山市','44070000','0');");
E_D("replace into `engrave_area` values('44078500','恩平市','44070000','0');");
E_D("replace into `engrave_area` values('44080000','湛江市','44000000','0');");
E_D("replace into `engrave_area` values('44080100','市辖区','44080000','0');");
E_D("replace into `engrave_area` values('44080200','赤坎区','44080000','0');");
E_D("replace into `engrave_area` values('44080300','霞山区','44080000','0');");
E_D("replace into `engrave_area` values('44080400','坡头区','44080000','0');");
E_D("replace into `engrave_area` values('44081100','麻章区','44080000','0');");
E_D("replace into `engrave_area` values('44082300','遂溪县','44080000','0');");
E_D("replace into `engrave_area` values('44082500','徐闻县','44080000','0');");
E_D("replace into `engrave_area` values('44088100','廉江市','44080000','0');");
E_D("replace into `engrave_area` values('44088200','雷州市','44080000','0');");
E_D("replace into `engrave_area` values('44088300','吴川市','44080000','0');");
E_D("replace into `engrave_area` values('44090000','茂名市','44000000','0');");
E_D("replace into `engrave_area` values('44090100','市辖区','44090000','0');");
E_D("replace into `engrave_area` values('44090200','茂南区','44090000','0');");
E_D("replace into `engrave_area` values('44090300','茂港区','44090000','0');");
E_D("replace into `engrave_area` values('44092300','电白县','44090000','0');");
E_D("replace into `engrave_area` values('44098100','高州市','44090000','0');");
E_D("replace into `engrave_area` values('44098200','化州市','44090000','0');");
E_D("replace into `engrave_area` values('44098300','信宜市','44090000','0');");
E_D("replace into `engrave_area` values('44120000','肇庆市','44000000','0');");
E_D("replace into `engrave_area` values('44120100','市辖区','44120000','0');");
E_D("replace into `engrave_area` values('44120200','端州区','44120000','0');");
E_D("replace into `engrave_area` values('44120300','鼎湖区','44120000','0');");
E_D("replace into `engrave_area` values('44122300','广宁县','44120000','0');");
E_D("replace into `engrave_area` values('44122400','怀集县','44120000','0');");
E_D("replace into `engrave_area` values('44122500','封开县','44120000','0');");
E_D("replace into `engrave_area` values('44122600','德庆县','44120000','0');");
E_D("replace into `engrave_area` values('44128300','高要市','44120000','0');");
E_D("replace into `engrave_area` values('44128400','四会市','44120000','0');");
E_D("replace into `engrave_area` values('44130000','惠州市','44000000','0');");
E_D("replace into `engrave_area` values('44130100','市辖区','44130000','0');");
E_D("replace into `engrave_area` values('44130200','惠城区','44130000','0');");
E_D("replace into `engrave_area` values('44130300','惠阳区','44130000','0');");
E_D("replace into `engrave_area` values('44132200','博罗县','44130000','0');");
E_D("replace into `engrave_area` values('44132300','惠东县','44130000','0');");
E_D("replace into `engrave_area` values('44132400','龙门县','44130000','0');");
E_D("replace into `engrave_area` values('44140000','梅州市','44000000','0');");
E_D("replace into `engrave_area` values('44140100','市辖区','44140000','0');");
E_D("replace into `engrave_area` values('44140200','梅江区','44140000','0');");
E_D("replace into `engrave_area` values('44142100','梅县','44140000','0');");
E_D("replace into `engrave_area` values('44142200','大埔县','44140000','0');");
E_D("replace into `engrave_area` values('44142300','丰顺县','44140000','0');");
E_D("replace into `engrave_area` values('44142400','五华县','44140000','0');");
E_D("replace into `engrave_area` values('44142600','平远县','44140000','0');");
E_D("replace into `engrave_area` values('44142700','蕉岭县','44140000','0');");
E_D("replace into `engrave_area` values('44148100','兴宁市','44140000','0');");
E_D("replace into `engrave_area` values('44150000','汕尾市','44000000','0');");
E_D("replace into `engrave_area` values('44150100','市辖区','44150000','0');");
E_D("replace into `engrave_area` values('44150200','城区','44150000','0');");
E_D("replace into `engrave_area` values('44152100','海丰县','44150000','0');");
E_D("replace into `engrave_area` values('44152300','陆河县','44150000','0');");
E_D("replace into `engrave_area` values('44158100','陆丰市','44150000','0');");
E_D("replace into `engrave_area` values('44160000','河源市','44000000','0');");
E_D("replace into `engrave_area` values('44160100','市辖区','44160000','0');");
E_D("replace into `engrave_area` values('44160200','源城区','44160000','0');");
E_D("replace into `engrave_area` values('44162100','紫金县','44160000','0');");
E_D("replace into `engrave_area` values('44162200','龙川县','44160000','0');");
E_D("replace into `engrave_area` values('44162300','连平县','44160000','0');");
E_D("replace into `engrave_area` values('44162400','和平县','44160000','0');");
E_D("replace into `engrave_area` values('44162500','东源县','44160000','0');");
E_D("replace into `engrave_area` values('44170000','阳江市','44000000','0');");
E_D("replace into `engrave_area` values('44170100','市辖区','44170000','0');");
E_D("replace into `engrave_area` values('44170200','江城区','44170000','0');");
E_D("replace into `engrave_area` values('44172100','阳西县','44170000','0');");
E_D("replace into `engrave_area` values('44172300','阳东县','44170000','0');");
E_D("replace into `engrave_area` values('44178100','阳春市','44170000','0');");
E_D("replace into `engrave_area` values('44180000','清远市','44000000','0');");
E_D("replace into `engrave_area` values('44180100','市辖区','44180000','0');");
E_D("replace into `engrave_area` values('44180200','清城区','44180000','0');");
E_D("replace into `engrave_area` values('44182100','佛冈县','44180000','0');");
E_D("replace into `engrave_area` values('44182300','阳山县','44180000','0');");
E_D("replace into `engrave_area` values('44182500','连山壮族瑶族自治县','44180000','0');");
E_D("replace into `engrave_area` values('44182600','连南瑶族自治县','44180000','0');");
E_D("replace into `engrave_area` values('44182700','清新县','44180000','0');");
E_D("replace into `engrave_area` values('44188100','英德市','44180000','0');");
E_D("replace into `engrave_area` values('44188200','连州市','44180000','0');");
E_D("replace into `engrave_area` values('44190000','东莞市','44000000','0');");
E_D("replace into `engrave_area` values('44200000','中山市','44000000','0');");
E_D("replace into `engrave_area` values('44510000','潮州市','44000000','0');");
E_D("replace into `engrave_area` values('44510100','市辖区','44510000','0');");
E_D("replace into `engrave_area` values('44510200','湘桥区','44510000','0');");
E_D("replace into `engrave_area` values('44512100','潮安县','44510000','0');");
E_D("replace into `engrave_area` values('44512200','饶平县','44510000','0');");
E_D("replace into `engrave_area` values('44520000','揭阳市','44000000','0');");
E_D("replace into `engrave_area` values('44520100','市辖区','44520000','0');");
E_D("replace into `engrave_area` values('44520200','榕城区','44520000','0');");
E_D("replace into `engrave_area` values('44522100','揭东县','44520000','0');");
E_D("replace into `engrave_area` values('44522200','揭西县','44520000','0');");
E_D("replace into `engrave_area` values('44522400','惠来县','44520000','0');");
E_D("replace into `engrave_area` values('44528100','普宁市','44520000','0');");
E_D("replace into `engrave_area` values('44530000','云浮市','44000000','0');");
E_D("replace into `engrave_area` values('44530100','市辖区','44530000','0');");
E_D("replace into `engrave_area` values('44530200','云城区','44530000','0');");
E_D("replace into `engrave_area` values('44532100','新兴县','44530000','0');");
E_D("replace into `engrave_area` values('44532200','郁南县','44530000','0');");
E_D("replace into `engrave_area` values('44532300','云安县','44530000','0');");
E_D("replace into `engrave_area` values('44538100','罗定市','44530000','0');");
E_D("replace into `engrave_area` values('45000000','广西壮族自治区','1','0');");
E_D("replace into `engrave_area` values('45010000','南宁市','45000000','0');");
E_D("replace into `engrave_area` values('45010100','市辖区','45010000','0');");
E_D("replace into `engrave_area` values('45010200','兴宁区','45010000','0');");
E_D("replace into `engrave_area` values('45010300','青秀区','45010000','0');");
E_D("replace into `engrave_area` values('45010500','江南区','45010000','0');");
E_D("replace into `engrave_area` values('45010700','西乡塘区','45010000','0');");
E_D("replace into `engrave_area` values('45010800','良庆区','45010000','0');");
E_D("replace into `engrave_area` values('45010900','邕宁区','45010000','0');");
E_D("replace into `engrave_area` values('45012200','武鸣县','45010000','0');");
E_D("replace into `engrave_area` values('45012300','隆安县','45010000','0');");
E_D("replace into `engrave_area` values('45012400','马山县','45010000','0');");
E_D("replace into `engrave_area` values('45012500','上林县','45010000','0');");
E_D("replace into `engrave_area` values('45012600','宾阳县','45010000','0');");
E_D("replace into `engrave_area` values('45012700','横县','45010000','0');");
E_D("replace into `engrave_area` values('45020000','柳州市','45000000','0');");
E_D("replace into `engrave_area` values('45020100','市辖区','45020000','0');");
E_D("replace into `engrave_area` values('45020200','城中区','45020000','0');");
E_D("replace into `engrave_area` values('45020300','鱼峰区','45020000','0');");
E_D("replace into `engrave_area` values('45020400','柳南区','45020000','0');");
E_D("replace into `engrave_area` values('45020500','柳北区','45020000','0');");
E_D("replace into `engrave_area` values('45022100','柳江县','45020000','0');");
E_D("replace into `engrave_area` values('45022200','柳城县','45020000','0');");
E_D("replace into `engrave_area` values('45022300','鹿寨县','45020000','0');");
E_D("replace into `engrave_area` values('45022400','融安县','45020000','0');");
E_D("replace into `engrave_area` values('45022500','融水苗族自治县','45020000','0');");
E_D("replace into `engrave_area` values('45022600','三江侗族自治县','45020000','0');");
E_D("replace into `engrave_area` values('45030000','桂林市','45000000','0');");
E_D("replace into `engrave_area` values('45030100','市辖区','45030000','0');");
E_D("replace into `engrave_area` values('45030200','秀峰区','45030000','0');");
E_D("replace into `engrave_area` values('45030300','叠彩区','45030000','0');");
E_D("replace into `engrave_area` values('45030400','象山区','45030000','0');");
E_D("replace into `engrave_area` values('45030500','七星区','45030000','0');");
E_D("replace into `engrave_area` values('45031100','雁山区','45030000','0');");
E_D("replace into `engrave_area` values('45032100','阳朔县','45030000','0');");
E_D("replace into `engrave_area` values('45032200','临桂县','45030000','0');");
E_D("replace into `engrave_area` values('45032300','灵川县','45030000','0');");
E_D("replace into `engrave_area` values('45032400','全州县','45030000','0');");
E_D("replace into `engrave_area` values('45032500','兴安县','45030000','0');");
E_D("replace into `engrave_area` values('45032600','永福县','45030000','0');");
E_D("replace into `engrave_area` values('45032700','灌阳县','45030000','0');");
E_D("replace into `engrave_area` values('45032800','龙胜各族自治县','45030000','0');");
E_D("replace into `engrave_area` values('45032900','资源县','45030000','0');");
E_D("replace into `engrave_area` values('45033000','平乐县','45030000','0');");
E_D("replace into `engrave_area` values('45033100','荔蒲县','45030000','0');");
E_D("replace into `engrave_area` values('45033200','恭城瑶族自治县','45030000','0');");
E_D("replace into `engrave_area` values('45040000','梧州市','45000000','0');");
E_D("replace into `engrave_area` values('45040100','市辖区','45040000','0');");
E_D("replace into `engrave_area` values('45040300','万秀区','45040000','0');");
E_D("replace into `engrave_area` values('45040400','蝶山区','45040000','0');");
E_D("replace into `engrave_area` values('45040500','长洲区','45040000','0');");
E_D("replace into `engrave_area` values('45042100','苍梧县','45040000','0');");
E_D("replace into `engrave_area` values('45042200','藤县','45040000','0');");
E_D("replace into `engrave_area` values('45042300','蒙山县','45040000','0');");
E_D("replace into `engrave_area` values('45048100','岑溪市','45040000','0');");
E_D("replace into `engrave_area` values('45050000','北海市','45000000','0');");
E_D("replace into `engrave_area` values('45050100','市辖区','45050000','0');");
E_D("replace into `engrave_area` values('45050200','海城区','45050000','0');");
E_D("replace into `engrave_area` values('45050300','银海区','45050000','0');");
E_D("replace into `engrave_area` values('45051200','铁山港区','45050000','0');");
E_D("replace into `engrave_area` values('45052100','合浦县','45050000','0');");
E_D("replace into `engrave_area` values('45060000','防城港市','45000000','0');");
E_D("replace into `engrave_area` values('45060100','市辖区','45060000','0');");
E_D("replace into `engrave_area` values('45060200','港口区','45060000','0');");
E_D("replace into `engrave_area` values('45060300','防城区','45060000','0');");
E_D("replace into `engrave_area` values('45062100','上思县','45060000','0');");
E_D("replace into `engrave_area` values('45068100','东兴市','45060000','0');");
E_D("replace into `engrave_area` values('45070000','钦州市','45000000','0');");
E_D("replace into `engrave_area` values('45070100','市辖区','45070000','0');");
E_D("replace into `engrave_area` values('45070200','钦南区','45070000','0');");
E_D("replace into `engrave_area` values('45070300','钦北区','45070000','0');");
E_D("replace into `engrave_area` values('45072100','灵山县','45070000','0');");
E_D("replace into `engrave_area` values('45072200','浦北县','45070000','0');");
E_D("replace into `engrave_area` values('45080000','贵港市','45000000','0');");
E_D("replace into `engrave_area` values('45080100','市辖区','45080000','0');");
E_D("replace into `engrave_area` values('45080200','港北区','45080000','0');");
E_D("replace into `engrave_area` values('45080300','港南区','45080000','0');");
E_D("replace into `engrave_area` values('45080400','覃塘区','45080000','0');");
E_D("replace into `engrave_area` values('45082100','平南县','45080000','0');");
E_D("replace into `engrave_area` values('45088100','桂平市','45080000','0');");
E_D("replace into `engrave_area` values('45090000','玉林市','45000000','0');");
E_D("replace into `engrave_area` values('45090100','市辖区','45090000','0');");
E_D("replace into `engrave_area` values('45090200','玉州区','45090000','0');");
E_D("replace into `engrave_area` values('45092100','容县','45090000','0');");
E_D("replace into `engrave_area` values('45092200','陆川县','45090000','0');");
E_D("replace into `engrave_area` values('45092300','博白县','45090000','0');");
E_D("replace into `engrave_area` values('45092400','兴业县','45090000','0');");
E_D("replace into `engrave_area` values('45098100','北流市','45090000','0');");
E_D("replace into `engrave_area` values('45100000','百色市','45000000','0');");
E_D("replace into `engrave_area` values('45100100','市辖区','45100000','0');");
E_D("replace into `engrave_area` values('45100200','右江区','45100000','0');");
E_D("replace into `engrave_area` values('45102100','田阳县','45100000','0');");
E_D("replace into `engrave_area` values('45102200','田东县','45100000','0');");
E_D("replace into `engrave_area` values('45102300','平果县','45100000','0');");
E_D("replace into `engrave_area` values('45102400','德保县','45100000','0');");
E_D("replace into `engrave_area` values('45102500','靖西县','45100000','0');");
E_D("replace into `engrave_area` values('45102600','那坡县','45100000','0');");
E_D("replace into `engrave_area` values('45102700','凌云县','45100000','0');");
E_D("replace into `engrave_area` values('45102800','乐业县','45100000','0');");
E_D("replace into `engrave_area` values('45102900','田林县','45100000','0');");
E_D("replace into `engrave_area` values('45103000','西林县','45100000','0');");
E_D("replace into `engrave_area` values('45103100','隆林各族自治县','45100000','0');");
E_D("replace into `engrave_area` values('45110000','贺州市','45000000','0');");
E_D("replace into `engrave_area` values('45110100','市辖区','45110000','0');");
E_D("replace into `engrave_area` values('45110200','八步区','45110000','0');");
E_D("replace into `engrave_area` values('45112100','昭平县','45110000','0');");
E_D("replace into `engrave_area` values('45112200','钟山县','45110000','0');");
E_D("replace into `engrave_area` values('45112300','富川瑶族自治县','45110000','0');");
E_D("replace into `engrave_area` values('45120000','河池市','45000000','0');");
E_D("replace into `engrave_area` values('45120100','市辖区','45120000','0');");
E_D("replace into `engrave_area` values('45120200','金城江区','45120000','0');");
E_D("replace into `engrave_area` values('45122100','南丹县','45120000','0');");
E_D("replace into `engrave_area` values('45122200','天峨县','45120000','0');");
E_D("replace into `engrave_area` values('45122300','凤山县','45120000','0');");
E_D("replace into `engrave_area` values('45122400','东兰县','45120000','0');");
E_D("replace into `engrave_area` values('45122500','罗城仫佬族自治县','45120000','0');");
E_D("replace into `engrave_area` values('45122600','环江毛南族自治县','45120000','0');");
E_D("replace into `engrave_area` values('45122700','巴马瑶族自治县','45120000','0');");
E_D("replace into `engrave_area` values('45122800','都安瑶族自治县','45120000','0');");
E_D("replace into `engrave_area` values('45122900','大化瑶族自治县','45120000','0');");
E_D("replace into `engrave_area` values('45128100','宜州市','45120000','0');");
E_D("replace into `engrave_area` values('45130000','来宾市','45000000','0');");
E_D("replace into `engrave_area` values('45130100','市辖区','45130000','0');");
E_D("replace into `engrave_area` values('45130200','兴宾区','45130000','0');");
E_D("replace into `engrave_area` values('45132100','忻城县','45130000','0');");
E_D("replace into `engrave_area` values('45132200','象州县','45130000','0');");
E_D("replace into `engrave_area` values('45132300','武宣县','45130000','0');");
E_D("replace into `engrave_area` values('45132400','金秀瑶族自治县','45130000','0');");
E_D("replace into `engrave_area` values('45138100','合山市','45130000','0');");
E_D("replace into `engrave_area` values('45140000','崇左市','45000000','0');");
E_D("replace into `engrave_area` values('45140100','市辖区','45140000','0');");
E_D("replace into `engrave_area` values('45140200','江洲区','45140000','0');");
E_D("replace into `engrave_area` values('45142100','扶绥县','45140000','0');");
E_D("replace into `engrave_area` values('45142200','宁明县','45140000','0');");
E_D("replace into `engrave_area` values('45142300','龙州县','45140000','0');");
E_D("replace into `engrave_area` values('45142400','大新县','45140000','0');");
E_D("replace into `engrave_area` values('45142500','天等县','45140000','0');");
E_D("replace into `engrave_area` values('45148100','凭祥市','45140000','0');");
E_D("replace into `engrave_area` values('46000000','海南省','1','0');");
E_D("replace into `engrave_area` values('46010000','海口市','46000000','0');");
E_D("replace into `engrave_area` values('46010100','市辖区','46010000','0');");
E_D("replace into `engrave_area` values('46010500','秀英区','46010000','0');");
E_D("replace into `engrave_area` values('46010600','龙华区','46010000','0');");
E_D("replace into `engrave_area` values('46010700','琼山区','46010000','0');");
E_D("replace into `engrave_area` values('46010800','美兰区','46010000','0');");
E_D("replace into `engrave_area` values('46020000','三亚市','46000000','0');");
E_D("replace into `engrave_area` values('46020100','市辖区','46020000','0');");
E_D("replace into `engrave_area` values('46900000','省直辖县级行政单位','46000000','0');");
E_D("replace into `engrave_area` values('46900100','五指山市','46900000','0');");
E_D("replace into `engrave_area` values('46900200','琼海市','46900000','0');");
E_D("replace into `engrave_area` values('46900300','儋州市','46900000','0');");
E_D("replace into `engrave_area` values('46900500','文昌市','46900000','0');");
E_D("replace into `engrave_area` values('46900600','万宁市','46900000','0');");
E_D("replace into `engrave_area` values('46900700','东方市','46900000','0');");
E_D("replace into `engrave_area` values('46902100','定安县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902200','屯昌县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902300','澄迈县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902400','临高县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902500','白沙黎族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902600','昌江黎族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902700','乐东黎族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902800','陵水黎族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46902900','保亭黎族苗族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46903000','琼中黎族苗族自治县 ','46900000','0');");
E_D("replace into `engrave_area` values('46903100','西沙群岛 ','46900000','0');");
E_D("replace into `engrave_area` values('46903200','南沙群岛 ','46900000','0');");
E_D("replace into `engrave_area` values('46903300','中沙群岛的岛礁及其海域 ','46900000','0');");
E_D("replace into `engrave_area` values('50000000','重庆市','1','0');");
E_D("replace into `engrave_area` values('50010100','万州区','50000000','0');");
E_D("replace into `engrave_area` values('50010200','涪陵区','50000000','0');");
E_D("replace into `engrave_area` values('50010300','渝中区','50000000','0');");
E_D("replace into `engrave_area` values('50010400','大渡口区','50000000','0');");
E_D("replace into `engrave_area` values('50010500','江北区','50000000','0');");
E_D("replace into `engrave_area` values('50010600','沙坪坝区','50000000','0');");
E_D("replace into `engrave_area` values('50010700','九龙坡区','50000000','0');");
E_D("replace into `engrave_area` values('50010800','南岸区','50000000','0');");
E_D("replace into `engrave_area` values('50010900','北碚区','50000000','0');");
E_D("replace into `engrave_area` values('50011000','万盛区','50000000','0');");
E_D("replace into `engrave_area` values('50011100','双桥区','50000000','0');");
E_D("replace into `engrave_area` values('50011200','渝北区','50000000','0');");
E_D("replace into `engrave_area` values('50011300','巴南区','50000000','0');");
E_D("replace into `engrave_area` values('50011400','黔江区','50000000','0');");
E_D("replace into `engrave_area` values('50011500','长寿区','50000000','0');");
E_D("replace into `engrave_area` values('50011600','江津区','50000000','0');");
E_D("replace into `engrave_area` values('50011700','合川区','50000000','0');");
E_D("replace into `engrave_area` values('50011800','永川区','50000000','0');");
E_D("replace into `engrave_area` values('50011900','南川区','50000000','0');");
E_D("replace into `engrave_area` values('50022200','綦江县','50000000','0');");
E_D("replace into `engrave_area` values('50022300','潼南县','50000000','0');");
E_D("replace into `engrave_area` values('50022400','铜梁县','50000000','0');");
E_D("replace into `engrave_area` values('50022500','大足县','50000000','0');");
E_D("replace into `engrave_area` values('50022600','荣昌县','50000000','0');");
E_D("replace into `engrave_area` values('50022700','璧山县','50000000','0');");
E_D("replace into `engrave_area` values('50022800','梁平县','50000000','0');");
E_D("replace into `engrave_area` values('50022900','城口县','50000000','0');");
E_D("replace into `engrave_area` values('50023000','丰都县','50000000','0');");
E_D("replace into `engrave_area` values('50023100','垫江县','50000000','0');");
E_D("replace into `engrave_area` values('50023200','武隆县','50000000','0');");
E_D("replace into `engrave_area` values('50023300','忠县','50000000','0');");
E_D("replace into `engrave_area` values('50023400','开县','50000000','0');");
E_D("replace into `engrave_area` values('50023500','云阳县','50000000','0');");
E_D("replace into `engrave_area` values('50023600','奉节县','50000000','0');");
E_D("replace into `engrave_area` values('50023700','巫山县','50000000','0');");
E_D("replace into `engrave_area` values('50023800','巫溪县','50000000','0');");
E_D("replace into `engrave_area` values('50024000','石柱土家族自治县','50000000','0');");
E_D("replace into `engrave_area` values('50024100','秀山土家族苗族自治县','50000000','0');");
E_D("replace into `engrave_area` values('50024200','酉阳土家族苗族自治县','50000000','0');");
E_D("replace into `engrave_area` values('50024300','彭水苗族土家族自治县','50000000','0');");
E_D("replace into `engrave_area` values('51000000','四川省','1','0');");
E_D("replace into `engrave_area` values('51010000','成都市','51000000','0');");
E_D("replace into `engrave_area` values('51010100','市辖区','51010000','0');");
E_D("replace into `engrave_area` values('51010400','锦江区','51010000','0');");
E_D("replace into `engrave_area` values('51010500','青羊区','51010000','0');");
E_D("replace into `engrave_area` values('51010600','金牛区','51010000','0');");
E_D("replace into `engrave_area` values('51010700','武侯区','51010000','0');");
E_D("replace into `engrave_area` values('51010800','成华区','51010000','0');");
E_D("replace into `engrave_area` values('51011200','龙泉驿区','51010000','0');");
E_D("replace into `engrave_area` values('51011300','青白江区','51010000','0');");
E_D("replace into `engrave_area` values('51011400','新都区','51010000','0');");
E_D("replace into `engrave_area` values('51011500','温江区','51010000','0');");
E_D("replace into `engrave_area` values('51012100','金堂县','51010000','0');");
E_D("replace into `engrave_area` values('51012200','双流县','51010000','0');");
E_D("replace into `engrave_area` values('51012400','郫县','51010000','0');");
E_D("replace into `engrave_area` values('51012900','大邑县','51010000','0');");
E_D("replace into `engrave_area` values('51013100','蒲江县','51010000','0');");
E_D("replace into `engrave_area` values('51013200','新津县','51010000','0');");
E_D("replace into `engrave_area` values('51018100','都江堰市','51010000','0');");
E_D("replace into `engrave_area` values('51018200','彭州市','51010000','0');");
E_D("replace into `engrave_area` values('51018300','邛崃市','51010000','0');");
E_D("replace into `engrave_area` values('51018400','崇州市','51010000','0');");
E_D("replace into `engrave_area` values('51030000','自贡市','51000000','0');");
E_D("replace into `engrave_area` values('51030100','市辖区','51030000','0');");
E_D("replace into `engrave_area` values('51030200','自流井区','51030000','0');");
E_D("replace into `engrave_area` values('51030300','贡井区','51030000','0');");
E_D("replace into `engrave_area` values('51030400','大安区','51030000','0');");
E_D("replace into `engrave_area` values('51031100','沿滩区','51030000','0');");
E_D("replace into `engrave_area` values('51032100','荣县','51030000','0');");
E_D("replace into `engrave_area` values('51032200','富顺县','51030000','0');");
E_D("replace into `engrave_area` values('51040000','攀枝花市','51000000','0');");
E_D("replace into `engrave_area` values('51040100','市辖区','51040000','0');");
E_D("replace into `engrave_area` values('51040200','东区','51040000','0');");
E_D("replace into `engrave_area` values('51040300','西区','51040000','0');");
E_D("replace into `engrave_area` values('51041100','仁和区','51040000','0');");
E_D("replace into `engrave_area` values('51042100','米易县','51040000','0');");
E_D("replace into `engrave_area` values('51042200','盐边县','51040000','0');");
E_D("replace into `engrave_area` values('51050000','泸州市','51000000','0');");
E_D("replace into `engrave_area` values('51050100','市辖区','51050000','0');");
E_D("replace into `engrave_area` values('51050200','江阳区','51050000','0');");
E_D("replace into `engrave_area` values('51050300','纳溪区','51050000','0');");
E_D("replace into `engrave_area` values('51050400','龙马潭区','51050000','0');");
E_D("replace into `engrave_area` values('51052100','泸县','51050000','0');");
E_D("replace into `engrave_area` values('51052200','合江县','51050000','0');");
E_D("replace into `engrave_area` values('51052400','叙永县','51050000','0');");
E_D("replace into `engrave_area` values('51052500','古蔺县','51050000','0');");
E_D("replace into `engrave_area` values('51060000','德阳市','51000000','0');");
E_D("replace into `engrave_area` values('51060100','市辖区','51060000','0');");
E_D("replace into `engrave_area` values('51060300','旌阳区','51060000','0');");
E_D("replace into `engrave_area` values('51062300','中江县','51060000','0');");
E_D("replace into `engrave_area` values('51062600','罗江县','51060000','0');");
E_D("replace into `engrave_area` values('51068100','广汉市','51060000','0');");
E_D("replace into `engrave_area` values('51068200','什邡市','51060000','0');");
E_D("replace into `engrave_area` values('51068300','绵竹市','51060000','0');");
E_D("replace into `engrave_area` values('51070000','绵阳市','51000000','0');");
E_D("replace into `engrave_area` values('51070100','市辖区','51070000','0');");
E_D("replace into `engrave_area` values('51070300','涪城区','51070000','0');");
E_D("replace into `engrave_area` values('51070400','游仙区','51070000','0');");
E_D("replace into `engrave_area` values('51072200','三台县','51070000','0');");
E_D("replace into `engrave_area` values('51072300','盐亭县','51070000','0');");
E_D("replace into `engrave_area` values('51072400','安县','51070000','0');");
E_D("replace into `engrave_area` values('51072500','梓潼县','51070000','0');");
E_D("replace into `engrave_area` values('51072600','北川羌族自治县','51070000','0');");
E_D("replace into `engrave_area` values('51072700','平武县','51070000','0');");
E_D("replace into `engrave_area` values('51078100','江油市','51070000','0');");
E_D("replace into `engrave_area` values('51080000','广元市','51000000','0');");
E_D("replace into `engrave_area` values('51080100','市辖区','51080000','0');");
E_D("replace into `engrave_area` values('51080200','市中区','51080000','0');");
E_D("replace into `engrave_area` values('51081100','元坝区','51080000','0');");
E_D("replace into `engrave_area` values('51081200','朝天区','51080000','0');");
E_D("replace into `engrave_area` values('51082100','旺苍县','51080000','0');");
E_D("replace into `engrave_area` values('51082200','青川县','51080000','0');");
E_D("replace into `engrave_area` values('51082300','剑阁县','51080000','0');");
E_D("replace into `engrave_area` values('51082400','苍溪县','51080000','0');");
E_D("replace into `engrave_area` values('51090000','遂宁市','51000000','0');");
E_D("replace into `engrave_area` values('51090100','市辖区','51090000','0');");
E_D("replace into `engrave_area` values('51090300','船山区','51090000','0');");
E_D("replace into `engrave_area` values('51090400','安居区','51090000','0');");
E_D("replace into `engrave_area` values('51092100','蓬溪县','51090000','0');");
E_D("replace into `engrave_area` values('51092200','射洪县','51090000','0');");
E_D("replace into `engrave_area` values('51092300','大英县','51090000','0');");
E_D("replace into `engrave_area` values('51100000','内江市','51000000','0');");
E_D("replace into `engrave_area` values('51100100','市辖区','51100000','0');");
E_D("replace into `engrave_area` values('51100200','市中区','51100000','0');");
E_D("replace into `engrave_area` values('51101100','东兴区','51100000','0');");
E_D("replace into `engrave_area` values('51102400','威远县','51100000','0');");
E_D("replace into `engrave_area` values('51102500','资中县','51100000','0');");
E_D("replace into `engrave_area` values('51102800','隆昌县','51100000','0');");
E_D("replace into `engrave_area` values('51110000','乐山市','51000000','0');");
E_D("replace into `engrave_area` values('51110100','市辖区','51110000','0');");
E_D("replace into `engrave_area` values('51110200','市中区','51110000','0');");
E_D("replace into `engrave_area` values('51111100','沙湾区','51110000','0');");
E_D("replace into `engrave_area` values('51111200','五通桥区','51110000','0');");
E_D("replace into `engrave_area` values('51111300','金口河区','51110000','0');");
E_D("replace into `engrave_area` values('51112300','犍为县','51110000','0');");
E_D("replace into `engrave_area` values('51112400','井研县','51110000','0');");
E_D("replace into `engrave_area` values('51112600','夹江县','51110000','0');");
E_D("replace into `engrave_area` values('51112900','沐川县','51110000','0');");
E_D("replace into `engrave_area` values('51113200','峨边彝族自治县','51110000','0');");
E_D("replace into `engrave_area` values('51113300','马边彝族自治县','51110000','0');");
E_D("replace into `engrave_area` values('51118100','峨眉山市','51110000','0');");
E_D("replace into `engrave_area` values('51130000','南充市','51000000','0');");
E_D("replace into `engrave_area` values('51130100','市辖区','51130000','0');");
E_D("replace into `engrave_area` values('51130200','顺庆区','51130000','0');");
E_D("replace into `engrave_area` values('51130300','高坪区','51130000','0');");
E_D("replace into `engrave_area` values('51130400','嘉陵区','51130000','0');");
E_D("replace into `engrave_area` values('51132100','南部县','51130000','0');");
E_D("replace into `engrave_area` values('51132200','营山县','51130000','0');");
E_D("replace into `engrave_area` values('51132300','蓬安县','51130000','0');");
E_D("replace into `engrave_area` values('51132400','仪陇县','51130000','0');");
E_D("replace into `engrave_area` values('51132500','西充县','51130000','0');");
E_D("replace into `engrave_area` values('51138100','阆中市','51130000','0');");
E_D("replace into `engrave_area` values('51140000','眉山市','51000000','0');");
E_D("replace into `engrave_area` values('51140100','市辖区','51140000','0');");
E_D("replace into `engrave_area` values('51140200','东坡区','51140000','0');");
E_D("replace into `engrave_area` values('51142100','仁寿县','51140000','0');");
E_D("replace into `engrave_area` values('51142200','彭山县','51140000','0');");
E_D("replace into `engrave_area` values('51142300','洪雅县','51140000','0');");
E_D("replace into `engrave_area` values('51142400','丹棱县','51140000','0');");
E_D("replace into `engrave_area` values('51142500','青神县','51140000','0');");
E_D("replace into `engrave_area` values('51150000','宜宾市','51000000','0');");
E_D("replace into `engrave_area` values('51150100','市辖区','51150000','0');");
E_D("replace into `engrave_area` values('51150200','翠屏区','51150000','0');");
E_D("replace into `engrave_area` values('51152100','宜宾县','51150000','0');");
E_D("replace into `engrave_area` values('51152200','南溪县','51150000','0');");
E_D("replace into `engrave_area` values('51152300','江安县','51150000','0');");
E_D("replace into `engrave_area` values('51152400','长宁县','51150000','0');");
E_D("replace into `engrave_area` values('51152500','高县','51150000','0');");
E_D("replace into `engrave_area` values('51152600','珙县','51150000','0');");
E_D("replace into `engrave_area` values('51152700','筠连县','51150000','0');");
E_D("replace into `engrave_area` values('51152800','兴文县','51150000','0');");
E_D("replace into `engrave_area` values('51152900','屏山县','51150000','0');");
E_D("replace into `engrave_area` values('51160000','广安市','51000000','0');");
E_D("replace into `engrave_area` values('51160100','市辖区','51160000','0');");
E_D("replace into `engrave_area` values('51160200','广安区','51160000','0');");
E_D("replace into `engrave_area` values('51162100','岳池县','51160000','0');");
E_D("replace into `engrave_area` values('51162200','武胜县','51160000','0');");
E_D("replace into `engrave_area` values('51162300','邻水县','51160000','0');");
E_D("replace into `engrave_area` values('51168100','华蓥市','51160000','0');");
E_D("replace into `engrave_area` values('51170000','达州市','51000000','0');");
E_D("replace into `engrave_area` values('51170100','市辖区','51170000','0');");
E_D("replace into `engrave_area` values('51170200','通川区','51170000','0');");
E_D("replace into `engrave_area` values('51172100','达县','51170000','0');");
E_D("replace into `engrave_area` values('51172200','宣汉县','51170000','0');");
E_D("replace into `engrave_area` values('51172300','开江县','51170000','0');");
E_D("replace into `engrave_area` values('51172400','大竹县','51170000','0');");
E_D("replace into `engrave_area` values('51172500','渠县','51170000','0');");
E_D("replace into `engrave_area` values('51178100','万源市','51170000','0');");
E_D("replace into `engrave_area` values('51180000','雅安市','51000000','0');");
E_D("replace into `engrave_area` values('51180100','市辖区','51180000','0');");
E_D("replace into `engrave_area` values('51180200','雨城区','51180000','0');");
E_D("replace into `engrave_area` values('51182100','名山县','51180000','0');");
E_D("replace into `engrave_area` values('51182200','荥经县','51180000','0');");
E_D("replace into `engrave_area` values('51182300','汉源县','51180000','0');");
E_D("replace into `engrave_area` values('51182400','石棉县','51180000','0');");
E_D("replace into `engrave_area` values('51182500','天全县','51180000','0');");
E_D("replace into `engrave_area` values('51182600','芦山县','51180000','0');");
E_D("replace into `engrave_area` values('51182700','宝兴县','51180000','0');");
E_D("replace into `engrave_area` values('51190000','巴中市','51000000','0');");
E_D("replace into `engrave_area` values('51190100','市辖区','51190000','0');");
E_D("replace into `engrave_area` values('51190200','巴州区','51190000','0');");
E_D("replace into `engrave_area` values('51192100','通江县','51190000','0');");
E_D("replace into `engrave_area` values('51192200','南江县','51190000','0');");
E_D("replace into `engrave_area` values('51192300','平昌县','51190000','0');");
E_D("replace into `engrave_area` values('51200000','资阳市','51000000','0');");
E_D("replace into `engrave_area` values('51200100','市辖区','51200000','0');");
E_D("replace into `engrave_area` values('51200200','雁江区','51200000','0');");
E_D("replace into `engrave_area` values('51202100','安岳县','51200000','0');");
E_D("replace into `engrave_area` values('51202200','乐至县','51200000','0');");
E_D("replace into `engrave_area` values('51208100','简阳市','51200000','0');");
E_D("replace into `engrave_area` values('51320000','阿坝藏族羌族自治州','51000000','0');");
E_D("replace into `engrave_area` values('51322100','汶川县','51320000','0');");
E_D("replace into `engrave_area` values('51322200','理县','51320000','0');");
E_D("replace into `engrave_area` values('51322300','茂县','51320000','0');");
E_D("replace into `engrave_area` values('51322400','松潘县','51320000','0');");
E_D("replace into `engrave_area` values('51322500','九寨沟县','51320000','0');");
E_D("replace into `engrave_area` values('51322600','金川县','51320000','0');");
E_D("replace into `engrave_area` values('51322700','小金县','51320000','0');");
E_D("replace into `engrave_area` values('51322800','黑水县','51320000','0');");
E_D("replace into `engrave_area` values('51322900','马尔康县','51320000','0');");
E_D("replace into `engrave_area` values('51323000','壤塘县','51320000','0');");
E_D("replace into `engrave_area` values('51323100','阿坝县','51320000','0');");
E_D("replace into `engrave_area` values('51323200','若尔盖县','51320000','0');");
E_D("replace into `engrave_area` values('51323300','红原县','51320000','0');");
E_D("replace into `engrave_area` values('51330000','甘孜藏族自治州','51000000','0');");
E_D("replace into `engrave_area` values('51332100','康定县','51330000','0');");
E_D("replace into `engrave_area` values('51332200','泸定县','51330000','0');");
E_D("replace into `engrave_area` values('51332300','丹巴县','51330000','0');");
E_D("replace into `engrave_area` values('51332400','九龙县','51330000','0');");
E_D("replace into `engrave_area` values('51332500','雅江县','51330000','0');");
E_D("replace into `engrave_area` values('51332600','道孚县','51330000','0');");
E_D("replace into `engrave_area` values('51332700','炉霍县','51330000','0');");
E_D("replace into `engrave_area` values('51332800','甘孜县','51330000','0');");
E_D("replace into `engrave_area` values('51332900','新龙县','51330000','0');");
E_D("replace into `engrave_area` values('51333000','德格县','51330000','0');");
E_D("replace into `engrave_area` values('51333100','白玉县','51330000','0');");
E_D("replace into `engrave_area` values('51333200','石渠县','51330000','0');");
E_D("replace into `engrave_area` values('51333300','色达县','51330000','0');");
E_D("replace into `engrave_area` values('51333400','理塘县','51330000','0');");
E_D("replace into `engrave_area` values('51333500','巴塘县','51330000','0');");
E_D("replace into `engrave_area` values('51333600','乡城县','51330000','0');");
E_D("replace into `engrave_area` values('51333700','稻城县','51330000','0');");
E_D("replace into `engrave_area` values('51333800','得荣县','51330000','0');");
E_D("replace into `engrave_area` values('51340000','凉山彝族自治州','51000000','0');");
E_D("replace into `engrave_area` values('51340100','西昌市','51340000','0');");
E_D("replace into `engrave_area` values('51342200','木里藏族自治县','51340000','0');");
E_D("replace into `engrave_area` values('51342300','盐源县','51340000','0');");
E_D("replace into `engrave_area` values('51342400','德昌县','51340000','0');");
E_D("replace into `engrave_area` values('51342500','会理县','51340000','0');");
E_D("replace into `engrave_area` values('51342600','会东县','51340000','0');");
E_D("replace into `engrave_area` values('51342700','宁南县','51340000','0');");
E_D("replace into `engrave_area` values('51342800','普格县','51340000','0');");
E_D("replace into `engrave_area` values('51342900','布拖县','51340000','0');");
E_D("replace into `engrave_area` values('51343000','金阳县','51340000','0');");
E_D("replace into `engrave_area` values('51343100','昭觉县','51340000','0');");
E_D("replace into `engrave_area` values('51343200','喜德县','51340000','0');");
E_D("replace into `engrave_area` values('51343300','冕宁县','51340000','0');");
E_D("replace into `engrave_area` values('51343400','越西县','51340000','0');");
E_D("replace into `engrave_area` values('51343500','甘洛县','51340000','0');");
E_D("replace into `engrave_area` values('51343600','美姑县','51340000','0');");
E_D("replace into `engrave_area` values('51343700','雷波县','51340000','0');");
E_D("replace into `engrave_area` values('52000000','贵州省','1','0');");
E_D("replace into `engrave_area` values('52010000','贵阳市','52000000','0');");
E_D("replace into `engrave_area` values('52010100','市辖区','52010000','0');");
E_D("replace into `engrave_area` values('52010200','南明区','52010000','0');");
E_D("replace into `engrave_area` values('52010300','云岩区','52010000','0');");
E_D("replace into `engrave_area` values('52011100','花溪区','52010000','0');");
E_D("replace into `engrave_area` values('52011200','乌当区','52010000','0');");
E_D("replace into `engrave_area` values('52011300','白云区','52010000','0');");
E_D("replace into `engrave_area` values('52011400','小河区','52010000','0');");
E_D("replace into `engrave_area` values('52012100','开阳县','52010000','0');");
E_D("replace into `engrave_area` values('52012200','息烽县','52010000','0');");
E_D("replace into `engrave_area` values('52012300','修文县','52010000','0');");
E_D("replace into `engrave_area` values('52018100','清镇市','52010000','0');");
E_D("replace into `engrave_area` values('52020000','六盘水市','52000000','0');");
E_D("replace into `engrave_area` values('52020100','钟山区','52020000','0');");
E_D("replace into `engrave_area` values('52020300','六枝特区','52020000','0');");
E_D("replace into `engrave_area` values('52022100','水城县','52020000','0');");
E_D("replace into `engrave_area` values('52022200','盘县','52020000','0');");
E_D("replace into `engrave_area` values('52030000','遵义市','52000000','0');");
E_D("replace into `engrave_area` values('52030100','市辖区','52030000','0');");
E_D("replace into `engrave_area` values('52030200','红花岗区','52030000','0');");
E_D("replace into `engrave_area` values('52030300','汇川区','52030000','0');");
E_D("replace into `engrave_area` values('52032100','遵义县','52030000','0');");
E_D("replace into `engrave_area` values('52032200','桐梓县','52030000','0');");
E_D("replace into `engrave_area` values('52032300','绥阳县','52030000','0');");
E_D("replace into `engrave_area` values('52032400','正安县','52030000','0');");
E_D("replace into `engrave_area` values('52032500','道真仡佬族苗族自治县','52030000','0');");
E_D("replace into `engrave_area` values('52032600','务川仡佬族苗族自治县','52030000','0');");
E_D("replace into `engrave_area` values('52032700','凤冈县','52030000','0');");
E_D("replace into `engrave_area` values('52032800','湄潭县','52030000','0');");
E_D("replace into `engrave_area` values('52032900','余庆县','52030000','0');");
E_D("replace into `engrave_area` values('52033000','习水县','52030000','0');");
E_D("replace into `engrave_area` values('52038100','赤水市','52030000','0');");
E_D("replace into `engrave_area` values('52038200','仁怀市','52030000','0');");
E_D("replace into `engrave_area` values('52040000','安顺市','52000000','0');");
E_D("replace into `engrave_area` values('52040100','市辖区','52040000','0');");
E_D("replace into `engrave_area` values('52040200','西秀区','52040000','0');");
E_D("replace into `engrave_area` values('52042100','平坝县','52040000','0');");
E_D("replace into `engrave_area` values('52042200','普定县','52040000','0');");
E_D("replace into `engrave_area` values('52042300','镇宁布依族苗族自治县','52040000','0');");
E_D("replace into `engrave_area` values('52042400','关岭布依族苗族自治县','52040000','0');");
E_D("replace into `engrave_area` values('52042500','紫云苗族布依族自治县','52040000','0');");
E_D("replace into `engrave_area` values('52220000','铜仁地区','52000000','0');");
E_D("replace into `engrave_area` values('52220100','铜仁市','52220000','0');");
E_D("replace into `engrave_area` values('52222200','江口县','52220000','0');");
E_D("replace into `engrave_area` values('52222300','玉屏侗族自治县','52220000','0');");
E_D("replace into `engrave_area` values('52222400','石阡县','52220000','0');");
E_D("replace into `engrave_area` values('52222500','思南县','52220000','0');");
E_D("replace into `engrave_area` values('52222600','印江土家族苗族自治县','52220000','0');");
E_D("replace into `engrave_area` values('52222700','德江县','52220000','0');");
E_D("replace into `engrave_area` values('52222800','沿河土家族自治县','52220000','0');");
E_D("replace into `engrave_area` values('52222900','松桃苗族自治县','52220000','0');");
E_D("replace into `engrave_area` values('52223000','万山特区','52220000','0');");
E_D("replace into `engrave_area` values('52230000','黔西南布依族苗族自治州','52000000','0');");
E_D("replace into `engrave_area` values('52230100','兴义市','52230000','0');");
E_D("replace into `engrave_area` values('52232200','兴仁县','52230000','0');");
E_D("replace into `engrave_area` values('52232300','普安县','52230000','0');");
E_D("replace into `engrave_area` values('52232400','晴隆县','52230000','0');");
E_D("replace into `engrave_area` values('52232500','贞丰县','52230000','0');");
E_D("replace into `engrave_area` values('52232600','望谟县','52230000','0');");
E_D("replace into `engrave_area` values('52232700','册亨县','52230000','0');");
E_D("replace into `engrave_area` values('52232800','安龙县','52230000','0');");
E_D("replace into `engrave_area` values('52240000','毕节地区','52000000','0');");
E_D("replace into `engrave_area` values('52240100','毕节市','52240000','0');");
E_D("replace into `engrave_area` values('52242200','大方县','52240000','0');");
E_D("replace into `engrave_area` values('52242300','黔西县','52240000','0');");
E_D("replace into `engrave_area` values('52242400','金沙县','52240000','0');");
E_D("replace into `engrave_area` values('52242500','织金县','52240000','0');");
E_D("replace into `engrave_area` values('52242600','纳雍县','52240000','0');");
E_D("replace into `engrave_area` values('52242700','威宁彝族回族苗族自治县','52240000','0');");
E_D("replace into `engrave_area` values('52242800','赫章县','52240000','0');");
E_D("replace into `engrave_area` values('52260000','黔东南苗族侗族自治州','52000000','0');");
E_D("replace into `engrave_area` values('52260100','凯里市','52260000','0');");
E_D("replace into `engrave_area` values('52262200','黄平县','52260000','0');");
E_D("replace into `engrave_area` values('52262300','施秉县','52260000','0');");
E_D("replace into `engrave_area` values('52262400','三穗县','52260000','0');");
E_D("replace into `engrave_area` values('52262500','镇远县','52260000','0');");
E_D("replace into `engrave_area` values('52262600','岑巩县','52260000','0');");
E_D("replace into `engrave_area` values('52262700','天柱县','52260000','0');");
E_D("replace into `engrave_area` values('52262800','锦屏县','52260000','0');");
E_D("replace into `engrave_area` values('52262900','剑河县','52260000','0');");
E_D("replace into `engrave_area` values('52263000','台江县','52260000','0');");
E_D("replace into `engrave_area` values('52263100','黎平县','52260000','0');");
E_D("replace into `engrave_area` values('52263200','榕江县','52260000','0');");
E_D("replace into `engrave_area` values('52263300','从江县','52260000','0');");
E_D("replace into `engrave_area` values('52263400','雷山县','52260000','0');");
E_D("replace into `engrave_area` values('52263500','麻江县','52260000','0');");
E_D("replace into `engrave_area` values('52263600','丹寨县','52260000','0');");
E_D("replace into `engrave_area` values('52270000','黔南布依族苗族自治州','52000000','0');");
E_D("replace into `engrave_area` values('52270100','都匀市','52270000','0');");
E_D("replace into `engrave_area` values('52270200','福泉市','52270000','0');");
E_D("replace into `engrave_area` values('52272200','荔波县','52270000','0');");
E_D("replace into `engrave_area` values('52272300','贵定县','52270000','0');");
E_D("replace into `engrave_area` values('52272500','瓮安县','52270000','0');");
E_D("replace into `engrave_area` values('52272600','独山县','52270000','0');");
E_D("replace into `engrave_area` values('52272700','平塘县','52270000','0');");
E_D("replace into `engrave_area` values('52272800','罗甸县','52270000','0');");
E_D("replace into `engrave_area` values('52272900','长顺县','52270000','0');");
E_D("replace into `engrave_area` values('52273000','龙里县','52270000','0');");
E_D("replace into `engrave_area` values('52273100','惠水县','52270000','0');");
E_D("replace into `engrave_area` values('52273200','三都水族自治县','52270000','0');");
E_D("replace into `engrave_area` values('53000000','云南省','1','0');");
E_D("replace into `engrave_area` values('53010000','昆明市','53000000','0');");
E_D("replace into `engrave_area` values('53010100','市辖区','53010000','0');");
E_D("replace into `engrave_area` values('53010200','五华区','53010000','0');");
E_D("replace into `engrave_area` values('53010300','盘龙区','53010000','0');");
E_D("replace into `engrave_area` values('53011100','官渡区','53010000','0');");
E_D("replace into `engrave_area` values('53011200','西山区','53010000','0');");
E_D("replace into `engrave_area` values('53011300','东川区','53010000','0');");
E_D("replace into `engrave_area` values('53012100','呈贡县','53010000','0');");
E_D("replace into `engrave_area` values('53012200','晋宁县','53010000','0');");
E_D("replace into `engrave_area` values('53012400','富民县','53010000','0');");
E_D("replace into `engrave_area` values('53012500','宜良县','53010000','0');");
E_D("replace into `engrave_area` values('53012600','石林彝族自治县','53010000','0');");
E_D("replace into `engrave_area` values('53012700','嵩明县','53010000','0');");
E_D("replace into `engrave_area` values('53012800','禄劝彝族苗族自治县','53010000','0');");
E_D("replace into `engrave_area` values('53012900','寻甸回族彝族自治县','53010000','0');");
E_D("replace into `engrave_area` values('53018100','安宁市','53010000','0');");
E_D("replace into `engrave_area` values('53030000','曲靖市','53000000','0');");
E_D("replace into `engrave_area` values('53030100','市辖区','53030000','0');");
E_D("replace into `engrave_area` values('53030200','麒麟区','53030000','0');");
E_D("replace into `engrave_area` values('53032100','马龙县','53030000','0');");
E_D("replace into `engrave_area` values('53032200','陆良县','53030000','0');");
E_D("replace into `engrave_area` values('53032300','师宗县','53030000','0');");
E_D("replace into `engrave_area` values('53032400','罗平县','53030000','0');");
E_D("replace into `engrave_area` values('53032500','富源县','53030000','0');");
E_D("replace into `engrave_area` values('53032600','会泽县','53030000','0');");
E_D("replace into `engrave_area` values('53032800','沾益县','53030000','0');");
E_D("replace into `engrave_area` values('53038100','宣威市','53030000','0');");
E_D("replace into `engrave_area` values('53040000','玉溪市','53000000','0');");
E_D("replace into `engrave_area` values('53040100','市辖区','53040000','0');");
E_D("replace into `engrave_area` values('53040200','红塔区','53040000','0');");
E_D("replace into `engrave_area` values('53042100','江川县','53040000','0');");
E_D("replace into `engrave_area` values('53042200','澄江县','53040000','0');");
E_D("replace into `engrave_area` values('53042300','通海县','53040000','0');");
E_D("replace into `engrave_area` values('53042400','华宁县','53040000','0');");
E_D("replace into `engrave_area` values('53042500','易门县','53040000','0');");
E_D("replace into `engrave_area` values('53042600','峨山彝族自治县','53040000','0');");
E_D("replace into `engrave_area` values('53042700','新平彝族傣族自治县','53040000','0');");
E_D("replace into `engrave_area` values('53042800','元江哈尼族彝族傣族自治县','53040000','0');");
E_D("replace into `engrave_area` values('53050000','保山市','53000000','0');");
E_D("replace into `engrave_area` values('53050100','市辖区','53050000','0');");
E_D("replace into `engrave_area` values('53050200','隆阳区','53050000','0');");
E_D("replace into `engrave_area` values('53052100','施甸县','53050000','0');");
E_D("replace into `engrave_area` values('53052200','腾冲县','53050000','0');");
E_D("replace into `engrave_area` values('53052300','龙陵县','53050000','0');");
E_D("replace into `engrave_area` values('53052400','昌宁县','53050000','0');");
E_D("replace into `engrave_area` values('53060000','昭通市','53000000','0');");
E_D("replace into `engrave_area` values('53060100','市辖区','53060000','0');");
E_D("replace into `engrave_area` values('53060200','昭阳区','53060000','0');");
E_D("replace into `engrave_area` values('53062100','鲁甸县','53060000','0');");
E_D("replace into `engrave_area` values('53062200','巧家县','53060000','0');");
E_D("replace into `engrave_area` values('53062300','盐津县','53060000','0');");
E_D("replace into `engrave_area` values('53062400','大关县','53060000','0');");
E_D("replace into `engrave_area` values('53062500','永善县','53060000','0');");
E_D("replace into `engrave_area` values('53062600','绥江县','53060000','0');");
E_D("replace into `engrave_area` values('53062700','镇雄县','53060000','0');");
E_D("replace into `engrave_area` values('53062800','彝良县','53060000','0');");
E_D("replace into `engrave_area` values('53062900','威信县','53060000','0');");
E_D("replace into `engrave_area` values('53063000','水富县','53060000','0');");
E_D("replace into `engrave_area` values('53070000','丽江市','53000000','0');");
E_D("replace into `engrave_area` values('53070100','市辖区','53070000','0');");
E_D("replace into `engrave_area` values('53070200','古城区','53070000','0');");
E_D("replace into `engrave_area` values('53072100','玉龙纳西族自治县','53070000','0');");
E_D("replace into `engrave_area` values('53072200','永胜县','53070000','0');");
E_D("replace into `engrave_area` values('53072300','华坪县','53070000','0');");
E_D("replace into `engrave_area` values('53072400','宁蒗彝族自治县','53070000','0');");
E_D("replace into `engrave_area` values('53080000','普洱市(*)','53000000','0');");
E_D("replace into `engrave_area` values('53080100','市辖区','53080000','0');");
E_D("replace into `engrave_area` values('53080200','思茅区(*)','53080000','0');");
E_D("replace into `engrave_area` values('53082100','宁洱哈尼族彝族自治县(*)','53080000','0');");
E_D("replace into `engrave_area` values('53082200','墨江哈尼族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082300','景东彝族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082400','景谷傣族彝族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082500','镇沅彝族哈尼族拉祜族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082600','江城哈尼族彝族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082700','孟连傣族拉祜族佤族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082800','澜沧拉祜族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53082900','西盟佤族自治县','53080000','0');");
E_D("replace into `engrave_area` values('53090000','临沧市','53000000','0');");
E_D("replace into `engrave_area` values('53090100','市辖区','53090000','0');");
E_D("replace into `engrave_area` values('53090200','临翔区','53090000','0');");
E_D("replace into `engrave_area` values('53092100','凤庆县','53090000','0');");
E_D("replace into `engrave_area` values('53092200','云县','53090000','0');");
E_D("replace into `engrave_area` values('53092300','永德县','53090000','0');");
E_D("replace into `engrave_area` values('53092400','镇康县','53090000','0');");
E_D("replace into `engrave_area` values('53092500','双江拉祜族佤族布朗族傣族自治县','53090000','0');");
E_D("replace into `engrave_area` values('53092600','耿马傣族佤族自治县','53090000','0');");
E_D("replace into `engrave_area` values('53092700','沧源佤族自治县','53090000','0');");
E_D("replace into `engrave_area` values('53230000','楚雄彝族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53230100','楚雄市','53230000','0');");
E_D("replace into `engrave_area` values('53232200','双柏县','53230000','0');");
E_D("replace into `engrave_area` values('53232300','牟定县','53230000','0');");
E_D("replace into `engrave_area` values('53232400','南华县','53230000','0');");
E_D("replace into `engrave_area` values('53232500','姚安县','53230000','0');");
E_D("replace into `engrave_area` values('53232600','大姚县','53230000','0');");
E_D("replace into `engrave_area` values('53232700','永仁县','53230000','0');");
E_D("replace into `engrave_area` values('53232800','元谋县','53230000','0');");
E_D("replace into `engrave_area` values('53232900','武定县','53230000','0');");
E_D("replace into `engrave_area` values('53233100','禄丰县','53230000','0');");
E_D("replace into `engrave_area` values('53250000','红河哈尼族彝族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53250100','个旧市','53250000','0');");
E_D("replace into `engrave_area` values('53250200','开远市','53250000','0');");
E_D("replace into `engrave_area` values('53252200','蒙自县','53250000','0');");
E_D("replace into `engrave_area` values('53252300','屏边苗族自治县','53250000','0');");
E_D("replace into `engrave_area` values('53252400','建水县','53250000','0');");
E_D("replace into `engrave_area` values('53252500','石屏县','53250000','0');");
E_D("replace into `engrave_area` values('53252600','弥勒县','53250000','0');");
E_D("replace into `engrave_area` values('53252700','泸西县','53250000','0');");
E_D("replace into `engrave_area` values('53252800','元阳县','53250000','0');");
E_D("replace into `engrave_area` values('53252900','红河县','53250000','0');");
E_D("replace into `engrave_area` values('53253000','金平苗族瑶族傣族自治县','53250000','0');");
E_D("replace into `engrave_area` values('53253100','绿春县','53250000','0');");
E_D("replace into `engrave_area` values('53253200','河口瑶族自治县','53250000','0');");
E_D("replace into `engrave_area` values('53260000','文山壮族苗族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53262100','文山县','53260000','0');");
E_D("replace into `engrave_area` values('53262200','砚山县','53260000','0');");
E_D("replace into `engrave_area` values('53262300','西畴县','53260000','0');");
E_D("replace into `engrave_area` values('53262400','麻栗坡县','53260000','0');");
E_D("replace into `engrave_area` values('53262500','马关县','53260000','0');");
E_D("replace into `engrave_area` values('53262600','丘北县','53260000','0');");
E_D("replace into `engrave_area` values('53262700','广南县','53260000','0');");
E_D("replace into `engrave_area` values('53262800','富宁县','53260000','0');");
E_D("replace into `engrave_area` values('53280000','西双版纳傣族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53280100','景洪市','53280000','0');");
E_D("replace into `engrave_area` values('53282200','勐海县','53280000','0');");
E_D("replace into `engrave_area` values('53282300','勐腊县','53280000','0');");
E_D("replace into `engrave_area` values('53290000','大理白族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53290100','大理市','53290000','0');");
E_D("replace into `engrave_area` values('53292200','漾濞彝族自治县','53290000','0');");
E_D("replace into `engrave_area` values('53292300','祥云县','53290000','0');");
E_D("replace into `engrave_area` values('53292400','宾川县','53290000','0');");
E_D("replace into `engrave_area` values('53292500','弥渡县','53290000','0');");
E_D("replace into `engrave_area` values('53292600','南涧彝族自治县','53290000','0');");
E_D("replace into `engrave_area` values('53292700','巍山彝族回族自治县','53290000','0');");
E_D("replace into `engrave_area` values('53292800','永平县','53290000','0');");
E_D("replace into `engrave_area` values('53292900','云龙县','53290000','0');");
E_D("replace into `engrave_area` values('53293000','洱源县','53290000','0');");
E_D("replace into `engrave_area` values('53293100','剑川县','53290000','0');");
E_D("replace into `engrave_area` values('53293200','鹤庆县','53290000','0');");
E_D("replace into `engrave_area` values('53310000','德宏傣族景颇族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53310200','瑞丽市','53310000','0');");
E_D("replace into `engrave_area` values('53310300','潞西市','53310000','0');");
E_D("replace into `engrave_area` values('53312200','梁河县','53310000','0');");
E_D("replace into `engrave_area` values('53312300','盈江县','53310000','0');");
E_D("replace into `engrave_area` values('53312400','陇川县','53310000','0');");
E_D("replace into `engrave_area` values('53330000','怒江傈僳族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53332100','泸水县','53330000','0');");
E_D("replace into `engrave_area` values('53332300','福贡县','53330000','0');");
E_D("replace into `engrave_area` values('53332400','贡山独龙族怒族自治县','53330000','0');");
E_D("replace into `engrave_area` values('53332500','兰坪白族普米族自治县','53330000','0');");
E_D("replace into `engrave_area` values('53340000','迪庆藏族自治州','53000000','0');");
E_D("replace into `engrave_area` values('53342100','香格里拉县','53340000','0');");
E_D("replace into `engrave_area` values('53342200','德钦县','53340000','0');");
E_D("replace into `engrave_area` values('53342300','维西傈僳族自治县','53340000','0');");
E_D("replace into `engrave_area` values('54000000','西藏自治区','1','0');");
E_D("replace into `engrave_area` values('54010000','拉萨市','54000000','0');");
E_D("replace into `engrave_area` values('54010100','市辖区','54010000','0');");
E_D("replace into `engrave_area` values('54010200','城关区','54010000','0');");
E_D("replace into `engrave_area` values('54012100','林周县','54010000','0');");
E_D("replace into `engrave_area` values('54012200','当雄县','54010000','0');");
E_D("replace into `engrave_area` values('54012300','尼木县','54010000','0');");
E_D("replace into `engrave_area` values('54012400','曲水县','54010000','0');");
E_D("replace into `engrave_area` values('54012500','堆龙德庆县','54010000','0');");
E_D("replace into `engrave_area` values('54012600','达孜县','54010000','0');");
E_D("replace into `engrave_area` values('54012700','墨竹工卡县','54010000','0');");
E_D("replace into `engrave_area` values('54210000','昌都地区','54000000','0');");
E_D("replace into `engrave_area` values('54212100','昌都县','54210000','0');");
E_D("replace into `engrave_area` values('54212200','江达县','54210000','0');");
E_D("replace into `engrave_area` values('54212300','贡觉县','54210000','0');");
E_D("replace into `engrave_area` values('54212400','类乌齐县','54210000','0');");
E_D("replace into `engrave_area` values('54212500','丁青县','54210000','0');");
E_D("replace into `engrave_area` values('54212600','察雅县','54210000','0');");
E_D("replace into `engrave_area` values('54212700','八宿县','54210000','0');");
E_D("replace into `engrave_area` values('54212800','左贡县','54210000','0');");
E_D("replace into `engrave_area` values('54212900','芒康县','54210000','0');");
E_D("replace into `engrave_area` values('54213200','洛隆县','54210000','0');");
E_D("replace into `engrave_area` values('54213300','边坝县','54210000','0');");
E_D("replace into `engrave_area` values('54220000','山南地区','54000000','0');");
E_D("replace into `engrave_area` values('54222100','乃东县','54220000','0');");
E_D("replace into `engrave_area` values('54222200','扎囊县','54220000','0');");
E_D("replace into `engrave_area` values('54222300','贡嘎县','54220000','0');");
E_D("replace into `engrave_area` values('54222400','桑日县','54220000','0');");
E_D("replace into `engrave_area` values('54222500','琼结县','54220000','0');");
E_D("replace into `engrave_area` values('54222600','曲松县','54220000','0');");
E_D("replace into `engrave_area` values('54222700','措美县','54220000','0');");
E_D("replace into `engrave_area` values('54222800','洛扎县','54220000','0');");
E_D("replace into `engrave_area` values('54222900','加查县','54220000','0');");
E_D("replace into `engrave_area` values('54223100','隆子县','54220000','0');");
E_D("replace into `engrave_area` values('54223200','错那县','54220000','0');");
E_D("replace into `engrave_area` values('54223300','浪卡子县','54220000','0');");
E_D("replace into `engrave_area` values('54230000','日喀则地区','54000000','0');");
E_D("replace into `engrave_area` values('54230100','日喀则市','54230000','0');");
E_D("replace into `engrave_area` values('54232200','南木林县','54230000','0');");
E_D("replace into `engrave_area` values('54232300','江孜县','54230000','0');");
E_D("replace into `engrave_area` values('54232400','定日县','54230000','0');");
E_D("replace into `engrave_area` values('54232500','萨迦县','54230000','0');");
E_D("replace into `engrave_area` values('54232600','拉孜县','54230000','0');");
E_D("replace into `engrave_area` values('54232700','昂仁县','54230000','0');");
E_D("replace into `engrave_area` values('54232800','谢通门县','54230000','0');");
E_D("replace into `engrave_area` values('54232900','白朗县','54230000','0');");
E_D("replace into `engrave_area` values('54233000','仁布县','54230000','0');");
E_D("replace into `engrave_area` values('54233100','康马县','54230000','0');");
E_D("replace into `engrave_area` values('54233200','定结县','54230000','0');");
E_D("replace into `engrave_area` values('54233300','仲巴县','54230000','0');");
E_D("replace into `engrave_area` values('54233400','亚东县','54230000','0');");
E_D("replace into `engrave_area` values('54233500','吉隆县','54230000','0');");
E_D("replace into `engrave_area` values('54233600','聂拉木县','54230000','0');");
E_D("replace into `engrave_area` values('54233700','萨嘎县','54230000','0');");
E_D("replace into `engrave_area` values('54233800','岗巴县','54230000','0');");
E_D("replace into `engrave_area` values('54240000','那曲地区','54000000','0');");
E_D("replace into `engrave_area` values('54242100','那曲县','54240000','0');");
E_D("replace into `engrave_area` values('54242200','嘉黎县','54240000','0');");
E_D("replace into `engrave_area` values('54242300','比如县','54240000','0');");
E_D("replace into `engrave_area` values('54242400','聂荣县','54240000','0');");
E_D("replace into `engrave_area` values('54242500','安多县','54240000','0');");
E_D("replace into `engrave_area` values('54242600','申扎县','54240000','0');");
E_D("replace into `engrave_area` values('54242700','索县','54240000','0');");
E_D("replace into `engrave_area` values('54242800','班戈县','54240000','0');");
E_D("replace into `engrave_area` values('54242900','巴青县','54240000','0');");
E_D("replace into `engrave_area` values('54243000','尼玛县','54240000','0');");
E_D("replace into `engrave_area` values('54250000','阿里地区','54000000','0');");
E_D("replace into `engrave_area` values('54252100','普兰县','54250000','0');");
E_D("replace into `engrave_area` values('54252200','札达县','54250000','0');");
E_D("replace into `engrave_area` values('54252300','噶尔县','54250000','0');");
E_D("replace into `engrave_area` values('54252400','日土县','54250000','0');");
E_D("replace into `engrave_area` values('54252500','革吉县','54250000','0');");
E_D("replace into `engrave_area` values('54252600','改则县','54250000','0');");
E_D("replace into `engrave_area` values('54252700','措勤县','54250000','0');");
E_D("replace into `engrave_area` values('54260000','林芝地区','54000000','0');");
E_D("replace into `engrave_area` values('54262100','林芝县','54260000','0');");
E_D("replace into `engrave_area` values('54262200','工布江达县','54260000','0');");
E_D("replace into `engrave_area` values('54262300','米林县','54260000','0');");

require("../../inc/footer.php");
?>