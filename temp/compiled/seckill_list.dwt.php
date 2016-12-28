<!DOCTYPE html>
<html lang="zh-cn">
  <head>
<meta name="Generator" content="ECSHOP v3.0.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="themes/henli/inc/inc/app.css" rel="stylesheet">
    <title><?php echo $this->_var['page_title']; ?></title>
  </head>
  <body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?>

    <!-- <div class="hl-w1100">
      <img src="themes/henli/inc/inc/images/hl-sigin-bg.png" alt="">
    </div> -->

    <div class="hl-w1100 hl-clearfix">
      <ul class="hl-countdown-list hl-mt20">
        


        <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'seckill');if (count($_from)):
    foreach ($_from AS $this->_var['seckill']):
?>
            <li class="hl-half">
              <a href="<?php echo $this->_var['seckill']['url']; ?>" target="_blank" class="hl-countdown-item hl-mr20 hl-border-blue hl-p10 hl-bg-shade">
                <span class="hl-p-img hl-disp-b hl-tc" href="">
                  <img src="<?php echo $this->_var['seckill']['seckill_img']; ?>" alt="" style="width:508px;height:264px;">
                </span>
                <div class="hl-mt5"><?php echo htmlspecialchars($this->_var['seckill']['goods_name']); ?></div>

                <div style="height: 36px;line-height: 36px;">
                  <div class="hl-half hl-gray">
                    <span>原&nbsp;&nbsp;&nbsp;&nbsp;价:</span>
                    <s class="hl-fs-15 hl-bold">&yen; <?php echo $this->_var['seckill']['market_price']; ?></s>
                  </div>
<<<<<<< HEAD
                  <div class="hl-half hl-gray hl-text-c">已有<span class="hl-bold hl-yellow">185</span>人够买</div>
=======
                  <div class="hl-half hl-gray hl-text-c">已有<span class="hl-bold hl-yellow"><?php echo $this->_var['seckill']['goods_buys']; ?></span>人够买</div>
>>>>>>> origin/master
                </div>

                <div style="height: 36px;line-height: 38px;">
                  <div class="hl-half hl-gray" style="width:35%;">
                    <span>秒杀价:</span>
                    <span class="hl-fs-20 hl-bold hl-yellow" style="font-size: 1.5rem!important;">&yen; <?php echo $this->_var['seckill']['seckill_price']; ?></span>
                  </div>
                  <?php if ($this->_var['seckill']['start_date'] > $this->_var['seckill']['current_time']): ?>
                      <div class="hl-half hl-countdown hl-text-r hl-white hl-fs-8" style="width:65%;background-size: cover;padding-right:5px;">
                        <span>距开始</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_day']; ?></span>
                        <span>天</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_hour']; ?></span>
                        <span>时</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_minute']; ?></span>
                        <span>分</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_seconds']; ?></span>
                        <span>秒</span>
                      </div>
                  <?php elseif ($this->_var['seckill']['end_date'] > $this->_var['seckill']['current_time'] && $this->_var['seckill']['start_date'] < $this->_var['seckill']['current_time']): ?>
                        <div class="hl-half hl-countdown hl-text-r hl-white hl-fs-8" style="width:65%;background-size: cover;padding-right:5px;">
                        <span>距结束</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['end_day']; ?></span>
                        <span>天</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['end_hour']; ?></span>
                        <span>时</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['end_minute']; ?></span>
                        <span>分</span>
                        <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['end_seconds']; ?></span>
                        <span>秒</span>
                      </div>
                  <?php endif; ?>
                </div>
              </a>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


      </ul>
    </div>
    <div class="hl-page hl-f0 hl-text-c hl-w1100">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
          <?php if ($this->_var['pager']['page_first']): ?><a class="hl-prev" href="<?php echo $this->_var['pager']['page_first']; ?>"></a><?php endif; ?>
            <?php if ($this->_var['pager']['page_prev']): ?><a class="hl-prev" href="<?php echo $this->_var['pager']['page_prev']; ?>">&lt;</a><?php endif; ?>
            <?php if ($this->_var['pager']['page_count'] != 1): ?>
              <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <a href="javascript:;" class="hl-curr"><?php echo $this->_var['key']; ?></a>
                <?php else: ?>
                <a class="hl-next" href="<?php echo $this->_var['item']; ?>">[<?php echo $this->_var['key']; ?>]</a>
                <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            <?php if ($this->_var['pager']['page_next']): ?><a class="hl-next" href="<?php echo $this->_var['pager']['page_next']; ?>">&gt;</a><?php endif; ?>
              <?php if ($this->_var['pager']['page_last']): ?><a class="hl-next" href="<?php echo $this->_var['pager']['page_last']; ?>"></a><?php endif; ?>
              <?php if ($this->_var['pager']['page_kbd']): ?>
                <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                  <?php if ($this->_var['key'] == 'keywords'): ?>
                      <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                    <?php else: ?>
                      <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                  <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
                <?php endif; ?>
        </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
    </div>
    <br>
    <br>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="themes/henli/inc/inc/js/seckill.js"></script>
  </body> 
</html>