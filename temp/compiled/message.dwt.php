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
<style type="text/css">
p a{color:#006acd; text-decoration:underline;}
</style>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="blank"></div>
<div class="block">
  <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['system_info']; ?></span></h3>
    <div class="boxCenterList RelaArticle" align="center">
      <div style="margin:20px auto;">
      <p style="font-size: 14px; font-weight:bold; color: red;">
      <?php if ($this->_var['msg_err']): ?>
      <?php echo $this->_var['msg_err']; ?>
      <?php else: ?>
      <?php echo $this->_var['message']['content']; ?>
      <?php endif; ?>
      </p>
        <div class="blank"></div>
        <?php if ($this->_var['message']['url_info']): ?>
          <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
          <p><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></p>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
      </div>
    </div>
   </div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
