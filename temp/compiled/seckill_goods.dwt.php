<!DOCTYPE html>
<html lang="zh">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
  <meta charset="UTF-8">
  <title><?php echo $this->_var['page_title']; ?></title>
  <link rel="stylesheet" type="text/css" href="themes/henli/inc/css/category-details.css"/>
  <script type="text/javascript" src="themes/henli/inc/public/lib/jquery/jquery.min.js"></script>
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
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
<div class="hl-header hl-border-bottom">
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
<div class="hl-container">
  <div class="hl-center hl-crumbs hl-f14">
    <strong class="hl-simsun hl-fwn">您当前的位置 : </strong>
    <span class="hl-simsun"><a href="">首页</a></span>
    <span class="hl-simsun">&nbsp;&gt;&nbsp;<a href="">活动专区</a>&nbsp;&gt;&nbsp;<a href="">秒杀</a></span>
    <span class="hl-simsun hl-there">&nbsp;&gt;&nbsp;<a href="">西门子</a></span>
  </div>
  <div class="hl-center">
    <div class="hl-product-intro hl-mb30 hl-clearfix">
      <div class="hl-preview hl-fl">
        <div id="preview" class="hl-spec-preview">
          <div class="hl-zoom">
            <img zoom-img="<?php echo $this->_var['seckill']['imggoods']['original_img']; ?>" src="<?php echo $this->_var['seckill']['imggoods']['goods_thumb']; ?>" style="width:478px;height:380px;" />
          </div>
        </div>
        <div class="hl-spec-scroll">
          <a class="hl-prev">&lt;</a>
          <a class="hl-next">&gt;</a>
          <div class="hl-items">
            <ul>
                <?php $_from = $this->_var['seckill']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                  <li><img hl-bimg="<?php echo $this->_var['item']['img_original']; ?>" src="<?php echo $this->_var['item']['thumb_url']; ?>"></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="hl-product-main hl-fl">
        <div class="hl-intro hl-mb10">
          <h1 class="hl-f18 hl-fwn hl-69"><?php echo $this->_var['gb_goods']['goods_name']; ?></h1>
          
          <!-- <div class="hl-ad hl-ff hl-f20">
            <span class="hl-fl hl-s">团购特惠</span>
            <span class="hl-fr hl-f18">已有10人参团，还差3人即可享受优惠</span>
          </div> -->
          
          <div class="hl-ad hl-ff hl-f20">
            <span class="hl-fl hl-clock">特价秒杀</span>
            <?php if ($this->_var['seckill']['cur_status'] == 0): ?>
                <span class="hl-fr hl-cut-time hl-f18" style="float:right;margin-right:10px;letter-spacing:2px;">
                    距开始&nbsp;
                    <p id="v:timeCounter" style="margin:0px;float:right;">
                        <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span>
                    </p>
                    <p id="time_loading" class="tuan_time_loading"></p>
                </span>
            <?php elseif ($this->_var['seckill']['cur_status'] == 1): ?>
                <span class="hl-fr hl-cut-time hl-f18" style="float:right;margin-right:10px;letter-spacing:2px;">
                   <p >秒杀活动进行中...</p>
                </span>
            <?php else: ?>
                <span class="hl-fr hl-cut-time hl-f18" style="float:right;margin-right:10px;letter-spacing:2px;">
                   <p >秒杀活动已结束...</p>
                </span>
            <?php endif; ?>
        </div>
          <!--<div class="hl-ad hl-ff hl-f20">
              <span class="hl-fl hl-clock">特价秒杀</span>
              <span class="hl-fr hl-cut-time hl-f18">距结束<b class="hl-day">3</b>天<b class="hl-hours">10</b>时<b class="hl-minutes">25</b>分<b class="hl-second">38</b>秒</span>
          </div>-->

        </div>
        <div class="hl-summary">
          
          <!-- <div class="hl-price hl-team-buy hl-f18">
          团购价 <strong class="hl-f30 hl-fmr">&yen; 6988.00</strong>
            <span class="hl-old-price hl-f16">原&nbsp;&nbsp;&nbsp;价：<b>&yen;8988.00</b></span>
          </div> -->
          
          <!-- <div class="hl-price hl-cost hl-f18">
            价格 <strong class="hl-f30 hl-fmr">&yen; 6988.00</strong>
          </div> -->
          
          <div class="hl-price hl-f18">
            秒杀价 <strong class="hl-f30 hl-fmr">&yen; <?php echo $this->_var['seckill']['seckill_price']; ?></strong>
          </div>
          <div class="hl-stock hl-f12 hl-66 hl-mb10">
            <div class="hl-dt">送　　至</div>
            <div class="hl-dd hl-clearfix">
              
              <div class="hl-store-selector hl-fl">
                <div class="hl-city">
                  <div class="hl-text hl-active">
                    <div class="hl-address-placement">四川&nbsp;成都市&nbsp;高新区</div>
                    <b></b>
                  </div>
                  <div class="hl-city-group">
                    <div class="hl-content">
                      <ul class="hl-tab-city hl-clearfix">
                      
                        <li class="hl-curr hl-active">
                          <p><a href="javascript:;">四川</a><b></b></p>
                        </li>
                        <li>
                          <p><a href="javascript:;">成都</a><b></b></p>
                        </li>
                        <li>
                          <p><a href="javascript:;">高新区</a><b></b></p>
                        </li>
                      </ul>
                      <div class="hl-tab-content">
                      
                        <div class="hl-panel hl-province-arr hl-active">
                          <!--
                            点击添加：hl-on
                            页面刷新添加：hl-on
                          -->
                          <span><a class="" href="javascript:;">北京</a></span>
                          <span><a href="javascript:;">上海</a></span>
                          <span><a href="javascript:;">天津</a></span>
                          <span><a href="javascript:;">重庆</a></span>
                          <span><a href="javascript:;">河北</a></span>
                          <span><a href="javascript:;">山西</a></span>
                          <span><a href="javascript:;">河南</a></span>
                          <span><a href="javascript:;">辽宁</a></span>
                          <span><a href="javascript:;">吉林</a></span>
                          <span><a href="javascript:;">黑龙江</a></span>
                          <span><a href="javascript:;">内蒙古</a></span>
                          <span><a href="javascript:;">江苏</a></span>
                          <span><a href="javascript:;">山东</a></span>
                          <span><a href="javascript:;">安徽</a></span>
                          <span><a href="javascript:;">浙江</a></span>
                          <span><a href="javascript:;">福建</a></span>
                          <span><a href="javascript:;">湖北</a></span>
                          <span><a href="javascript:;">湖南</a></span>
                          <span><a href="javascript:;">广东</a></span>
                          <span><a href="javascript:;">广西</a></span>
                          <span><a href="javascript:;">江西</a></span>
                          <span><a href="javascript:;">四川</a></span>
                          <span><a href="javascript:;">海南</a></span>
                          <span><a href="javascript:;">贵州</a></span>
                          <span><a href="javascript:;">云南</a></span>
                          <span><a href="javascript:;">西藏</a></span>
                          <span><a href="javascript:;">陕西</a></span>
                          <span><a href="javascript:;">甘肃</a></span>
                          <span><a href="javascript:;">青海</a></span>
                          <span><a href="javascript:;">宁夏</a></span>
                          <span><a href="javascript:;">新疆</a></span>
                          <span><a href="javascript:;">台湾</a></span>
                          <span><a href="javascript:;">港澳</a></span>
                          <span><a href="javascript:;">钓鱼岛</a></span>
                        </div>
                        <div class="hl-panel hl-city-arr">
                          <span><a href="javascript:;">凉山州</a></span>
                          <span><a href="javascript:;">成都市</a></span>
                          <span><a href="javascript:;">自贡市</a></span>
                          <span><a href="javascript:;">攀枝花市</a></span>
                          <span><a href="javascript:;">泸州市</a></span>
                          <span><a href="javascript:;">绵阳市</a></span>
                          <span><a href="javascript:;">德阳市</a></span>
                          <span><a href="javascript:;">广元市</a></span>
                          <span><a href="javascript:;">遂宁市</a></span>
                          <span><a href="javascript:;">内江市</a></span>
                          <span><a href="javascript:;">乐山市</a></span>
                          <span><a href="javascript:;">宜宾市</a></span>
                          <span><a href="javascript:;">广安市</a></span>
                          <span><a href="javascript:;">南充市</a></span>
                          <span><a href="javascript:;">达州市</a></span>
                          <span><a href="javascript:;">巴中市</a></span>
                          <span><a href="javascript:;">雅安市</a></span>
                          <span><a href="javascript:;">眉山市</a></span>
                          <span><a href="javascript:;">资阳市</a></span>
                          <span><a href="javascript:;">阿坝州</a></span>
                          <span><a href="javascript:;">甘孜州</a></span>
                        </div>
                        <div class="hl-panel hl-area-arr">
                          <span><a href="javascript:;">武侯区</a></span>
                          <span><a href="javascript:;">金牛区</a></span>
                          <span><a href="javascript:;">青羊区</a></span>
                          <span><a href="javascript:;">成华区</a></span>
                          <span><a href="javascript:;">高新区</a></span>
                          <span><a href="javascript:;">锦江区</a></span>
                          <span><a href="javascript:;">郫县</a></span>
                          <span><a href="javascript:;">双流区</a></span>
                          <span><a href="javascript:;">高新西区</a></span>
                          <span><a href="javascript:;">龙泉驿区</a></span>
                          <span><a href="javascript:;">新都区</a></span>
                          <span><a href="javascript:;">温江区</a></span>
                          <span><a href="javascript:;">都江堰市</a></span>
                          <span><a href="javascript:;">彭州市</a></span>
                          <span><a href="javascript:;">青白江区</a></span>
                          <span><a href="javascript:;">崇州市</a></span>
                          <span><a href="javascript:;">金堂县</a></span>
                          <span><a href="javascript:;">新津县</a></span>
                          <span><a href="javascript:;">邛崃市</a></span>
                          <span><a href="javascript:;">大邑县</a></span>
                          <span><a href="javascript:;">浦江县</a></span>
                        </div>
                      </div>
                      <!-- <a class="hl-close" href="javascript:;"></a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="hl-store-prompt hl-fl">
                <b>免运费</b>&nbsp;&nbsp;<span>21:00前完成下单，预计明天&nbsp;（12月12日）&nbsp;送达</span>
              </div>
            </div>
            
            <!-- <div class="hl-dd hl-suppor">
              <span class="hl-shop-name">由&nbsp;<span><a href="" target="_blank">苏宁</a></span>&nbsp;销售和发货，并提供售后服务</span>
              产品详情页：输出联系客服
              <a class="hl-contact-me hl-66" href="#"><i></i>联系客服</a>
            </div> -->
            
            <div class="hl-gift">
              <div class="hl-dt">赠　　品</div>
              <div class="hl-dd"><strong class="hl-f14">赠送1000元优惠券</strong></div>
            </div>
            
            <!-- <div class="hl-support-panel">
              <div class="hl-dt">支　　持</div>
              <div class="hl-dd">
                <span class="hl-yjhx hl-f0">
                  <a href="" class="hl-yjfx">
                    <i></i>以旧换新
                  </a>
                </span>
              </div>
            </div> -->
            <div class="hl-proinfo-color">
              <div class="hl-dt">版　　式</div>
              <div class="hl-dd">
                <ul class="hl-tip-infor hl-clearfix">
                  <!--<li class="hl-selected">
                          <a href="">
                            <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                            <i></i>
                            598升玻璃面板对开
                          </a>
                        </li>-->
                        <script>
                            $(function(){
                                $('.hl-tip-infor li').eq(0).addClass('hl-selected');
                                $('.hl-tip-infor li').click(function(){
                                    $(this).siblings().removeClass('hl-selected');
                                    $(this).addClass('hl-selected');
                                })
                                $('.hl-tip-infor li a').click(function(){
                                    var _banshi = $(this).find('span').text();
                                    $('#banshi').val(_banshi);
                                })
                            })
                        </script>
                        <?php $_from = $this->_var['ban']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'banshi');if (count($_from)):
    foreach ($_from AS $this->_var['banshi']):
?>
                          <li>
                            <a href="javascript:;">
                              <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                              <i></i>
                              <span><?php echo $this->_var['banshi']; ?></span>
                            </a>
                          </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
              </div>
            </div>
            <div class="hl-proinfo-type">
              <div class="hl-dt">颜　　色</div>
              <div class="hl-dd">
                <ul class="hl-color-infor hl-clearfix">
                  <!--<li class="hl-selected">
                          <a href="javascript:;">
                            浅金色
                            <i></i>
                          </a>
                        </li>-->
                        <script>
                            $(function(){
                                $('.hl-color-infor li').eq(0).addClass('hl-selected');
                                $('.hl-color-infor li').click(function(){
                                    $(this).siblings().removeClass('hl-selected');
                                    $(this).addClass('hl-selected');
                                })
                                $('.hl-color-infor li a').click(function(){
                                    var _colors = $(this).find('span').text();
                                    $('#colors').val(_colors);
                                })
                            })
                        </script>
                        <?php $_from = $this->_var['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'color');if (count($_from)):
    foreach ($_from AS $this->_var['color']):
?>
                          <li>
                            <a href="javascript:;">
                              <i></i>
                              <span><?php echo $this->_var['color']; ?></span>
                            </a>
                          </li>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
              </div>
            </div>

            <div class="hl-dt">数　　量</div>
            <div class="hl-dd hl-buy-count hl-f0">
              <a href="javascript:;" class="hl-minus hl-minus-disable"></a>
              <input type="text" class="hl-buy-num hl-tc" value="1" />
              <a href="javascript:;" class="hl-plus"></a>
              
              <span class="hl-promotion">正在促销</span>
              
              <!-- <span class="hl-promotion">正在促销，每人限购<i>2</i>件</span> -->
            </div>
          </div>
          <div class="hl-main-btns hl-f0 hl-tc">
            
            <!-- <a href="javascript:;" class="hl-just-team">马上参团</a> -->
            
            <?php if ($this->_var['seckill']['cur_status'] == 0): ?>
                <a href="javascript:;" class="hl-add-cart">即将开始</a>
            <?php elseif ($this->_var['seckill']['cur_status'] == 1): ?>
                <form action="seckill.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
                <input name="number" type="hidden" class="inputBg" id="number" value="1" size="4" />
                <input type="hidden" name="seckill_id" value="<?php echo $this->_var['seckill']['seckill_id']; ?>" />
                <input type="submit" class="hl-buy-now" value="立即购买" />
                <!--<input type="submit" class="hl-buy-now" value="加入购物车" />-->
            </form>
            <?php else: ?>
                <a href="javascript:;" class="hl-add-cart">已结束</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="hl-product-content hl-clearfix">
      <div class="hl-aside hl-fl">
        <h2 class="hl-f20 hl-4a">单品推荐</h2>
        <ul class="hl-aside-list">
            <?php $_from = $this->_var['linkGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('keys', 'linkitem');if (count($_from)):
    foreach ($_from AS $this->_var['keys'] => $this->_var['linkitem']):
?>
                <li>
                    <a class="hl-p-img hl-disp-b" href=""><img src="<?php echo $this->_var['linkitem']['goods_thumb']; ?>" alt=""></a>
                    <div class="hl-price">
                      <strong class="hl-disp-b hl-ups hl-f24">&yen; <?php echo $this->_var['linkitem']['shop_price']; ?></strong>
                      <a class="hl-name hl-f14 hl-72" href=""><?php echo $this->_var['linkitem']['goods_name']; ?></a>
                    </div>
                  </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <!--<li>
            <a class="hl-p-img hl-disp-b" href=""><img src="themes/henli/inc/img/hl-product-8.png" alt=""></a>
            <div class="hl-price">
              <strong class="hl-disp-b hl-ups hl-f24">&yen; 16988.00</strong>
              <a class="hl-name hl-f14 hl-72" href="">西门子(SIEMENS) BCD-610W(KA92NV03TI) 610升 对开门冰箱(浅金</a>
            </div>
          </li>
          <li>
            <a class="hl-p-img hl-disp-b" href=""><img src="themes/henli/inc/img/hl-product-8.png" alt=""></a>
            <div class="hl-price">
              <strong class="hl-disp-b hl-ups hl-f24">&yen; 16988.00</strong>
              <a class="hl-name hl-f14 hl-72" href="">西门子(SIEMENS) BCD-610W(KA92NV03TI) 610升 对开门冰箱(浅金</a>
            </div>
          </li>
          <li>
            <a class="hl-p-img hl-disp-b" href=""><img src="themes/henli/inc/img/hl-product-8.png" alt=""></a>
            <div class="hl-price">
              <strong class="hl-disp-b hl-ups hl-f24">&yen; 16988.00</strong>
              <a class="hl-name hl-f14 hl-72" href="">西门子(SIEMENS) BCD-610W(KA92NV03TI) 610升 对开门冰箱(浅金</a>
            </div>
          </li>-->
        </ul>
      </div>
      <div class="hl-product-detail hl-fr">
        <div class="hl-tab-wrap">
          <ul class="hl-tab-trigger hl-f18">
            <li class="hl-selected"><a href="javascript:;">产品详情</a></li>
            <li><a href="javascript:;">产品参数</a></li>
          </ul>
        </div>
        <div class="hl-product-container">
          <div class="hl-tab-con-item hl-curr">
            <div class="hl-tab-con hl-mb15">
              <div class="hl-hd hl-f12">
                <h2 class="hl-f12 hl-66 hl-fl">核心参数</h2>
                <a class="hl-fr" href="">更多参数</a>
              </div>
              <ul class="hl-tab-table hl-f12 hl-clearfix">
                <?php $_from = $this->_var['attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attributev');if (count($_from)):
    foreach ($_from AS $this->_var['attributev']):
?>
                    <li><?php echo $this->_var['attributev']['name']; ?>：<?php echo $this->_var['attributev']['value']; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php $_from = $this->_var['lnk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lnkv');if (count($_from)):
    foreach ($_from AS $this->_var['lnkv']):
?>
                    <li><?php echo $this->_var['lnkv']['name']; ?>：<?php echo $this->_var['lnkv']['value']; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <!--<li>颜色：浅金色</li>
                    <li>面板类型：金属</li>
                    <li>制冷方式：冷风</li>
                    <li>控温方式：电脑控温</li>
                    <li>日耗电量：1.35</li>
                    <li>国家能效等级：2级</li>
                    <li>日冷冻能力：12千克</li>
                    <li>除霜模式：自动</li>
                    <li>总有效容积：610升</li>-->
              </ul>
            </div>
            <div class="hl-product-pics">
              <?php echo $this->_var['seckill']['seckill_content']; ?>
            </div>
          </div>
          <div class="hl-tab-con-item">
            <!--<table id="hl-bzqd-tag" class="hl-pro-para-tbl hl-f12">
              <tbody>
                <tr>
                  <th colspan="3">包裹清单</th>
                </tr>
                <tr>
                  <td class="name">包裹清单</td>
                  <td class="hl-val">冰箱x1、说明书x1、合格证x1、使用小常识x1</td>
                  <td class="hl-err"></td>
                </tr>
              </tbody>
            </table>-->
            <table id="hl-item-parameter" class="hl-pro-para-tbl hl-f12">
              <tbody>
                <tr>
                  <th colspan="3">主体参数</th>
                </tr>
                <!--<tr>
                  <td class="name">
                    <div class="name-inner">
                    <span>商品名称</span>
                  </div>
                  </td>
                  <td class="hl-val">西门子冰箱BCD-610W(KA92NV03TI)</td>
                  <td class="hl-err"></td>
                </tr>-->
                <?php $_from = $this->_var['attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attributev');if (count($_from)):
    foreach ($_from AS $this->_var['attributev']):
?>
                    <tr>
                      <td class="name">
                        <div class="name-inner">
                        <span><?php echo $this->_var['attributev']['name']; ?></span>
                      </div>
                      </td>
                      <td class="hl-val"><?php echo $this->_var['attributev']['value']; ?></td>
                      <td class="hl-err"></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <!--<tr>
                <td class="name">
                  <div class="name-inner">
                    <span>品牌</span>
                  </div>
                </td>
                <td class="hl-val"><a href="http://www.suning.com/pinpai/1978-0-0.html" target="_blank">西门子(SIEMENS)</a></td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                <span>型号</span>
                </div>
                </td>
                <td class="hl-val">KA92NV03TI</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                <span>颜色</span>
                </div>
                </td>
                <td class="hl-val">浅金色</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                <span>箱门结构</span>
                </div>
                </td>
                <td class="hl-val">对开门</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                <div class="name-inner">
                <span>系列</span>
                </div>
                </td>
                <td class="hl-val">对开门</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>上市时间</span>
                  </div>
                </td>
                <td class="hl-val">2014年11月</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>开门方式</span>
                  </div>
                </td>
                <td class="hl-val">对开</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                  <span>面板类型</span>
                  </div>
                </td>
                <td class="hl-val">金属</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                  <span>显示屏</span>
                  </div>
                </td>
                <td class="hl-val">LED数码显示</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                  <span>气候类型</span>
                  </div>
                </td>
                <td class="hl-val">热带型（T）,亚热带型（ST）,温带型（N）,亚温带型（SN）</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                  <span>适用家庭</span>
                  </div>
                </td>
                <td class="hl-val">四口及以上</td>
                <td class="hl-err"></td>
              </tr>
              <tr>-->
                <th colspan="3">基本参数</th>
              </tr>
              <!--<tr>
                <td class="name">
                  <div class="name-inner">
                    <span>电压/频率</span>
                  </div>
                </td>
                <td class="hl-val">220V/50Hz</td>
                <td class="hl-err"></td>
              </tr>-->
              <?php $_from = $this->_var['lnk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lnkv');if (count($_from)):
    foreach ($_from AS $this->_var['lnkv']):
?>
                  <tr>
                      <td class="name">
                        <div class="name-inner">
                          <span><?php echo $this->_var['lnkv']['name']; ?></span>
                        </div>
                      </td>
                      <td class="hl-val"><?php echo $this->_var['lnkv']['value']; ?></td>
                      <td class="hl-err"></td>
                    </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <!--<tr>
                <td class="name">
                  <div class="name-inner">
                    <span>制冷方式</span>
                  </div>
                </td>
                <td class="hl-val">风冷</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>控温方式</span>
                  </div>
                </td>
                <td class="hl-val">电脑控温</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>日耗电量</span>
                  </div>
                </td>
                <td class="hl-val">1.35</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>国家能效等级</span>
                    <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                    <div class="pro-para-tip" style="display: none;">
                    <i></i>
                    <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;目前国内销售的空调都有“中国能效标识”（CHINA ENERGY LABEL）字样的彩色标签，为蓝白背景的彩色标识，分为1、2、3共3个等级，等级1表示产品达到国际先进水平，最节电，即耗能最低；等级2表示比较节电；等级3表示产品的能源效率为我国市场的平均水平（旧能效等级分为1-5级分别代表不同的能效等级）
                    </div>
                  </div>
                </td>
                <td class="hl-val">2级</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>变频</span>
                    <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                    <div class="pro-para-tip" style="display: none;">
                      <i></i>
                      <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;能够根据实际需要调整电机的工作频率，达到省电、静音的效果。
                    </div>
                  </div>
                </td>
                <td class="hl-val">变频</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>日冷冻能力</span>
                  </div>
                </td>
                <td class="hl-val">12千克</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>冷冻星级</span>
                    <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                    <div class="pro-para-tip" style="display: none;">
                      <i></i>
                      <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;冰箱的星级符号表示其冷冻室所能达到的温度级别，一星级表示冷冻室温度应不高于-6℃，二星级表示冷冻室温度应不高于-12℃，三星级表示冷冻室温度应不高于-18℃，四星级表示冷冻室温度应不高于-18℃，并且具有对一定量食品的速冻能力。
                    </div>
                  </div>
                </td>
                <td class="hl-val">四星级</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>除霜模式</span>
                  </div>
                </td>
                <td class="hl-val">自动</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                  <span>制冷循环</span>
                </div>
                </td>
                <td class="hl-val">双循环</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                  <span>制冷剂</span>
                </div>
                </td>
                <td class="hl-val">R600a</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>运转音dB(A)</span>
                  </div>
                </td>
                <td class="hl-val">42dB</td>
                <td class="hl-err"></td>
              </tr>-->
              <!--<tr>
                <th colspan="3">功能参数</th>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>是否支持开门转换</span>
                  </div>
                </td>
                <td class="hl-val">不支持</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>童锁功能</span>
                  </div>
                </td>
                <td class="hl-val">有</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
              <td class="name">
                <div class="name-inner">
                  <span>假日功能</span>
                  <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                  <div class="pro-para-tip" style="display: none;">
                    <i></i>
                    <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;当设到假日功能档后，能够保持冷藏温度基本维持在17℃左右，在这种温度下，细菌基本不繁殖，冰箱异味就不会产生。由于保持17℃所需要的能量很低，因此对冰箱的耗电量基本没有影响。当用户长期不在家，无需使用冷藏功能时可以开启假日功能。
                  </div>
                </div>
                </td>
                <td class="hl-val">无</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>吧台</span>
                  </div>
                </td>
                <td class="hl-val">无</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                <div class="name-inner">
                  <span>速冷速冻</span>
                  <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                  <div class="pro-para-tip" style="display: none;">
                    <i></i>
                    <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;速冷速冻功能是指使食物或饮料快速降温至冷藏或冷冻温度，除了能在短时间内对食品进行降温外，速冻功能还能减少肉类食品冷冻过程中细胞水份的丢失
                  </div>
                </div>
                </td>
                <td class="hl-val">有</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>智能类型</span>
                  </div>
                </td>
                <td class="hl-val">非智能</td>
                <td class="hl-err"></td>
              </tr>-->
              <!--<tr>
                <th colspan="3">规格参数</th>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>产品重量</span>
                  </div>
                </td>
                <td class="hl-val">108千克</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>总有效容积</span>
                  </div>
                </td>
                <td class="hl-val">610升</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>冷藏室容积</span>
                  </div>
                </td>
                <td class="hl-val">387升</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>冷冻室容积</span>
                  </div>
                </td>
                <td class="hl-val">223升</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>外形尺寸（宽×深×高</span>
                  </div>
                </td>
                <td class="hl-val">912*714*1756毫米</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
                <td class="name">
                <div class="name-inner">
                  <span>包装尺寸（宽×深×高</span>
                  <a href="javascript:void(0);" name="item_125073744_canshu_shuoming" class="pro-para-help"></a>
                  <div class="pro-para-tip" style="display: none;">
                    <i></i>
                    <a href="javascript:void(0);" class="close">×</a>&nbsp;&nbsp;&nbsp;&nbsp;含外包装的实际尺寸（长*宽*高）
                  </div>
                </div>
                </td>
                <td class="hl-val">975*790*1840毫米</td>
                <td class="hl-err"></td>
              </tr>-->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hl-center hl-server hl-mt100">
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
</div>
<div class="hl-footer hl-f14 hl-44 hl-tc">
  &copy;&nbsp;&nbsp;博西家用电器集团&nbsp;&nbsp;2016&nbsp;&nbsp;|&nbsp;&nbsp;BSH集团是西门子股份公司的商标许可方&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;苏ICP备10003401号
</div>
<script type="text/javascript" src="themes/henli/inc/public/lib/zoom/zoom.js"></script>
<script type="text/javascript" src="themes/henli/inc/public/dev/category-details.js"></script>
</body>
<script type="text/javascript">
    var gmt_end_time = "<?php echo empty($this->_var['seckill']['gmt_end_date']) ? '0' : $this->_var['seckill']['gmt_end_date']; ?>";
    <?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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