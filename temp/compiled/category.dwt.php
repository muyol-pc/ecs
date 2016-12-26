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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.3.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="hl-column hl-category-banner hl-mb40">
  <img src="themes/henli/images/hl-category-img.png" alt=""/>
</div>

<div class="hl-container">
  <div class="hl-center">
    <div class="hl-filter">
      <div class="hl-filter-wrap">
        <div class="hl-key">品牌</div>
        <div class="hl-value">
          <div class="hl-band-logos">
<?php echo print_r($this->_var['attrs_9'],true); ?>
            <!--
              选中效果：hl-curr
              描述：点击刷新页面添加hl-curr
             -->
            <ul>
              <?php $_from = $this->_var['brand_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
              <li style="margin:0 10px;"><a href="">
              <input type="hidden" name="brandids" id="brandids" value="<?php echo $this->_var['brand']['brand_id']; ?>"/>
              <?php if ($this->_var['brand']['brand_logo']): ?><img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" width="107" height="50" alt="<?php echo $this->_var['brand']['brand_name']; ?>" title="<?php echo $this->_var['brand']['brand_name']; ?>">
                  <?php else: ?><?php echo $this->_var['brand']['brand_name']; ?><?php endif; ?>
              </a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </ul>
          </div>
        </div>
      </div>
      <!--
        1.所有自定义属性分类列别都在$attrs_ok
        2. 顺序一次是   产品类型（板式），容积量，价格区间，制冷方式，控温方式，变频，能效等级，适用家庭，制冷循环
      -->
      <div class="hl-filter-wrap">
        <div class="hl-key"><?php echo $this->_var['attrs_ok']['0']['attr_name']; ?></div>
        <div class="hl-value hl-clearfix">
          <!--
            选中效果：hl-curr
            描述：点击刷新页面添加hl-curr
           -->
           
          <!-- <ul class="hl-v-list hl-tc">
            <li class="hl-curr"><a class="hl-type-1" href="">双开门</a></li>
            <li><a class="hl-type-2" href="">多门</a></li>
            <li><a class="hl-type-3" href="">三门</a></li>
            <li class="hl-curr"><a class="hl-type-4" href="">双门</a></li>
          </ul> -->
          <ul class="hl-v-list hl-tc">
        <?php $_from = $this->_var['attrs_ok']['0']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
        <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'a_val');if (count($_from)):
    foreach ($_from AS $this->_var['a_val']):
?>
            <li class=""><a class="hl-type-1" href=""><?php echo $this->_var['a_val']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>

        </div>
      </div>
      <!--
        点击多选：hl-all-more
        描述：点击多选按钮触发多选
        点击：hl-selected
        描述：选中多项
      -->
      <div class="hl-filter-wrap hl-multiple">
        <div class="hl-key"><?php echo $this->_var['attrs_ok']['1']['attr_name']; ?></div>
        <div class="hl-value">
        
          <!-- <div class="hl-v-group">
            <a href=""><b></b><span>601升以上</span></a>
            <a href=""><b></b><span>501-600升</span></a>
            <a href=""><b></b><span>401-500升</span></a>
            <a href=""><b></b><span>301-400升</span></a>
            <a href=""><b></b><span>251-300升</span></a>
            <a href=""><b></b><span>191-250升</span></a>
          </div> -->
          <div class="hl-v-group">
          <?php $_from = $this->_var['attrs_ok']['1']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
        <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'b_val');if (count($_from)):
    foreach ($_from AS $this->_var['b_val']):
?>
            <a href=""><b></b><span><?php echo $this->_var['b_val']; ?></span></a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>

          <!-- <div class="hl-btns hl-tc">
            <a class="hl-confirm hl-f12 disabled" href="javascript:;">确定</a>
            <a class="hl-cancel hl-f12" href="javascript:;">取消</a>
          </div> -->
        </div>
        <!-- <div class="hl-ext">
          <a href="javascript:;">多选</a>
        </div> -->
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key"><?php echo $this->_var['attrs_ok']['2']['attr_name']; ?></div>
        
        <!-- <div class="hl-value">
          <a class="hl-curr" href="">0-2500</a>
          <a href="">2500-4300</a>
          <a href="">4300-7000</a>
          <a href="">7000-11300</a>
          <a href="">11300-19000</a>
          <a href="">19000以上</a>
        </div>
         -->
        <div class="hl-value">
        <?php $_from = $this->_var['attrs_ok']['2']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
        <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'c_val');if (count($_from)):
    foreach ($_from AS $this->_var['c_val']):
?>
          <a href=""><?php echo $this->_var['c_val']; ?></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>

        <!-- <div class="hl-price-set hl-f0">
          <input class="input-txt" autocomplete="off" type="text"/>
          <span>-</span>
          <input class="input-txt" autocomplete="off" type="text"/>
          <a class="hl-f12" href="javascript:;">确定</a>
        </div> -->
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key"><?php echo $this->_var['attrs_ok']['3']['attr_name']; ?></div>
        
        <!-- <div class="hl-value">
          <a class="hl-curr" href="">冷风</a>
          <a href="">直冷</a>
          <a href="">风直冷</a>
        </div> -->
        <div class="hl-value">
        <?php $_from = $this->_var['attrs_ok']['3']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
        <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'd_val');if (count($_from)):
    foreach ($_from AS $this->_var['d_val']):
?>
          <a href=""><?php echo $this->_var['d_val']; ?></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>

        <!-- <div class="hl-ext">
          <a href="javascript:;">多选</a>
        </div> -->
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key">其他选项</div>
        <div class="hl-value hl-clearfix">
          
          <style>
            .hl-v-tab .hl-son-list{display: none;}
            .hl-tab-cont .hl-tab-cont-item .hl-v-item a:hover{color:#ff8a00;}
            .hl-son-list
          </style>
          <script>
          var _timeout;
              $(function(){
                $('.hl-v-tab li').hover(function(){
                    $('.hl-tab-cont .hl-tab-cont-item').show();
                    $('.hl-tab-cont .hl-son-list').html($(this).find('.hl-son-list').html());
                },function(){
                    clearTimeout(_timeout);
                    _timeout=setTimeout(function(){
                        $('.hl-tab-cont .hl-tab-cont-item').hide();
                    },2000);
                })
                $('.hl-tab-cont .hl-tab-cont-item').hover(function(){
                    clearTimeout(_timeout);
                    $(this).show();
                },function(){
                    $(this).hide();
                })
                $('.hl-v-tab li').each(function(k,v){
                    if ($(v).hasClass('hl-open')) {
                        $('.hl-tab-cont .hl-tab-cont-item').show();
                        $('.hl-tab-cont .hl-son-list').html($(v).find('.hl-son-list').html());
                    }
                })
              })
          </script>
          <ul class="hl-v-tab">
            <li class="hl-open">
                <a href="javascript:;"><?php echo $this->_var['attrs_ok']['4']['attr_name']; ?></a>
                <ul class="hl-son-list clearall">
                    <?php $_from = $this->_var['attrs_ok']['4']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
                    <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'e_val');if (count($_from)):
    foreach ($_from AS $this->_var['e_val']):
?>
                    <li><a href=""><?php echo $this->_var['e_val']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </li>
            <li>
                <a href=""><?php echo $this->_var['attrs_ok']['5']['attr_name']; ?></a>
                <ul class="hl-son-list clearall">
                    <?php $_from = $this->_var['attrs_ok']['5']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
                    <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'f_val');if (count($_from)):
    foreach ($_from AS $this->_var['f_val']):
?>
                    <li><a href=""><?php echo $this->_var['f_val']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </li>
            <li>
                <a href=""><?php echo $this->_var['attrs_ok']['6']['attr_name']; ?></a>
                <ul class="hl-son-list clearall">
                    <?php $_from = $this->_var['attrs_ok']['6']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
                    <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'g_val');if (count($_from)):
    foreach ($_from AS $this->_var['g_val']):
?>
                    <li><a href=""><?php echo $this->_var['g_val']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </li>
            <li>
                <a href=""><?php echo $this->_var['attrs_ok']['7']['attr_name']; ?></a>
                <ul class="hl-son-list clearall">
                    <?php $_from = $this->_var['attrs_ok']['7']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
                    <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'h_val');if (count($_from)):
    foreach ($_from AS $this->_var['h_val']):
?>
                    <li><a href=""><?php echo $this->_var['h_val']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </li>
            <li>
                <a href=""><?php echo $this->_var['attrs_ok']['8']['attr_name']; ?></a>
                <ul class="hl-son-list clearall">
                    <?php $_from = $this->_var['attrs_ok']['8']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'att_val');if (count($_from)):
    foreach ($_from AS $this->_var['att_val']):
?>
                    <?php $_from = $this->_var['att_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'i_val');if (count($_from)):
    foreach ($_from AS $this->_var['i_val']):
?>
                    <li><a href=""><?php echo $this->_var['i_val']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </li>
          </ul>
        </div>
        <div class="hl-tab-cont">
          <div class="hl-tab-cont-item">
            <div class="hl-v-item hl-f12">
              <ul class="hl-son-list">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php echo print_r($this->_var['promotion_goods'],true); ?>
  <div class="hl-center hl-goods-main hl-clearfix">
    <!--
      hl-aside模块可分离出来，详情页可以使用
    -->
    <div class="hl-aside hl-fl">
      <h2 class="hl-f20 hl-4a">单品推荐</h2>
      <ul class="hl-aside-list">
      <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li>
          <a class="hl-p-img hl-disp-b" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" style="height:210px;"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="" height="210"></a>
          <div class="hl-price">
            <strong class="hl-disp-b hl-ups hl-f24"><?php echo $this->_var['goods']['shop_price']; ?></strong>
            <a class="hl-name hl-f14 hl-72" href=""><?php echo $this->_var['goods']['name']; ?></a>
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <li>
          <a class="hl-p-img hl-disp-b" href="goods.php?id=" style="height:210px;"><img src="/images/201612/thumb_img/1_thumb_G_1482241662222.png" alt="" height="210"></a>
          <div class="hl-price">
            <strong class="hl-disp-b hl-ups hl-f24">￥6988元</strong>
            <a class="hl-name hl-f14 hl-72" href="">西门子（SIEMENS） BCD-610W(KA92NV02TI) 610升 变频风冷无霜 对开门冰箱 LED显示 速冷速冻（白色）</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="hl-main-cont hl-fl">
      <ul class="hl-goods-list hl-clearfix">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <li>
                <a class="hl-p-img hl-disp-b hl-tc" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt=""></a>
                <div class="hl-price hl-mt10">
                  <strong class="hl-disp-b hl-ups hl-f24">价格暂定</strong>
                  <a class="hl-name hl-f14 hl-72" href=""><?php echo $this->_var['goods']['goods_name']; ?></a>
                </div>
              </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </ul>
      <div class="hl-page hl-f0 hl-tr">
        <a class="hl-prev" href="javascript:;">&lt;</a>
        <a href="javascript:;">1</a>
        <a class="hl-curr" href="javascript:;">2</a>
        <a href="javascript:;">3</a>
        <a class="hl-next" href="javascript:;">&gt;</a>
      </div>
    </div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
