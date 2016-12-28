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
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>


  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
  
  <div class="AreaL">
    
<?php echo $this->fetch('library/history.lbi'); ?>

    

    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
  <?php echo $this->fetch('library/message_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  <div class="blank5"></div>
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['post_message']; ?></span></h3>
<?php if ($_SESSION['user_id'] > 0): ?>
      <div class="boxCenterList">
          <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
            <table width="100%" border="0" cellpadding="3">
              <tr>
                <td align="right"><?php echo $this->_var['lang']['username']; ?></td>
                <td>
                <font class="f4_b"><?php echo $this->_var['username']; ?></font>
                <input type="hidden" name="name" value="<?php echo $this->_var['username']; ?>"/>
                </td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['user_telphone']; ?></td>
                <td>
                <font class="f4_b"><?php echo $this->_var['mobile_phone']; ?></font>
                <input type="hidden" name="phone" value="<?php echo $this->_var['mobile_phone']; ?>"/>
                </td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['message_board_type']; ?></td>
                <td><input name="msg_type" type="radio" value="0" checked="checked" />
                  <?php echo $this->_var['lang']['message_type']['0']; ?>
                  <input type="radio" name="msg_type" value="1" />
                  <?php echo $this->_var['lang']['message_type']['1']; ?>
                  <input type="radio" name="msg_type" value="2" />
                  <?php echo $this->_var['lang']['message_type']['2']; ?>
                  <input type="radio" name="msg_type" value="3" />
                  <?php echo $this->_var['lang']['message_type']['3']; ?>
                  <input type="radio" name="msg_type" value="4" />
                  <?php echo $this->_var['lang']['message_type']['4']; ?> </td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['message_title']; ?></td>
                <td><input name="msg_title" type="text" class="inputBg" size="30" style="width:400px;height:36px;" /></td>
              </tr>
            <?php if ($this->_var['enabled_mes_captcha']): ?>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
                <td><input type="text" size="8" name="captcha"  class="inputBg" />
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
              </tr>
            <?php endif; ?>
              <tr>
                <td align="right" valign="top"><?php echo $this->_var['lang']['message_content']; ?></td>
                <td><textarea name="msg_content" cols="100" rows="20" wrap="virtual" style="border:1px solid #ccc;width: 400px;height: 120px;"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="act" value="act_add_message" />
                  <input type="submit" value="<?php echo $this->_var['lang']['post_message']; ?>" class="bnt_blue_1" style="cursor:pointer;"/>
                </td>
              </tr>
            </table>
          </form>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        /**
         * 提交留言信息
        */
        /**
         * 电话
         */

        function submitMsgBoard(frm)
        {
            var msg = new Object;
             msg.msg_title   = frm.elements['msg_title'].value;
             msg.msg_content = frm.elements['msg_content'].value;
             msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';


            var msg_err = '';

            if (msg.msg_title.length == 0)
            {
                msg_err += msg_title_empty + '\n';
            }
            if (frm.elements['captcha'] && msg.captcha.length==0)
            {
                msg_err += msg_captcha_empty + '\n'
            }
            if (msg.msg_content.length == 0)
            {
                msg_err += msg_content_empty + '\n'
            }
            if (msg.msg_title.length > 200)
            {
                msg_err += msg_title_limit + '\n';
            }

            if (msg_err.length > 0)
            {
                alert(msg_err);
                return false;
            }
            else
            {
                return true;
            }
        }
        
        </script>
      </div>
      <?php else: ?>
      <div class="block" style="margin:20px;">您未登录，只有登录用户才有权查看！</div>
      <?php endif; ?>
     </div>
    </div>
  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
