<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:88:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/group_buy_list.dwt";i:1;s:97:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/page_header_top.lbi";i:2;s:93:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/page_header.lbi";i:3;s:89:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/ur_here.lbi";i:4;s:95:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/category_tree.lbi";i:5;s:89:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/history.lbi";i:6;s:87:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/pages.lbi";i:7;s:93:"/home/ximenzijiadianbxhigmheenmzgisjki2aydoira2n/wwwroot/themes/henli/library/page_footer.lbi";}s:7:"expires";i:1482131927;s:8:"maketime";i:1482128327;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>团购商品_西门子</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/henli/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<link href="" rel="stylesheet" type="text/css" />
<link href="themes/henli/app.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript">  
var process_request = "正在处理您的请求...";
</script>
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<div class="hl-status">
  <div class="hl-center"> 
    <span class="hl-f14">欢迎关注西门子家电四川平台!</span>
    <div class="hl-fr">
              <a class="hl-user hl-a3" href="user.php" target="_blank">登录</a>
        <a class="hl-user-center" href="user.php?act=register" target="_blank">注册</a>
          </div>
  </div>
</div> 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="hl-header hl-header-bottom">
  <div class="hl-center hl-nav"> 
    <a class="hl-logo hl-mr10" href="http://mall.honrisen.com"></a>
    <a class="hl-mr20" href="" target="_blank">西门子家电</a>
    <a class="hl-mr20" href="" target="_blank">展望未来</a>
    <div class="hl-search hl-f0">
      <input class="hl-input-search hl-f14" type="text" placeholder="搜索您想知道的信息..." />
      <button class="hl-search-button"></button>
    </div>
  </div>
</div>
  <div class="hl-w1100">
<div class="blank"></div>
<div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="group_buy.php">团购商品</a> 
</div>
</div>
<div class="blank"></div><div class="block clearfix">
  
  <div class="AreaL">
    
  
    <div id="category_tree">
<div class="tit">所有商品分类</div>
<dl class="clearfix" style=" overflow:hidden;" >
<div class="box1 cate" id="cate"> 
   
</div>
<div style="clear:both"></div>
</div>
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/henli/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/henli/images/btn_unfold.gif"
		}
}
</script>    
    
    
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    45ea207d7a2b68c49582d2d22adf953ahistory|a:1:{s:4:"name";s:7:"history";}45ea207d7a2b68c49582d2d22adf953a  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="box">
   <div class="box_1">
    <h3><span>团购商品：</span></h3>
    <div class="boxCenterList">
                  <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=1"><img src="images/201612/thumb_img/2_thumb_G_1482101148209.jpg" border="0" alt="西门子iQ500系列洗衣机出彩、就现在" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=1" class="f5">西门子iQ500系列洗衣机出彩、就现在</a><br />
      起止时间：2016-12-18 08:00:00 -- 2016-12-22 08:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">1</td>
         <td width="71%" bgcolor="#FFFFFF">￥10元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">2</td>
         <td width="71%" bgcolor="#FFFFFF">￥30元</td>
        </tr>
              </table>
      </li>
      </ul>
                </div>
   </div>
  </div>
  <div class="blank5"></div>
  <form name="selectPageForm" action="/group_buy.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>1</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>  </div>
  
</div>
<div class="hl-center hl-server">
  <ul class="hl-clearfix">
    <li class="hl-tel">
      <p>客户热线</p>
      <p>7x24小时服务400-88-99999</p>
    </li>
    <li class="hl-ater">
      <p>在线咨询</p>
      <p>服务时间：周一至周日</p>
    </li>
    <li class="hl-wechart">
      <p>官方微信</p>
      <p>关注西门子家电微信，享受专业的贴心服务</p>
    </li>
  </ul>
</div>
<div class="hl-footer hl-f14 hl-44 hl-tc">
  <span class="hl-blue">&copy;&nbsp;&nbsp;博西家用电器集团&nbsp;&nbsp;2016&nbsp;&nbsp;|&nbsp;&nbsp;BSH集团是西门子股份公司的商标许可方&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  苏ICP备10003401号
</div></body>
</html>