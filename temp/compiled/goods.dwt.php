<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/henli/app.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js')); ?>
<script type="text/javascript"  src="js/action.js"></script>
<script type="text/javascript" src="themes/henli/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="hl-container">
  <!-- <div class="hl-center hl-crumbs hl-f14">
    <strong class="hl-simsun hl-fwn">您当前的位置 : </strong>
    <span class="hl-simsun"><a href="">首页</a></span>
    <span class="hl-simsun">&nbsp;&gt;&nbsp;<a href="">活动专区</a>&nbsp;&gt;&nbsp;<a href="">秒杀</a></span>
    <span class="hl-simsun hl-there">&nbsp;&gt;&nbsp;<a href="">西门子</a></span>
  </div> -->
  <div class="hl-center">

    <div class="hl-product-intro hl-mb30 hl-clearfix">
      <div class="hl-preview hl-fl hl-fs-12">
        
        <div class="hl-banner hl-tc" style="height: 350px;">
          <ul>
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic');if (count($_from)):
    foreach ($_from AS $this->_var['pic']):
?>
            <li><img src="<?php echo $this->_var['pic']['img_url']; ?>" alt=""></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>

        <br>
        
        <div class="hl-thumb" style="height:100px;">
          <span class="hl-arrow-l"></span>
          <span class="hl-arrow-r"></span>
          <ul class="hl-text-c hl-clearfix">
            <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['pic']):
?>
            <li style="width: 33.33%;" <?php if ($this->_var['key'] == 0): ?>class="active"<?php endif; ?>><img src="<?php echo $this->_var['pic']['img_url']; ?>" alt=""></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <div class="hl-product-main hl-fl">
        <div class="hl-intro hl-mb10">
          <h1 class="hl-f18 hl-fwn hl-69"> <?php echo $this->_var['goods']['goods_style_name']; ?></h1>
          
          <!-- <div class="hl-ad hl-ff hl-f20">
            <span class="hl-fl hl-s">团购特惠</span>
            <span class="hl-fr hl-f18">已有10人参团，还差3人即可享受优惠</span>
          </div> -->
          
          <!-- <div class="hl-ad hl-ff hl-f20">
            <span class="hl-fl hl-clock">特价秒杀</span>
            <span class="hl-fr hl-cut-time hl-f18">距结束<b class="hl-day">3</b>天<b class="hl-hours">10</b>时<b class="hl-minutes">25</b>分<b class="hl-second">38</b>秒</span>
          </div> -->
        </div>
        <div class="hl-summary">
          
          <!-- <div class="hl-price hl-team-buy hl-f18">
          团购价 <strong class="hl-f30 hl-fmr">&yen; 6988.00</strong>
            <span class="hl-old-price hl-f16">原&nbsp;&nbsp;&nbsp;价：<b>&yen;8988.00</b></span>
          </div> -->
          
          <!-- <div class="hl-price hl-cost hl-f18">
            价格 <strong class="hl-f30 hl-fmr">&yen; 6988.00</strong>
          </div> -->
          
          <div class="hl-price hl-f18 hl-shop-price">
            价格 <strong class="hl-f30 hl-fmr"><?php echo $this->_var['goods']['shop_price']; ?></strong>元
          </div>
          <div class="hl-stock hl-f12 hl-66 hl-mb10">
            <div>
              <div class="hl-dt">送　　至</div>
              <div class="hl-dd hl-clearfix">
                
                <div class="hl-store-selector hl-fl">

                </div>
                <div class="hl-store-prompt hl-fl">
                  <b>免运费</b>&nbsp;&nbsp;<span>21:00前完成下单，预计明天&nbsp;（12月12日）&nbsp;送达</span>
                </div>
              </div>
            </div>
            
            <!-- <div class="hl-dd hl-suppor">
              <span class="hl-shop-name">由&nbsp;<span><a href="" target="_blank">苏宁</a></span>&nbsp;销售和发货，并提供售后服务</span>
              产品详情页：输出联系客服
              <a class="hl-contact-me hl-66" href="#"><i></i>联系客服</a>
            </div> -->
            
            <!--<div class="hl-gift">
              <div class="hl-dt">赠　　品</div>
              <div class="hl-dd"><strong class="hl-f14">赠送1000元优惠券</strong></div>
            </div>-->
            <div class="">
              <div class="hl-dt">支　　持</div>
              <div class="hl-dd">
              <ul><li class="hl-yjhx hl-selected hl-pro-attr"><a href="" class="hl-yjfx">
                    <i>以旧换新</i>
                  </a></li></ul>
              </div>
            </div>
            
            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
            <div class="">
              <div class="hl-dt"><?php echo $this->_var['attr']['name']; ?></div>
              <div class="hl-dd">
              <ul class="hl-tip-infor hl-clearfix">
                <?php $_from = $this->_var['attr']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <li class="hl-pro-attr <?php if ($this->_var['key'] == 0): ?>hl-selected<?php else: ?>hl-disabled<?php endif; ?>" price='<?php echo $this->_var['value']['price']; ?>' id="<?php echo $this->_var['value']['id']; ?>"><a href="">
                  <img src="themes/henli/inc/img/hl-icon-img.jpg" alt="">
                      <i></i>
                      <?php echo $this->_var['value']['label']; ?>
                </a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
              </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<!--             <div class="">
              <div class="hl-dt">版　　式</div>
              <div class="hl-dd">
                <ul class="hl-tip-infor hl-clearfix">
                  <li class="hl-selected hl-pro-attr" value="banshi_1">
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li class="hl-disabled">
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li><li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li><li>
                    <a href="">
                      <img src="themes/henli/inc/img/hl-icon-img.jpg" alt=""/>
                      <i></i>
                      598升玻璃面板对开
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="">
              <div class="hl-dt">颜　　色</div>
              <div class="hl-dd">
                <ul class="hl-color-infor hl-clearfix">
                  <li class="hl-selected hl-pro-attr" value="color_1">
                    <a href="javascript:;">
                      浅金色
                      <i></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      浅金色
                      <i></i>
                    </a>
                  </li>
                  <li class="hl-disabled">
                    <a href="javascript:;">
                      浅金色
                      <i></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> -->
            <div>
              <div class="hl-dt">数　　量</div>
              <div class="hl-dd hl-buy-count hl-f0">
                <div class="hl-counter clearfix" style="width:100px;float: left;">
                      <span class="hl-counter-sub hl-fs-20">-</span>
                      <input class="hl-counter-num" value="1" >
                      <span class="hl-counter-add hl-fs-20">+</span>
                    </div>
                
                <span class="hl-promotion">正在促销</span>
                
                <!-- <span class="hl-promotion">正在促销，每人限购<i>2</i>件</span> -->
              </div>
            </div>

          </div>
          <div class="hl-main-btns hl-f0 hl-tc">
            
            <!-- <a href="javascript:;" class="hl-just-team">马上参团</a> -->
            
            <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="hl-buy-now">立即购买</a>
            <a href="javascript:addToCart2(<?php echo $this->_var['goods']['goods_id']; ?>)" class="hl-add-cart">加入购物车</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hl-product-content hl-clearfix">
      <div class="hl-aside hl-fl">
        <h2 class="hl-f20 hl-4a">单品推荐</h2>
        <ul class="hl-aside-list">
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_07809200_1482762646');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_07809200_1482762646']):
?>
          <li>
            <a class="hl-p-img hl-disp-b" href="goods.php?id=<?php echo $this->_var['goods_0_07809200_1482762646']['id']; ?>"><img src="<?php echo $this->_var['goods_0_07809200_1482762646']['goods_img']; ?>" alt=""></a>
            <div class="hl-price">
             价格暂定
              <strong class="hl-disp-b hl-ups hl-f24">
               <?php if ($this->_var['goods_0_07809200_1482762646']['promote_price'] != ""): ?>
      价格暂定
       <?php else: ?>
      价格暂定
      <?php endif; ?>
      </strong>
              <a class="hl-name hl-f14 hl-72" href="<?php echo $this->_var['goods_0_07809200_1482762646']['url']; ?>"><?php echo $this->_var['goods_0_07809200_1482762646']['short_style_name']; ?></a>
            </div>
          </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <!-- <li>
            <a class="hl-p-img hl-disp-b" href=""><img src="themes/henli/img/hl-product-8.png" alt=""></a>
            <div class="hl-price">
              <strong class="hl-disp-b hl-ups hl-f24">&yen; 16988.00</strong>
              <a class="hl-name hl-f14 hl-72" href="">西门子(SIEMENS) BCD-610W(KA92NV03TI) 610升 对开门冰箱(浅金</a>
            </div>
          </li>
          <li>
            <a class="hl-p-img hl-disp-b" href=""><img src="themes/henli/img/hl-product-8.png" alt=""></a>
            <div class="hl-price">
              <strong class="hl-disp-b hl-ups hl-f24">&yen; 16988.00</strong>
              <a class="hl-name hl-f14 hl-72" href="">西门子(SIEMENS) BCD-610W(KA92NV03TI) 610升 对开门冰箱(浅金</a>
            </div>
          </li> -->
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
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                <h2 class="hl-f12 hl-66 hl-fl"><?php echo htmlspecialchars($this->_var['key']); ?></h2>
                <a class="hl-fr" href="">更多参数</a>
              </div>
              <ul class="hl-tab-table hl-f12 hl-clearfix">
               <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                <li><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                <!-- <li>面板类型：金属</li>
                <li>制冷方式：冷风</li>
                <li>控温方式：电脑控温</li>
                <li>日耗电量：1.35</li>
                <li>国家能效等级：2级</li>
                <li>日冷冻能力：12千克</li>
                <li>除霜模式：自动</li>
                <li>总有效容积：610升</li> -->
              </ul>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <style>
            .hl-product-pics td{padding:0;border:0;}
            .hl-product-pics tr{border:0;}
            </style>
            <div class="hl-product-pics" style="overflow:hidden;">
            <?php echo $this->_var['goods']['goods_desc']; ?>
            </div>
          </div>
          <div class="hl-tab-con-item">
            <table id="hl-bzqd-tag" class="hl-pro-para-tbl hl-f12">
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
            </table>
            <table id="hl-item-parameter" class="hl-pro-para-tbl hl-f12">
              <tbody>
                <tr>
                  <th colspan="3">主体参数</th>
                </tr>
                <tr>
                  <td class="name">
                    <div class="name-inner">
                    <span>商品名称</span>
                  </div>
                  </td>
                  <td class="hl-val">西门子冰箱BCD-610W(KA92NV03TI)</td>
                  <td class="hl-err"></td>
                </tr>
              <tr>
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
              <tr>
                <th colspan="3">基本参数</th>
              </tr>
              <tr>
                <td class="name">
                  <div class="name-inner">
                    <span>电压/频率</span>
                  </div>
                </td>
                <td class="hl-val">220V/50Hz</td>
                <td class="hl-err"></td>
              </tr>
              <tr>
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
              </tr>
              <tr>
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
              </tr>
              <tr>
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
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
