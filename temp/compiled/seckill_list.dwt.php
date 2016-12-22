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
    <div class="hl-status">
      <div class="hl-center">
        <span class="hl-f14">欢迎关注西门子家电四川平台!</span>
        <div class="hl-fr">
          <a class="hl-user hl-a3" href="" target="_blank">18585272260</a>
          <a class="hl-user-center" href="" target="_blank">个人中心</a>
          <a class="hl-cart" href="" target="_blank">我的购物车<i class="hl-bgc-a3 hl-ff hl-tc hl-fsn hl-substr" title='5'>5</i></a>
          <a class="hl-message" href="" target="_blank">在线留言</a>
        </div>
      </div>
    </div>
    <div class="hl-header">
      <div class="hl-center hl-nav">
        <a class="hl-logo hl-mr10" href=""></a>
        <a class="hl-mr20" href="" target="_blank">西门子家电</a>
        <a class="hl-mr20" href="" target="_blank">展望未来</a>
        <div class="hl-search hl-f0">
          <input class="hl-input-search hl-f14" type="text" placeholder="搜索您想知道的信息..." />
          <button class="hl-search-button"></button>
        </div>
      </div>
    </div>

    
    <nav class="hl-breadcrumb hl-w1100 hl-f14">
      <span class="hl-notice">您当前所在的位置 : </span>
      <span class="hl-prev"><a href="#">首页</a> &gt; </span>
      <span class="hl-prev"><a href="#">活动专区</a> &gt; </span>
      <span class="hl-now hl-blue">秒杀</span>
    </nav>

    <div class="hl-w1100">
      <img src="themes/henli/inc/inc/images/hl-sigin-bg.png" alt="">
    </div>

    <div class="hl-w1100 hl-clearfix">
      <ul class="hl-countdown-list hl-mt20">
        


        <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'seckill');if (count($_from)):
    foreach ($_from AS $this->_var['seckill']):
?>
            <li class="hl-half">
              <a href="<?php echo $this->_var['seckill']['url']; ?>" target="_blank" class="hl-countdown-item hl-mr20 hl-border-blue hl-p10 hl-bg-shade">
                <span class="hl-p-img hl-disp-b hl-tc" href="">
                  <img src="themes/henli/images/hl-product-4.png" alt="">
                </span>
                <div class="hl-mt5"><?php echo htmlspecialchars($this->_var['seckill']['goods_name']); ?></div>

                <div style="height: 36px;line-height: 36px;">
                  <div class="hl-half hl-gray">
                    <span>原&nbsp;&nbsp;&nbsp;&nbsp;价:</span>
                    <s class="hl-fs-15 hl-bold">&yen; <?php echo $this->_var['seckill']['market_price']; ?></s>
                  </div>
                  <div class="hl-half hl-gray hl-text-c">已有<span class="hl-bold hl-yellow">185</span>人够买</div>
                </div>

                <div style="height: 36px;line-height: 38px;">
                  <div class="hl-half hl-gray" style="width:35%;">
                    <span>秒杀价:</span>
                    <span class="hl-fs-20 hl-bold hl-yellow" style="font-size: 1.5rem!important;">&yen; <?php echo $this->_var['seckill']['seckill_price']; ?></span>
                  </div>
                  <div class="hl-half hl-countdown hl-text-r hl-white hl-fs-8" style="width:65%;background-size: cover;">
                    <span>距结束</span>
                    <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_day']; ?></span>
                    <span>天</span>
                    <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_hour']; ?></span>
                    <span>时</span>
                    <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_minute']; ?></span>
                    <span>分</span>
                    <span class="hl-countdown-num hl-blue hl-fs-15 hl-blod"><?php echo $this->_var['seckill']['surplus_seconds']; ?></span>
                    <span>秒</span>
                  </div>
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
    </div>
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="themes/henli/inc/inc/js/seckill.js"></script>
  </body>
  <script type="text/javascript">
      var now_time = <?php echo $this->_var['now_time']; ?>;
      

      onload = function()
      {
        try
        {
          onload_leftTime();
        }
        catch (e)
        {}
      }
      
  </script>
</html>