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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header_user.lbi'); ?>

<?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="hl-container clearfix">  
  
  <aside class="hl-content-left">
    <?php echo $this->fetch('library/page_nav_list.lbi'); ?>
  </aside>
  
  
  <div class="hl-content-right">
    
    <div class="hl-order">
      <div class="hl-order-header hl-fs-12">
        <span class="hl-order-header-item active">购物车详情</span>
      </div>
      
      <table class="table hl-order-detail">
        <thead>
          <tr >
            <th width="5%"></th>
            <th width="30%" class="hl-order-proname">商品名称</th>
            <th width="10%">价格</th>
            <th width="15%">数量</th>
            <th width="10%">运费</th>
            <th width="10%">礼品</th>
            <th width="20%">交易操作</th>
          </tr>
        </thead>
        <tbody>
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <tr class="hl-has-pro"> 
            <td><input type="checkbox" value="<?php echo $this->_var['goods']['rec_id']; ?>"></td>
            <td>
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
              <div class="hl-order-pro">
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="hl-order-pro-img"><img style="width:100px; height:150px;" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a>
                <div class="pull-left hl-order-pro-des" >
                  <div><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                  <div><?php echo nl2br($this->_var['goods']['goods_attr']); ?></div>
                </div>
              </div>
              <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                    <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                      <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              <?php else: ?>
                <?php echo $this->_var['goods']['goods_name']; ?>
              <?php endif; ?>
            </td>
            <td><span>&yen;</span><span class="hl-price"><?php echo $this->_var['goods']['goods_price']; ?></span><input type="hidden" class="market_price" value="<?php echo $this->_var['goods']['market_price']; ?>" /></td>
            <td>
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                <div class="hl-counter clearfix " onclickss="location.href='flow.php?step=clear'">
                  <span class="hl-counter-sub">-</span>
                  <input class="hl-counter-num" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" >
                  <span class="hl-counter-add">+</span>
                </div>
                <span class="hl-prostate">有货</span>
                <?php elseif ($this->_var['goods']['is_on_sale'] < 1): ?>
                <?php echo $this->_var['goods']['goods_number']; ?>
                <div class="hl-counter clearfix hl-relative" onclickss="location.href='flow.php?step=clear'">
                  <span class="hl-shade"></span>
                  <span class="hl-counter-sub">-</span>
                  <input class="hl-counter-num" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" >
                  <span class="hl-counter-add">+</span>
                </div>
                <span class="hl-prostate">已下架</span>
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_number']; ?>
                <div class="hl-counter clearfix hl-relative" onclickss="location.href='flow.php?step=clear'">
                  <span class="hl-shade"></span>
                  <span class="hl-counter-sub">-</span>
                  <input class="hl-counter-num" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" >
                  <span class="hl-counter-add">+</span>
                </div>
                <span class="hl-prostate">有货</span>
                <?php endif; ?>
            </td>
            <td>无</td>
            <td>无</td>
            <td><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
                <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_to_collect']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop_to_collect']; ?></a>
                <?php endif; ?>            </td>
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </tbody>
      </table>
      
      
      <div class="hl-order-pay">
        <div class="checkbox">
          <label><input type="checkbox" id="hl-checked-all" > 全选 </label>
        </div>
        <div class="hl-order-option">
          <a href="flow.php?step=drop_goods" onclick="return drop_goods(this);">删除选中商品</a>
          <a href="flow.php?step=drop_to_collect" onclick="return drop_to_collect(this);">移动到我的关注</a>
          <a href="javascript:if (confirm('确定清除已经下架商品?')) location.href='flow.php?step=clear_goods_down';">清除下架商品</a>
        </div>
         
        <div class="hl-order-price">
          <div class="hl-order-select">
            已选择商品
            <span class="hl-red hl-bold hl-order-pro-num">0</span>件
          </div>
          <div class="hl-order-total">
            <div class="hl-order-fact">
              <span class="hl-order-price-notice">总价：</span>
              <span class="hl-red hl-bold hl-fs-15">&yen;</span>
              <span class="hl-order-money hl-red hl-fs-15 hl-bold">0.00</span>
              <img src="" alt="">
            </div>
            <div class="hl-order-save">
              <span class="hl-order-price-notice">以节约：</span>
              <span class="hl-fs-8 hl-bold hl-gray hl-fs-15" >&yen;</span>
              <span class="hl-order-free hl-bold hl-gray hl-fs-15">0.00</span>
            </div>
          </div>
          <a class="hl-order-settle hl-bg-red hl-white hl-fs-15" href="">去结算</a>
        </div>
      </div>
      
    </div>
    
  </div>
  
</div>





</div>
<br />
<br />
<br />
<br />
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
