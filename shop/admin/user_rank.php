<?php

/**
 * UTSOFT 会员等级管理程序
 * ============================================================================
 *版权所有
 * 网站地址:
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
  * $Author: zxp $
 * $Id: user_rank.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/*上传*/
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');
/*载入-用户等级-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user_rank.php');

$exc = new exchange($ecs->table("user_rank"), $db, 'rank_id', 'rank_name');
$exc_user = new exchange($ecs->table("users"), $db, 'user_rank', 'user_rank');

/*------------------------------------------------------ */
//-- 会员等级列表
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'list')
{
    $ranks = array();
    $ranks = $db->getAll("SELECT * FROM " .$ecs->table('user_rank'));

    $smarty->assign('ur_here',      $_LANG['03_user_rank_list']);
    $smarty->assign('action_link',  array('text' => $_LANG['add_user_rank'], 'href'=>'user_rank.php?act=add'));
    $smarty->assign('full_page',    1);

    $smarty->assign('user_ranks',   $ranks);

    assign_query_info();
    $smarty->display('user_rank.htm');
}

/*------------------------------------------------------ */
//-- 翻页，排序
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $ranks = array();
    $ranks = $db->getAll("SELECT * FROM " .$ecs->table('user_rank'));

    $smarty->assign('user_ranks',   $ranks);
    make_json_result($smarty->fetch('user_rank.htm'));
}

/*------------------------------------------------------ */
//-- 添加会员等级
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'add')
{
    admin_priv('user_rank');

    $rank['rank_id']      = 0;
    $rank['rank_special'] = 0;
    $rank['show_price']   = 1;
    $rank['min_points']   = 0;
    $rank['max_points']   = 0;
    $rank['discount']     = 100;

    $form_action          = 'insert';

    $smarty->assign('rank',        $rank);
    $smarty->assign('ur_here',     $_LANG['add_user_rank']);
    $smarty->assign('action_link', array('text' => $_LANG['03_user_rank_list'], 'href'=>'user_rank.php?act=list'));
    $smarty->assign('ur_here',     $_LANG['add_user_rank']);
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('user_rank_info.htm');
}

/*------------------------------------------------------ */
//-- 编辑会员等级
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'edit')
{
    admin_priv('user_rank');

	//根据等级ID获取等级
	$rank_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0 ;
	$rank = engrave_user_rank($rank_id);
    $smarty->assign('rank',        $rank);
    $smarty->assign('ur_here',     $_LANG['edit_user_rank']);
    $smarty->assign('action_link', array('text' => $_LANG['03_user_rank_list'], 'href'=>'user_rank.php?act=list'));
    $smarty->assign('ur_here',     $_LANG['edit_user_rank']);
    //编辑
    $form_action          = 'update';
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('user_rank_info.htm');
}

/*------------------------------------------------------ */
//-- 增加会员等级到数据库
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'insert' || $_REQUEST['act'] == 'update')
{
	$act = $_REQUEST['act'];
    admin_priv('user_rank');
    $user_rank['rank_name'] = isset($_POST['rank_name']) ? trim($_POST['rank_name']) : '';
    $user_rank['old_rank_name'] = isset($_POST['old_rank_name']) ? trim($_POST['old_rank_name']) : '';
    $special_rank =  isset($_POST['special_rank']) ? intval($_POST['special_rank']) : 0;
    $user_rank['special_rank'] = $special_rank;
    $user_rank['min_points'] = empty($_POST['min_points']) ? 0 : intval($_POST['min_points']);
    $user_rank['max_points'] = empty($_POST['max_points']) ? 0 : intval($_POST['max_points']);
    $user_rank['old_min_points'] = empty($_POST['old_min_points']) ? 0 : intval($_POST['old_min_points']);
    $user_rank['old_max_points'] = empty($_POST['old_max_points']) ? 0 : intval($_POST['old_max_points']);
    $user_rank['discount'] = empty($_POST['discount']) ? 0 : intval($_POST['discount']);
    $user_rank['show_price'] = empty($_POST['show_price']) ? 0 : intval($_POST['show_price']);
	//会员描述、颜色、图标、通知接收方式（邮件、短信、两者兼备）
	$user_rank['ur_desc'] = isset($_POST['ur_desc']) ? trim($_POST['ur_desc']) : '';
	$user_rank['ur_color'] = isset($_POST['ur_color']) ? trim($_POST['ur_color']) : '';
	$user_rank['ur_icon'] = isset($_POST['old_ur_icon']) ? $_POST['old_ur_icon'] : '';
	$user_rank['ur_notice'] = isset($_POST['ur_notice']) ? trim($_POST['ur_notice']) : '';
	
	if($act=="insert")
	{
	    /* 检查是否存在重名的会员等级 */
	    if (!$exc->is_only('rank_name', trim($_POST['rank_name'])))
	    {
	        sys_msg(sprintf($_LANG['rank_name_exists'], trim($_POST['rank_name'])), 1);
	    }

	    /* 非特殊会员组检查积分的上下限是否合理 */
	    if ($user_rank['min_points'] >= $user_rank['max_points'] && $special_rank == 0)
	    {
	        sys_msg($_LANG['js_languages']['integral_max_small'], 1);
	    }
	
	    /* 特殊等级会员组不判断积分限制 */
	    if ($special_rank == 0)
	    {
	        /* 检查下限制有无重复 */
	        if (!$exc->is_only('min_points', intval($user_rank['min_points'])))
	        {
	            sys_msg(sprintf($_LANG['integral_min_exists'], intval($_POST['min_points'])));
	        }
	    }
	
	    /* 特殊等级会员组不判断积分限制 */
	    if ($special_rank == 0)
	    {
	        /* 检查上限有无重复 */
	        if (!$exc->is_only('max_points', intval($user_rank['max_points'])))
	        {
	            sys_msg(sprintf($_LANG['integral_max_exists'], intval($_POST['max_points'])));
	        }
	    }
	}else {
		if($user_rank['old_rank_name'] != $user_rank['rank_name'])
		{
			/* 检查是否存在重名的会员等级 */
		    if (!$exc->is_only('rank_name', trim($_POST['rank_name'])))
		    {
		        sys_msg(sprintf($_LANG['rank_name_exists'], trim($_POST['rank_name'])), 1);
		    }
		}

		if($user_rank['old_min_points'] != $user_rank['min_points'])
		{
			/* 特殊等级会员组不判断积分限制 */
			if ($special_rank == 0)
			{
				/* 检查下限制有无重复 */
				if (!$exc->is_only('min_points', intval($user_rank['min_points'])))
				{
					sys_msg(sprintf($_LANG['integral_min_exists'], intval($_POST['min_points'])));
				}
			}
		}

		if($user_rank['old_max_points'] != $user_rank['max_points'])
		{
			/* 特殊等级会员组不判断积分限制 */
			if ($special_rank == 0)
			{
				/* 检查上限有无重复 */
				if (!$exc->is_only('max_points', intval($user_rank['max_points'])))
				{
					sys_msg(sprintf($_LANG['integral_max_exists'], intval($_POST['max_points'])));
				}
			}
		}
	}
	
    $upload=new FileUpload();
    foreach ($_FILES AS $code => $file)
    {
		$filename = $upload-> upload($file);
	    if($filename != 'error' && $filename != '')
	    {
		    $user_rank['ur_icon']=$filename;
	    }
    }
    $lnk[] = array('text' => $_LANG['back_list'],    'href'=>'user_rank.php?act=list');
    $lnk[] = array('text' => $_LANG['add_continue'], 'href'=>'user_rank.php?act=add');
	if($act=='insert')
	{
	    if(!engrave_user_rank_insert($user_rank))
	    {
	    	sys_msg($_LANG['add_rank_failed'], 0, $lnk);
	    }
	    /* 管理员日志 */
	    admin_log(trim($_POST['rank_name']), 'add', 'user_rank');
	    clear_cache_files();
    	sys_msg($_LANG['add_rank_success'], 0, $lnk);
	}
	else{
		$user_rank['rank_id'] = isset($_POST['id'])?intval($_POST['id']) : 0;
		if(!engrave_user_rank_update($user_rank))
		{
	    	sys_msg($_LANG['edit_rank_failed'], 0, $lnk);
		}
	    /* 管理员日志 */
	    admin_log(trim($_POST['rank_name']), 'edit', 'user_rank');
	    clear_cache_files();
    	sys_msg($_LANG['edit_rank_success'], 0, $lnk);
	}
}

/*------------------------------------------------------ */
//-- 删除会员等级
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    check_authz_json('user_rank');

    $rank_id = intval($_GET['id']);

    if ($exc->drop($rank_id))
    {
        /* 更新会员表的等级字段 */
        $exc_user->edit("user_rank = 0", $rank_id);

        $rank_name = $exc->get_name($rank_id);
        admin_log(addslashes($rank_name), 'remove', 'user_rank');
        clear_cache_files();
    }

    $url = 'user_rank.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;

}
/*
 *  编辑会员等级名称
 */
elseif ($_REQUEST['act'] == 'edit_name')
{
    $id = intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));
    check_authz_json('user_rank');
    if ($exc->is_only('rank_name', $val, $id))
    {
        if ($exc->edit("rank_name = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'user_rank');
            clear_cache_files();
            make_json_result(stripcslashes($val));
        }
        else
        {
            make_json_error($db->error());
        }
    }
    else
    {
        make_json_error(sprintf($_LANG['rank_name_exists'], htmlspecialchars($val)));
    }
}

/*
 *  ajax编辑积分下限
 */
elseif ($_REQUEST['act'] == 'edit_min_points')
{
    check_authz_json('user_rank');

    $rank_id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? 0 : intval($_REQUEST['val']);

    $rank = $db->getRow("SELECT max_points, special_rank FROM " . $ecs->table('user_rank') . " WHERE rank_id = '$rank_id'");
    if ($val >= $rank['max_points'] && $rank['special_rank'] == 0)
    {
        make_json_error($_LANG['js_languages']['integral_max_small']);
    }

    if ($rank['special_rank'] ==0 && !$exc->is_only('min_points', $val, $rank_id))
    {
        make_json_error(sprintf($_LANG['integral_min_exists'], $val));
    }

    if ($exc->edit("min_points = '$val'", $rank_id))
    {
        $rank_name = $exc->get_name($rank_id);
        admin_log(addslashes($rank_name), 'edit', 'user_rank');
        make_json_result($val);
    }
    else
    {
        make_json_error($db->error());
    }
}

/*
 *  ajax修改积分上限
 */
elseif ($_REQUEST['act'] == 'edit_max_points')
{
     check_authz_json('user_rank');

    $rank_id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? 0 : intval($_REQUEST['val']);

    $rank = $db->getRow("SELECT min_points, special_rank FROM " . $ecs->table('user_rank') . " WHERE rank_id = '$rank_id'");

    if ($val <= $rank['min_points'] && $rank['special_rank'] == 0)
    {
        make_json_error($_LANG['js_languages']['integral_max_small']);
    }

    if ($rank['special_rank'] ==0 && !$exc->is_only('max_points', $val, $rank_id))
    {
        make_json_error(sprintf($_LANG['integral_max_exists'], $val));
    }
    if ($exc->edit("max_points = '$val'", $rank_id))
    {
        $rank_name = $exc->get_name($rank_id);
        admin_log(addslashes($rank_name), 'edit', 'user_rank');
        make_json_result($val);
    }
    else
    {
        make_json_error($db->error());
    }
}

/*
 *  修改折扣率
 */
elseif ($_REQUEST['act'] == 'edit_discount')
{
    check_authz_json('user_rank');

    $rank_id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? 0 : intval($_REQUEST['val']);

    if ($val < 1 || $val > 100)
    {
        make_json_error($_LANG['js_languages']['discount_invalid']);
    }

    if ($exc->edit("discount = '$val'", $rank_id))
    {
        $rank_name = $exc->get_name($rank_id);
         admin_log(addslashes($rank_name), 'edit', 'user_rank');
         clear_cache_files();
         make_json_result($val);
    }
    else
    {
        make_json_error($val);
    }
}

/*------------------------------------------------------ */
//-- 切换是否是特殊会员组
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_special')
{
    check_authz_json('user_rank');

    $rank_id       = intval($_POST['id']);
    $is_special    = intval($_POST['val']);

    if ($exc->edit("special_rank = '$is_special'", $rank_id))
    {
        $rank_name = $exc->get_name($rank_id);
        admin_log(addslashes($rank_name), 'edit', 'user_rank');
        make_json_result($is_special);
    }
    else
    {
        make_json_error($db->error());
    }
}
/*------------------------------------------------------ */
//-- 切换是否显示价格
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_showprice')
{
    check_authz_json('user_rank');

    $rank_id       = intval($_POST['id']);
    $is_show    = intval($_POST['val']);

    if ($exc->edit("show_price = '$is_show'", $rank_id))
    {
        $rank_name = $exc->get_name($rank_id);
        admin_log(addslashes($rank_name), 'edit', 'user_rank');
        clear_cache_files();
        make_json_result($is_show);
    }
    else
    {
        make_json_error($db->error());
    }
}

?>