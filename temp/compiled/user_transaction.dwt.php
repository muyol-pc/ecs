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
         <form name="formPassword" action="user.php" method="post" onSubmit="return editPassword()" >
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
               <td width="28%" align="right" bgcolor="#FFFFFF" id="extend_field5i">手机：</td>
                <td width="72%" align="left" bgcolor="#FFFFFF">
                <input name="extend_field5" type="text" class="inputBg" value="13804032787"><span style="color:#FF0000"> *</span>                </td>
            </tr>
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['old_password']; ?>：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="old_password" type="password" size="25"  class="inputBg" /></td>
            </tr>
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['new_password']; ?>：</td>
              <td align="left" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25"  class="inputBg" /></td>
            </tr>
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['confirm_password']; ?>：</td>
              <td align="left" bgcolor="#FFFFFF"><input name="comfirm_password" type="password" size="25"  class="inputBg" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_password" />
                <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
              </td>
            </tr>
          </table>
        </form>
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
