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

<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,common.js,user.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_top.lbi'); ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="hl-container clearfix">
      
      <aside class="hl-content-left">
        <ul class="hl-nav-list">
          <li class="hl-nav-item active">全部订单</li>
          <li class="hl-nav-item">修改密码</li>
          <li class="hl-nav-item">我的购物车</li>
          <li class="hl-nav-item">修改收货地址</li>
          <li class="hl-nav-item">团购订单</li>
          <li class="hl-nav-item">秒杀订单</li>
          <li class="hl-nav-item">已购买到的商品</li>
          <li class="hl-nav-item">代付款商品</li>
          <li class="hl-nav-item">可参与的活动</li>
          <li class="hl-nav-item">活动消息</li>
        </ul>
      </aside>
      
      <div class="hl-content-right">
        <div class="hl-order">
          <div class="hl-order-header hl-fs-15">
            <span class="hl-order-header-item active">所有订单</span>
            <span class="hl-order-header-item">代付款</span>
            <span class="hl-order-header-item">待发货</span>
            <span class="hl-order-header-item">待收货</span>
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
              <!-- <tr class="hl-has-pro">
                <td><input type="checkbox"></td>
                <td><div class="hl-order-pro">
                  <img src="themes/henli/images/pro.jpg" alt="" class="hl-order-pro-img">
                  <div class="pull-left hl-order-pro-des" >
                    <div>sfsdfs</div><div>sdfwfsfsdfs</div>
                  </div>
                </div></td>
                <td><span>￥</span><span class="hl-price">5000.00</span></td>
                <td>
                  <div class="hl-counter clearfix">
                    <span class="hl-counter-sub">-</span>
                    <input class="hl-counter-num" value="10">
                    <span class="hl-counter-add">+</span>
                  </div>
                  <span class="hl-prostate">有货</span>
                </td>
                <td>无</td>
                <td>无</td>
                <td>sdf</td>
              </tr><tr>
                <td><input type="checkbox" class=" " disabled></td>
                <td><div class="hl-order-pro">
                  <img src="themes/henli/images/pro.jpg" alt="" class="hl-order-pro-img">
                  <div class="pull-left hl-order-pro-des" >
                    <div>sfsdfs</div><div>sdfwfsfsdfs</div>
                  </div>
                </div></td>
                <td><span>￥</span><span class="hl-price">5000.00</span></td>
                <td>
                  <div class="hl-counter clearfix hl-relative">
                    <span class="hl-shade"></span>
                    <span class="hl-counter-sub">-</span>
                    <input class="hl-counter-num" value="10">
                    <span class="hl-counter-add">+</span>
                  </div>
                  <span class="hl-prostate">无货</span>
                </td>
                <td>无</td>
                <td>无</td>
                <td>sdf</td>
              </tr> -->
            </tbody>
          </table>

          
          <div class="hl-order-pay">
            <div class="checkbox">
              <label><input type="checkbox" id="hl-checked-all" checked="checked"> 全选 </label>
            </div>
            <div class="hl-order-option">
              <a href="#">删除选中商品</a>
              <a href="#">移动到我的关注</a>
              <a href="#">清除下架商品</a>
            </div>

            <div class="hl-order-price">
              <div class="hl-order-select">
                已选择商品
                <span class="hl-red hl-bold hl-order-pro-num">0</span>件
              </div>
              <div class="hl-order-total">
                <div class="hl-order-fact">
                  <span class="hl-order-price-notice">总价：</span>
                  <span class="hl-red hl-bold">￥</span>
                  <span class="hl-order-money hl-red hl-fs-20 hl-bold">0.00</span>
                  <img src="" alt="">
                </div>
                <div class="hl-order-save">
                  <span class="hl-order-price-notice">以节约：</span>
                  <span class="hl-fs-8 hl-bold hl-gray" >￥</span>
                  <span class=" hl-fs-8 hl-bold hl-gray">0.00</span>
                </div> 
              </div>
              <a class="hl-order-settle hl-bg-red hl-white" href="">去结算</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
