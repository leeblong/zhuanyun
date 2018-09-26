<?php /** * ENGRAVE 数据访问：首页-文章管理 * =========================================================== * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。 * 网站地址: http://www.qdutsoft.com； * ---------------------------------------------------------- * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和 * 使用；不允许对程序代码以任何形式任何目的的再发布。 * ========================================================== * $Author: zhangxingpeng $ * $Id: lib_article.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $ *//** * 频道 * @param number $isdelete * @param string $conditions * @param unknown $channelName * @return multitype:unknown */function engrave_article_channel_list($isdelete=0, $conditions = '',$channelName,$recordcount){	//首先根据频道名称获取对应频道（频道名称的子频道）	$sql = "select c2.categoryid,c2.typename,c2.channellogo " .	" FROM " . $GLOBALS['engrave']->table('channel') .	" as c1 left join ". $GLOBALS['engrave']->table('channel') .	" as c2 " .	" on c1.categoryid=c2.parentid where c1.categoryid='4".	"' and c2.IsDelete = 0".		" order by c2.sortid";		$row = $GLOBALS['engrave_db']->getAll($sql);	//循环遍历频道，根据频道获取文章	$data = array();	for($i=0;$i<count($row);$i++)	{		$categoryid = $row[$i]['categoryid'];		$sql = "select CntId,CntCategoryId,CntTitle,CntContent,CntSubhead,CntOperatorName,".				"CntTitleImage,CntBriefIntroduction,CntTime,CntAuditingStatus " .				" FROM " . $GLOBALS['engrave']->table('article') .				" where CntIsDelete= ".$isdelete. " and CntCategoryId =".$categoryid.				" order by CntTime desc" .				" LIMIT 0,".$recordcount;		$data = array_merge($data,$GLOBALS['engrave_db']->getAll($sql));	}		return array('article_list'=>$data,'channel_list'=>$row);}/** * 获取文章列表：条件-未删除、自定义、频道名称 * @param number $isdelete * @param string $conditions * @param unknown $channelName * @return multitype:unknown string */function engrave_article_list($isdelete=0, $categoryid = 0, $parentid = 0,$channelName,$page=1,$recordcount=10){	$conditions='';	if($categoryid!=0)	{		$conditions = ($conditions . ' and a.categoryid = ' . $categoryid);	}	if($parentid!=0)	{		$conditions = ($conditions . ' and b.categoryid = ' . $parentid);	}	/*	$sql="select count(*) from " . $GLOBALS['engrave']->table('article').	" where CntIsDelete= ".$isdelete;	*/	$sql="select count(*)".			" from ".$GLOBALS['engrave']->table('channel') ."as a ".			" inner join ".$GLOBALS['engrave']->table('channel') ." as b ".			" on a.categoryid=b.parentid and a.IsDelete=0 ".			" inner join ".$GLOBALS['engrave']->table('article') ." on b.categoryid = CntCategoryId and CntIsDelete=0 ";	$count=$GLOBALS['engrave_db']->getOne($sql);	/*	$sql = "select CntId,CntCategoryId,CntTitle,CntSubhead,CntOperatorName,CntTime,CntAuditingStatus," .			"CntBriefIntroduction,CntContent,substring(date_format(CntTime,'%Y'),3) as CntTimeShortYear,".			"date_format(CntTime,'%Y') as CntTimeYear,".			"date_format(CntTime,'%m') as CntTimeMonth,CntTime ".			" FROM " . $GLOBALS['engrave']->table('article') .			" where CntIsDelete= ".$isdelete.$conditions.			" order by CntTime desc" .			" LIMIT ".($page-1)*$recordcount.",".$recordcount;	*/	$sql="select b.categoryid,b.abbreviation,b.typename,CntId,CntCategoryId,CntTitle,CntSubhead,CntOperatorName,CntTime,CntAuditingStatus," .			"CntBriefIntroduction,CntContent,substring(date_format(CntTime,'%Y'),3) as CntTimeShortYear,".			"date_format(CntTime,'%Y') as CntTimeYear,".			"date_format(CntTime,'%m') as CntTimeMonth,CntTime ".			" from ".$GLOBALS['engrave']->table('channel') ."as a ".			" left join ".$GLOBALS['engrave']->table('channel') ." as b ".			" on a.categoryid=b.parentid and a.IsDelete=0".			" left join ".$GLOBALS['engrave']->table('article') ." on b.categoryid = CntCategoryId and CntIsDelete=0 ".			" where 1=1 ".$conditions.			" order by CntTime desc" .			" LIMIT ".($page-1)*$recordcount.",".$recordcount;//echo $sql;	$row = $GLOBALS['engrave_db']->getAll($sql);		return array('article_list' => $row,'article_count'=>$count);}function engrave_article_single_cat_list($isdelete=0, $categoryid=0 , $page=1, $recordcount=10){    $conditions='';    if($categoryid!=0)    {        $conditions = ($conditions . ' and a.categoryid = ' . $categoryid);    }    /*    $sql="select count(*) from " . $GLOBALS['engrave']->table('article').    " where CntIsDelete= ".$isdelete;    */    $sql="select count(*)".        " from ".$GLOBALS['engrave']->table('channel') ."as a ".        " inner join ".$GLOBALS['engrave']->table('channel') ." as b ".        " on a.categoryid=b.parentid and a.IsDelete=0 ".        " inner join ".$GLOBALS['engrave']->table('article') ." on b.categoryid = CntCategoryId and CntIsDelete=0 ";    $count=$GLOBALS['engrave_db']->getOne($sql);    /*    $sql = "select CntId,CntCategoryId,CntTitle,CntSubhead,CntOperatorName,CntTime,CntAuditingStatus," .            "CntBriefIntroduction,CntContent,substring(date_format(CntTime,'%Y'),3) as CntTimeShortYear,".            "date_format(CntTime,'%Y') as CntTimeYear,".            "date_format(CntTime,'%m') as CntTimeMonth,CntTime ".            " FROM " . $GLOBALS['engrave']->table('article') .            " where CntIsDelete= ".$isdelete.$conditions.            " order by CntTime desc" .            " LIMIT ".($page-1)*$recordcount.",".$recordcount;    */    $sql="select  CntId,CntCategoryId,CntTitle,CntSubhead,CntOperatorName,CntTime,CntAuditingStatus," .        "CntBriefIntroduction,CntContent,substring(date_format(CntTime,'%Y'),3) as CntTimeShortYear,".        "date_format(CntTime,'%Y') as CntTimeYear,".        "date_format(CntTime,'%m') as CntTimeMonth,CntTime ".        " from ".$GLOBALS['engrave']->table('channel') ."as a ".//        " left join ".$GLOBALS['engrave']->table('channel') ." as b ".//        " on a.categoryid=b.parentid and a.IsDelete=0".     " left join ".$GLOBALS['engrave']->table('article') ." on a.categoryid = CntCategoryId and CntIsDelete=0 ".        " where 1=1 ".$conditions.        " order by CntTime desc" .        " LIMIT ".($page-1)*$recordcount.",".$recordcount;    //echo $sql;    $row = $GLOBALS['engrave_db']->getAll($sql);    return array('article_list' => $row,'article_count'=>$count);}?>