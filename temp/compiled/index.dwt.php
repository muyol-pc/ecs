<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_var['ecs_css_app_path']; ?>" rel="stylesheet" type="text/css" /> 



<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>

</head>
<body class="index_page" style="min-width:1200px;">
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.js')); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div class="hl-center hl-washer hl-clearfix hl-mb20">
  <h2 class="hl-f30 hl-h2 hl-4a hl-tc">冰洗专区</h2>
  <a class="hl-half" href="category.php?id=1" style="">
    <div class="hl-pr20"><img src="data/afficheimg/20160129bcmitn.jpg" alt="" height="250px;" /></div>
  </a>
  <a class="hl-half " href="category.php?id=1" style="">
    <div class="hl-pl20"><img src="data/afficheimg/20160129prsrpo1.jpg" alt="" height="250px;"/></div>
  </a>
</div>
<div class="hl-column hl-activity">
  <h2 class="hl-f30 hl-h2 hl-4a hl-tc">活动专区</h2>
  <div class="hl-center hl-slider-con hl-activity-slider">
    <div class="hl-activity-banner">
      <ul class="hl-activity-items">
        <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_00891600_1482128683');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_00891600_1482128683']):
        $this->_foreach['myflash']['iteration']++;
?>
        <li><a href="<?php echo $this->_var['flash_0_00891600_1482128683']['url']; ?>"><img src="<?php echo $this->_var['flash_0_00891600_1482128683']['src']; ?>" alt="" target="_blank"></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <div class="hl-activity-select hl-f0 hl-tr"></div>
    </div>
  </div>
</div>
<script>
  $(".hl-activity-slider").slide({
      titCell: '.hl-activity-select',
      mainCell:'.hl-activity-banner ul',
      autoPlay:true,
      autoPage: true,
      trigger:"click"
    });
</script>
  <div class="hl-center hl-other">
    <ul class="hl-f0">
      <li>
        <h2>
          <p class="hl-f30 hl-4a">互动专区</p>
          <p class="hl-f18 hl-93 hl-ups">Interactive activities</p>
        </h2>
        <a href="">
          <img src="themes/henli/images/hl-cj.png" alt=""/>
        </a>
      </li>
      <li class="hl-online-message">
        <h2>
          <p class="hl-f30 hl-4a">在线留言</p>
          <p class="hl-f18 hl-93 hl-ups">Online message</p>
        </h2>
        <a href="message.php">
          <img src="themes/henli/images/hl-pc.png" alt=""/>
        </a>
      </li>
      <li>
        <h2>
          <p class="hl-f30 hl-4a">关于我们</p>
          <p class="hl-f18 hl-93 hl-ups">About us</p>
        </h2>
        <a href="">
          <img src="themes/henli/images/hl-bx.png" alt=""/>
        </a>
      </li>
    </ul>
  </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
