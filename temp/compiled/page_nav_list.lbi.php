<div class="hl-nav-list">
  <a href="user.php?act=order_list" class="hl-nav-item <?php if ($this->_var['active'] == 'order_list'): ?>active<?php endif; ?>">全部订单</a>
  <a href="user.php?act=profile" class="hl-nav-item <?php if ($this->_var['active'] == 'profile'): ?>active<?php endif; ?>">修改密码</a>
  <a href="flow.php" class="hl-nav-item <?php if ($this->_var['active'] == 'shopping_car'): ?>active<?php endif; ?>">我的购物车</a>
  <a href="user.php?act=address_list" class="hl-nav-item <?php if ($this->_var['active'] == 'address_list'): ?>active<?php endif; ?>">修改收货地址</a>
  <a href="user.php?act=order_activity&type=1" class="hl-nav-item <?php if ($this->_var['active'] == 'order_group'): ?>active<?php endif; ?>">团购订单</a>
  <a href="user.php?act=order_activity&type=2" class="hl-nav-item <?php if ($this->_var['active'] == 'order_seckill'): ?>active<?php endif; ?>">秒杀订单</a>
  <a href="user.php?act=pro_list&type=1" class="hl-nav-item <?php if ($this->_var['active'] == 'pro_buy'): ?>active<?php endif; ?>">已购买到的商品</a> 
  <a href="user.php?act=pro_list&type=2" class="hl-nav-item <?php if ($this->_var['active'] == 'pro_pay'): ?>active<?php endif; ?>">待付款商品</a>
<<<<<<< HEAD
  <a href="guaguaka.php" class="hl-nav-item <?php if ($this->_var['active'] == 'activity_list'): ?>active<?php endif; ?>">可参与的活动</a>
=======
  <a href="user.php?act=activity_list" class="hl-nav-item <?php if ($this->_var['active'] == 'activity_list'): ?>active<?php endif; ?>">可参与的活动</a>
>>>>>>> 783b96818cca0461bde7289660cd94dd20103648
  <a href="user.php?act=activity_msg" class="hl-nav-item <?php if ($this->_var['active'] == 'activity_msg'): ?>active<?php endif; ?>">活动消息</a>
</div>