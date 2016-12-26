<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>表单</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link type="text/css" rel="stylesheet" href="themes/henli/inc/css/base.css">
<link type="text/css" rel="stylesheet" href="themes/henli/inc/css/guaguaka_index.css">
</head>
<body>
  <?php echo $this->fetch('library/page_header_top.lbi'); ?>
  <?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>
<style>
  .i-box{height: 50px;}
  .i-box input{line-height: 50px;height: 50px;}
</style>
  <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)" class="form-box">
    <ul>
      <li>
        <span>姓名：</span>
        <div class="i-box"><input type="text" name="msg_name" value="<?php echo $this->_var['user_name']; ?>" readonly></div>
      </li>
      <li>
        <span>联系电话：</span>
        <div class="i-box"><input type="text" name="msg_phone" value="<?php echo $this->_var['mobile_phone']; ?>" readonly></div>
      </li>
      <li>
        <span>电子邮箱：</span>
        <div class="i-box"><input type="text" name="msg_email"></div>
      </li>
      <li>
        <span>问题描述：</span>
        <div class="i-box" style="margin-top:5px;height: 140px;px"><textarea class="area" name="msg_content" style="width: 100%;"></textarea></div>
      </li>
      <li>
        <?php if ($this->_var['enabled_mes_captcha']): ?>

                <span><?php echo $this->_var['lang']['comment_captcha']; ?>：</span>
              <div class="i-box" style="margin-top:5px;"><input type="text" size="8" name="captcha"  class="inputBg" style="width: 303px;height: 50px;line-height: 50px"/>
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="cursor: pointer;float:right;" onClick="this.src='captcha.php?'+Math.random()" />
              </div>
            <?php endif; ?>
      </li>

      <li class="btn">
        <span></span>
        <div class="i-box"><input type="hidden" name="act" value="act_add_message" /><button type="submit" class="post">马上提交</button></div>
      </li>
    </ul>
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
             msg.msg_name   = frm.elements['msg_name'].value;
             msg.msg_phone = frm.elements['msg_phone'].value;
             msg.msg_email = frm.elements['msg_email'].value;
             msg.msg_content = frm.elements['msg_content'].value;
            // msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';


            var msg_err = '';

            if (msg.msg_name.length == 0) {
              msg_err += msg_name_empty + '\n'
            }

            if (msg.msg_phone.length == 0) {
              msg_err += msg_phone_empty + '\n'
            }
            if (msg.msg_email.length == 0) {
              msg_err += msg_email_empty + '\n'
            }

            if (msg.msg_content.length == 0)
            {
                msg_err += msg_content_empty + '\n'
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
</body>






</html>
