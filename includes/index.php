<?php 

/**
 * ENGRAVE 收据访问：首页
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: index.php 17217 2014年11月29日 11时03分00秒 zhangxingpeng $
 */

$str='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$rndstr;	//用来存放生成的随机字符串
for($i=0;$i<4;$i++)
{
	$rndcode=rand(0,25);
	$rndstr.=$str[$rndcode];
}

?>