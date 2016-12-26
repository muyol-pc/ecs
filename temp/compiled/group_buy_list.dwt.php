<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>
    <div class="hl-w1100">
        <img src="themes/henli/images/hl-sigin-bg.png" alt="">
    </div>
<div class="hl-w1100 hl-clearfix">
<?php if ($this->_var['gb_list']): ?>
      <ul class="hl-countdown-list hl-mt20">
        
         <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
        <li class="hl-half">
          <a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" class="hl-countdown-item hl-mr20 hl-border-blue hl-p10 hl-bg-shade">
            <span class="hl-p-img hl-disp-b hl-tc" href="">
              <img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>">
            </span>
            <div class="hl-mt5"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></div>

            <div style="height: 36px;line-height: 36px;">
              <div class="hl-half hl-gray">
                <span>原&nbsp;&nbsp;&nbsp;&nbsp;价:</span>
                <s class="hl-fs-15 hl-bold">&yen; <?php echo $this->_var['group_buy']['shop_price']; ?></s>
                <span class="hl-yellow"><?php echo $this->_var['group_buy']['zhekou']; ?>折</span>
              </div>
              <div class="hl-yellow hl-bold hl-text-c"><span class="hl-min-num"><?php echo $this->_var['group_buy']['tuan_num']; ?></span>件以上开团</div>
            </div>

            <div style="height: 36px;line-height: 38px;">
              <div class="hl-half hl-gray">
                <span>团购价:</span>
                <span class="hl-fs-20 hl-bold hl-yellow">&yen; <?php echo $this->_var['group_buy']['tuan_price']; ?></span>
              </div>
              <div class="hl-half hl-bg-blue hl-text-c hl-white hl-fs-15">
                马上参团
              </div>
            </div>
          </a>
        </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
<?php else: ?>
<span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span>
<?php endif; ?>
    </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
