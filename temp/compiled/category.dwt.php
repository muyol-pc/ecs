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
            <!-- 
              选中效果：hl-curr
              描述：点击刷新页面添加hl-curr
             -->
            <ul>
              <li class="hl-curr"><a href=""><img src="themes/henli/images/hl-band-1.png" alt=""></a></li>
              <li><a href=""><img src="themes/henli/images/hl-band-2.png" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key">产品类型</div>
        <div class="hl-value hl-clearfix">
          <!-- 
            选中效果：hl-curr
            描述：点击刷新页面添加hl-curr
           -->
          <ul class="hl-v-list hl-tc">
            <li class="hl-curr"><a class="hl-type-1" href="">双开门</a></li>
            <li><a class="hl-type-2" href="">多门</a></li>
            <li><a class="hl-type-3" href="">三门</a></li>
            <li class="hl-curr"><a class="hl-type-4" href="">双门</a></li>
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
        <div class="hl-key">总容积</div>
        <div class="hl-value">
          <div class="hl-v-group">
            <a href=""><b></b><span>601升以上</span></a>
            <a href=""><b></b><span>501-600升</span></a>
            <a href=""><b></b><span>401-500升</span></a>
            <a href=""><b></b><span>301-400升</span></a>
            <a href=""><b></b><span>251-300升</span></a>
            <a href=""><b></b><span>191-250升</span></a>
          </div>
          <div class="hl-btns hl-tc">
            <a class="hl-confirm hl-f12 disabled" href="javascript:;">确定</a>
            <a class="hl-cancel hl-f12" href="javascript:;">取消</a>
          </div>
        </div>
        <div class="hl-ext">
          <a href="javascript:;">多选</a>
        </div>
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key">价格</div>
        <div class="hl-value">
          <a class="hl-curr" href="">0-2500</a>
          <a href="">2500-4300</a>
          <a href="">4300-7000</a>
          <a href="">7000-11300</a>
          <a href="">11300-19000</a>
          <a href="">19000以上</a>
        </div>
        <div class="hl-price-set hl-f0">
          <input class="input-txt" autocomplete="off" type="text"/>
          <span>-</span>
          <input class="input-txt" autocomplete="off" type="text"/>
          <a class="hl-f12" href="javascript:;">确定</a>
        </div>
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key">制冷方式</div>
        <div class="hl-value">
          <a class="hl-curr" href="">冷风</a>
          <a href="">直冷</a>
          <a href="">风直冷</a>
        </div>
        <div class="hl-ext">
          <a href="javascript:;">多选</a>
        </div>
      </div>
      <div class="hl-filter-wrap">
        <div class="hl-key">其他选项</div>
        <div class="hl-value hl-clearfix">
          
          <ul class="hl-v-tab">
            <li class="hl-open"><a href="">控温方式</a></li>
            <li><a href="">变频</a></li>
            <li><a href="">国家能效等级</a></li>
            <li><a href="">适用家庭</a></li>
            <li><a href="">制冷循环</a></li>
          </ul>
        </div>
        <div class="hl-tab-cont">
          <div class="hl-tab-cont-item">
            <div class="hl-v-item hl-f12">
              <ul>
                <li><a href="">恒温</a></li>
                <li><a href="">变频</a></li>
                <li><a href="">自然</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
          <a class="hl-p-img hl-disp-b" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt=""></a>
          <div class="hl-price">
            <strong class="hl-disp-b hl-ups hl-f24">价格暂定</strong>
            <a class="hl-name hl-f14 hl-72" href=""><?php echo $this->_var['goods']['goods_name']; ?></a>
          </div>
        </li>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
