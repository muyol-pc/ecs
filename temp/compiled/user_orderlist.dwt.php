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
<link href="<?php echo $this->_var['ecs_css_app_path']; ?>" rel="stylesheet" type="text/css" /> 

<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,common.js,user.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="hl-container clearfix">
      
      <aside class="hl-content-left">
        <?php echo $this->fetch('library/page_nav_list.lbi'); ?>
      </aside>
      
      <div class="hl-content-right">
        <div class="hl-order">
          <div class="hl-order-header hl-fs-15">
            <a class="hl-order-header-item <?php if ($this->_var['status'] < 1 || $this->_var['status'] > 3): ?>active<?php endif; ?>" href="user.php?<?php echo $this->_var['act']; ?>">所有订单</a>
            <a class="hl-order-header-item <?php if ($this->_var['status'] == 1): ?>active<?php endif; ?>" href="user.php?<?php echo $this->_var['act']; ?>&status=1">代付款</a>
            <a class="hl-order-header-item <?php if ($this->_var['status'] == 2): ?>active<?php endif; ?>" href="user.php?<?php echo $this->_var['act']; ?>&status=2">待发货</a>
            <a class="hl-order-header-item <?php if ($this->_var['status'] == 3): ?>active<?php endif; ?>" href="user.php?<?php echo $this->_var['act']; ?>&status=3">待收货</a>
          </div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>&status=<?php echo $this->_var['status']; ?>" class="f6"><?php echo $this->_var['item']['order_sn']; ?></a></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['total_fee']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_status']; ?></td>
            <td align="center" bgcolor="#ffffff"><font class="f6"><?php echo $this->_var['item']['handler']; ?></font></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php echo $this->fetch('library/pages.lbi'); ?>
       <div class="blank5"></div>
       <h5><span><?php echo $this->_var['lang']['merge_order']; ?></span></h5>
       <div class="blank"></div>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </script>
        <form action="user.php" method="post" name="formOrder" onsubmit="return mergeOrder()">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="22%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['first_order']; ?>:</td>
              <td width="12%" align="left" bgcolor="#ffffff"><select name="to_order">
              <option value="0"><?php echo $this->_var['lang']['select']; ?></option>

                  <?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

                </select></td>
              <td width="19%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['second_order']; ?>:</td>
              <td width="11%" align="left" bgcolor="#ffffff"><select name="from_order">
              <option value="0"><?php echo $this->_var['lang']['select']; ?></option>

                  <?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

                </select></td>
              <td width="36%" bgcolor="#ffffff">&nbsp;<input name="act" value="merge_order" type="hidden" />
              <input type="submit" name="Submit"  class="bnt_blue_1" style="border:none;"  value="<?php echo $this->_var['lang']['merge_order']; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#ffffff">&nbsp;</td>
              <td colspan="4" align="left" bgcolor="#ffffff"><?php echo $this->_var['lang']['merge_order_notice']; ?></td>
            </tr>
          </table>
        </form>
        </div>
      </div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
