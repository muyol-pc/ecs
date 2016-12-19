<link href="<?php echo $this->_var['ecs_css_app_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/henli/app.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.3.min.js,jquery.json.js')); ?>
<script type="text/javascript">  
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<div class="hl-status">
  <div class="hl-center"> 
    <span class="hl-f14">欢迎关注西门子家电四川平台!</span>
    <div class="hl-fr">
      <?php if ($this->_var['user_name']): ?>
        <a class="hl-user hl-a3" href="javascript:viod(0);" target="_blank"><?php echo $this->_var['user_name']; ?></a>
        <a class="hl-user-center" href="user.php?act=default" target="_blank">个人中心</a>
        <a class="hl-cart" href="http://mall.honrisen.com/flow.php" target="_blank">我的购物车<i class="hl-bgc-a3 hl-ff hl-tc hl-fsn hl-substr hl-car-num" title='我的购物车'><?php echo $this->_var['car_num']; ?></i></a>
      <a class="hl-message" href="http://mall.honrisen.com/message.php" target="_blank">在线留言</a>
      <a class="hl-message" href="user.php?act=logout" target="_blank">退出</a>
      <?php else: ?>
        <a class="hl-user hl-a3" href="user.php" target="_blank">登录</a>
        <a class="hl-user-center" href="user.php?act=register" target="_blank">注册</a>
      <?php endif; ?>
    </div>
  </div>
</div>