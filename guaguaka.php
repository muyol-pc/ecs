<?php
/**
 * Honrisen 会员中心
 * ============================================================================
 * * 版权所有 2005-2012 四川省恒立信软件有限公司，并保留所有权利。
 * 网站地址: http://www.honrisen.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
include_once(ROOT_PATH . 'includes/lib_transaction.php');

$user_id = $_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$action  = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'index';

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('user_name',$_SESSION['user_name']);
$smarty->assign('affiliate', $affiliate);
//$back_act='';


// var_dump($action);
//用户中心欢迎页
if ($action == 'index')
{
    $id = intval($_REQUEST['id']);
    if (empty($id)) {
        message('抱歉，参数错误！', '', 'error');
    }
    $reply = $db->getRow("SELECT * FROM " . $ecs->table('scratch_reply') . " WHERE id =". $id." ORDER BY `id` DESC");
    if ($reply == false) {
        message('', '抱歉，活动已经结束，下次再来吧！');
    }

        $fansID = $user_id;
        $from_user = $user_name;
    $fans = $db->getRow("SELECT * FROM " . $ecs->table('scratch_fans') . " WHERE rid = " . $id . " and fansID='" . $fansID . "' and from_user='" . $from_user . "'");

        if ($fans == false) {
            $insert = array(
                'rid' => $id,
                'fansID' => $fansID,
                'from_user' => $from_user,
                'todaynum' => 0,
                'totalnum' => 0,
                'awardnum' => 0,
                'createtime' => time(),
            );
            $temp = $db->autoExecute($ecs->table('scratch_fans'),$insert,"INSERT");
            if ($temp == false) {
                message('', '抱歉，操作数据失败！');
            }
            //增加人数，和浏览次数
            $db->autoExecute($ecs->table('scratch_reply'),array('fansnum' => $reply['fansnum'] + 1, 'viewnum' => $reply['viewnum'] + 1),"UPDATE",'id='. $reply['id']);
        } else {
            //增加浏览次数
            $db->autoExecute($ecs->table('scratch_reply'), array('viewnum' => $reply['viewnum'] + 1),"UPDATE",'id='. $reply['id']);
        }
        //判断是否获奖
    $condition="";
    if(!empty($fansID)){
        $condition = " and fansID='".$fansID."'";
    }
    if(!empty($from_user)){
        $condition= " and from_user='" . $from_user . "'";
    }
    $award = $db->getAll("SELECT * FROM " . $ecs->table('scratch_award') . " WHERE " ." rid = " . $id . $condition." order by id desc");
        if ($award != false) {
            $awardone = $award[0];
        }
        $running = true;
        //判断是否可以刮刮,判断积分
        if ($awardone) {
//            $running = false;
//todo
        }

        //判断用户抽奖次数
        $nowtime = mktime(0, 0, 0);
        if ($fans['last_time'] < $nowtime) {
            $fans['todaynum'] = 0;
        }
        //判断总次数超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
        if ($running && $reply['starttime'] > time()) {
            $running = false;
            $msg = '活动还没有开始呢！';
        }
        //判断总次数超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
        if ($running && $reply['endtime'] < time()) {
            $running = false;
            $msg = '活动已经结束了，下次再来吧！';
        }
        //判断总次数超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
        if ($running && $fans['totalnum'] >= $reply['number_times'] && $reply['number_times'] > 0) {
            $running = false;
            $msg = '您已经超过抽奖总限制次数，无法抽奖了!';
        }
        //判断当日是否超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
        if ($running && $fans['todaynum'] >= $reply['most_num_times'] && $reply['most_num_times'] > 0) {
            $running = false;
            $msg = '您已经超过今天的抽奖次数，明天再来吧!';
        }


    $cArr = array('one', 'two', 'three', 'four', 'five', 'six');
    $awardstr = '';
    foreach ($cArr as $c) {
        if (empty($reply['c_type_' . $c])) {
            break;
        }
        $awardstr.='<p>' . $reply['c_type_' . $c] . '：' . $reply['c_name_' . $c];
        if ($reply['show_num'] == 1) {
            $awardstr.='  奖品数量： ' . intval($reply['c_num_' . $c] - $reply['c_draw_' . $c]);
        }
        $awardstr.='</p>';
    }

    if ($reply['most_num_times'] > 0 && $reply['number_times'] > 0) {
        $detail = '本次活动共可以转' . $reply['number_times'] . '次，每天可以转 ' . intval($reply['most_num_times']) . ' 次! 你共已经转了 <span id="totalcount">' . intval($fans['totalnum']) . '</span> 次 ，今天转了<span id="count">' . intval($fans['todaynum']). '</span> 次.';
        $Tcount = $reply['most_num_times'];
        $Lcount = $reply['most_num_times'] - $fans['todaynum'];
    } elseif ($reply['most_num_times'] > 0) {
        $detail = '本次活动每天可以转 ' . $reply['most_num_times'] . ' 次卡!你共已经转了 <span id="totalcount">' . intval($fans['totalnum']) . '</span> 次 ，今天转了<span id="count">' . intval($fans['todaynum']) . '</span> 次.';
        $Tcount = $reply['most_num_times'];
        $Lcount = $reply['most_num_times'] - $fans['todaynum'];
    } elseif ($reply['number_times'] > 0) {
        $detail = '本次活动共可以转' . $reply['number_times'] . '次卡!你共已经转了 <span id="totalcount">' . intval($fans['totalnum']) . '</span> 次。';
        $Tcount = $reply['number_times'];
        $Lcount = $reply['number_times'] - $fans['totalnum'];
    } else {
        $detail = '您很幸运，本次活动没有任何限制，您可以随意转!你共已经转了 <span id="totalcount">' . intval($fans['totalnum']) . '</span> 次。';
        $Tcount = 10000;
        $Lcount = 10000;
    }

    $detail .=  htmlspecialchars_decode($reply['content']);
    if (empty($reply['sn_rename'])) {
        $reply['sn_rename'] = 'SN码';
    }
    if (empty($reply['tel_rename'])) {
        $reply['tel_rename'] = '手机号';
    }
    if (empty($reply['repeat_lottery_reply'])) {
        $reply['repeat_lottery_reply'] = '亲，继续努力哦！';
    }
    if (empty($fans['todaynum'])) {
        $fans['todaynum'] = 0;
    }
    if (empty($fans['totalnum'])) {
        $fans['totalnum'] = 0;
    }
    $awards = $db->getAll("SELECT * FROM " . $ecs->table('scratch_award') . " WHERE " ." rid = " . $id . " order by id desc");
    $condition="";

    if(!empty($from_user)){
        $condition= " and from_user='" . $from_user . "'";
    }
    $records = $db->getAll("SELECT * FROM " . $ecs->table('scratch_award') . " WHERE " ." rid = " . $id . $condition." order by id desc");
    $smarty->assign('records', $records);
    $smarty->assign('awards', $awards);
    $smarty->assign('fans', $fans);
    $smarty->assign('reply', $reply);
    $smarty->display('guaguaka.dwt');
} else if ($action == 'getaward'){
    $id = intval($_REQUEST['id']);
    //开始抽奖咯
    $reply = $db->getRow("SELECT * FROM " . $ecs->table('scratch_reply') . " WHERE rid =".$id." ORDER BY `id` DESC");
    if ($reply == false) {
        message();
    }
    if ($reply['isshow'] != 1) {
        //活动已经暂停,请稍后...
        message(array("success" => 2, "msg" => '活动暂停，请稍后...'), "");
    }
    if (strtotime($reply['starttime']) > time()) {
        message(array("success" => 2, "msg" => '活动还没有开始呢，请等待...'), "");
    }
    $endtime = strtotime($reply['endtime']);
    if ($endtime < time()) {
        message(array("success" => 2, "msg" => '活动已经结束了，下次再来吧！'), "");
    }

    //第一步，判断有没有已经领取奖品了，如果领取了，则不能再领取了

    $fans = $db->getRow('SELECT * FROM ' . $ecs->table('scratch_fans') . " WHERE rid =".$id." AND from_user = '".$user_name."'");
    if (empty($fans)) {
        //不存在false的情况，如果是false，则表明是非法
        //$this->message();
        $fans = array(
            'rid' => $id,
            'from_user' => $user_name,
            'todaynum' => 0,
            'totalnum' => 0,
            'awardnum' => 0,
            'createtime' => time(),
        );
        $db->autoExecute($ecs->table('scratch_fans'),$fans,"INSERT");

        $fans['id'] = $db->insert_id();
    }
    //更新当日次数
    $nowtime = mktime(0, 0, 0);
    if ($fans['last_time'] < $nowtime) {
        $fans['todaynum'] = 0;
    }
    //判断总次数超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
    if ($fans['totalnum'] >= $reply['number_times'] && $reply['number_times'] > 0) {
        // $this->message('', '超过抽奖总限制次数');
        message(array("success" => 2, "msg" => '您超过抽奖总次数了，不能抽奖了!'), "");
    }
    //判断当日是否超过限制,一般情况不会到这里的，考虑特殊情况,回复提示文字msg，便于测试
    if ($fans['todaynum'] >= $reply['most_num_times'] && $reply['most_num_times'] > 0) {
        //$this->message('', '超过当日限制次数');
        message(array("success" => 2, "msg" => '您超过当日抽奖次数了，不能抽奖了!'), "");
    }
    $last_time = strtotime(date("Y-m-d", mktime(0, 0, 0)));
    //当天抽奖次数
    $db->autoExecute($ecs->table('scratch_fans'), array('todaynum' => $fans['todaynum'] + 1, 'last_time' => $last_time),"UPDATE","id=".$fans['id']);

    //总抽奖次数
    $db->autoExecute($ecs->table('scratch_fans'), array('totalnum' => $fans['totalnum'] + 1),"UPDATE","id=".$fans['id']);
    $gifts = array(
        "one" => array("name" => $reply['c_name_one'], "type" => $reply['c_type_one'], "probalilty" => $reply['c_rate_one'], "total" => $reply['c_num_one'], "draw" => $reply['c_draw_one']),
        "two" => array("name" => $reply['c_name_two'], "type" => $reply['c_type_two'], "probalilty" => $reply['c_rate_two'], "total" => $reply['c_num_two'], "draw" => $reply['c_draw_two']),
        "three" => array("name" => $reply['c_name_three'], "type" => $reply['c_type_three'], "probalilty" => $reply['c_rate_three'], "total" => $reply['c_num_three'], "draw" => $reply['c_draw_three']),
        "four" => array("name" => $reply['c_name_four'], "type" => $reply['c_type_four'], "probalilty" => $reply['c_rate_four'], "total" => $reply['c_num_four'], "draw" => $reply['c_draw_four']),
        "five" => array("name" => $reply['c_name_five'], "type" => $reply['c_type_five'], "probalilty" => $reply['c_rate_five'], "total" => $reply['c_num_five'], "draw" => $reply['c_draw_five']),
        "six" => array("name" => $reply['c_name_six'], "type" => $reply['c_type_six'], "probalilty" => $reply['c_rate_six'], "total" => $reply['c_num_six'], "draw" => $reply['c_draw_six']),
    );
    //计算每个礼物的概率
    $probability = 0;
    $rate = 1;
    $award = array();
    $awards = array(); //奖品名字 (同时可中多个奖品，然后随机派奖)
    foreach ($gifts as $name => $gift) {
        if ($gift['total'] - $gift['draw'] <= 0) {
            continue;
        }
        if (empty($gift['probalilty'])) {
            continue;
        }
        $probability = $gift['probalilty'];
        if ($probability < 1) {
            $temp = explode('.', $probability);
            $temp = pow(10, strlen($temp[1]));
            $rate = $temp < $rate ? $rate : $temp;
            $probability = $probability * $rate;
        }
        $award[] = array('prizetype' => $name, 'name' => $gift['name'], 'probalilty' => $probability, 'total' => $gift['total']);
    }
    $all = 100 * $rate;
    mt_srand((double) microtime() * 1000000);
    $rand = mt_rand(1, $all);
    foreach ($award as $gift) {
        if ($rand > 0 && $rand <= $gift['probalilty'] && $gift['total'] > 0) {
            $awards[] = $gift['prizetype'];
        }
    }
    $prizetype = "";
    $awardtype = "";
    $awardname = "";
    if (count($awards) > 0) {
        mt_srand((double) microtime() * 1000000);
        $randid = mt_rand(0, count($awards) - 1);
        $prizetype = $awards[$randid];
        $awardtype = $gifts[$prizetype]['type'];
        $awardname = $gifts[$prizetype]['name'];
    }
    if ($reply['award_times'] == '0') {
        $reply['award_times'] = $fans['awardnum'] + 1;
    }
    if ((!empty($prizetype)) && ($fans['awardnum'] < $reply['award_times'])) {
        //中奖
        $sn = random(16);
        $db->autoExecute($ecs->table('scratch_reply'),array('c_draw_' . $prizetype => $reply['c_draw_' . $prizetype] + 1),"UPDATE","id=".$reply['id']);
        //保存sn到award中
        $insert = array(
            'rid' => $id,
            'from_user' => $user_name,
            'name' => $awardtype,
            'description' => $awardname,
            'prizetype' => $prizetype,
            'award_sn' => $sn,
            'createtime' => time(),
            'status' => 1,
        );
        $temp=$db->autoExecute($ecs->table("scratch_award"),$insert,"INSERT");
        //保存中奖人信息到fans中
        $db->autoExecute($ecs->table('scratch_fans'), array('awardnum' => $fans['awardnum'] + 1),"id=".$fans['id']);
        $k = 0;
        if ($prizetype == 'one') {
            $k = 1;
        } else if ($prizetype == 'two') {
            $k = 2;
        }if ($prizetype == 'three') {
            $k = 3;
        }if ($prizetype == 'four') {
            $k = 4;
        }if ($prizetype == 'five') {
            $k = 5;
        }if ($prizetype == 'six') {
            $k = 6;
        }
        $data = array(
            'name' => $reply['c_type_' . $prizetype],
            'award' => $reply['c_name_' . $prizetype],
            'sn' => $sn,
            'success' => 1,
            'prizetype' => $k,
        );
        message($data);
    }
    message();
} else if($action == 'settel'){

    $user_id = $_SESSION['user_id'];
    $user_name=$_SESSION['user_name'];
    $id = intval($_REQUEST['id']);
    $fansID =$user_id;
    $from_user = $user_name;
    $fans = $GLOBALS['db']->getRow("SELECT id FROM " . $GLOBALS['ecs']->table('scratch_fans') . " WHERE rid = " . $id . " and fansID=" . $fansID . " and from_user='" . $from_user . "'");
    if ($fans == false) {
        $data = array(
            'success' => 0,
            'msg' => '保存数据错误！',
        );
    } else {
        $temp = $GLOBALS['db']->autoExecute( $GLOBALS['ecs']->table('scratch_fans'), array('tel' => $_REQUEST['tel']),'UPDATE',"rid=".$rid." and fansID=".$fansID);

        if ($temp === false) {

            $data = array(
                'success' => 0,
                'msg' => '保存数据错误！',
            );
        } else {

            $data = array(
                'success' => 1,
                'msg' => '成功提交数据',
            );
        }
    }
    echo json_encode($data);
}

//用户注册成功页
elseif($action == 'act_register_success'){
    $smarty->display('register-success.dwt');
}
;


//json
 function message($_data = '', $_msg = '') {
    if (!empty($_data['succes']) && $_data['success'] != 2) {
        setfans();
    }
    if (empty($_data)) {
        $_data = array(
            'name' => "谢谢参与",
            'success' => 0,
        );
    }
    if (!empty($_msg)) {
        //$_data['error']='invalid';
        $_data['msg'] = $_msg;
    }
    die(json_encode($_data));
}
 function setfans() {

    //增加fans次数
    //记录用户信息
    $id = intval($_REQUEST['id']);
     $user_id = $_SESSION['user_id'];
     $user_name=$_SESSION['user_name'];
     $fans = $GLOBALS['db']->getRow("SELECT * FROM " . $GLOBALS['ecs']->table('scratch_fans') . " WHERE rid = " . $id . " and from_user= '" . $user_name . "'");
     if(empty($fans)){
       return;
     }
     $nowtime = mktime(0, 0, 0);
    if ($fans['last_time'] < $nowtime) {
        $fans['todaynum'] = 0;
    }
    $update = array(
        'todaynum' => $fans['todaynum'] + 1,
        'totalnum' => $fans['totalnum'] + 1,
        'last_time' => time(),
    );

    $GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('scratch_fans'), $update, "UPDATE",'id='. $fans['id']);
}
function random($length, $numeric = FALSE) {
    $seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
    $seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
    if ($numeric) {
        $hash = '';
    } else {
        $hash = chr(rand(1, 26) + rand(0, 1) * 32 + 64);
        $length--;
    }
    $max = strlen($seed) - 1;
    for ($i = 0; $i < $length; $i++) {
        $hash .= $seed{mt_rand(0, $max)};
    }
    return $hash;
}

?>