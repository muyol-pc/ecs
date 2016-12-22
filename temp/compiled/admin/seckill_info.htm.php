<!-- $Id: group_buy_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js,../js/utils.js')); ?>

<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- 商品搜索 -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <!-- 分类 -->
    <select name="cat_id"><option value="0"><?php echo $this->_var['lang']['all_cat']; ?></caption><?php echo $this->_var['cat_list']; ?></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0"><?php echo $this->_var['lang']['all_brand']; ?></caption><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
    <!-- 关键字 -->
    <input type="text" name="keyword" size="20" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<form method="post" action="seckill.php?act=insert_update" name="theForm" onsubmit="return validate()" enctype="multipart/form-data">
<div class="main-div">
<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_goods_name']; ?></td>
    <td><select name="goods_id">
      <?php if ($this->_var['seckill']['id']): ?>
      <option value="<?php echo $this->_var['seckill']['goods_id']; ?>"><?php echo $this->_var['seckill']['goods_name']; ?></option>
      <?php else: ?>
      <option value="0"><?php echo $this->_var['lang']['notice_goods_name']; ?></option>
      <?php endif; ?>
    </select>    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_start_date']; ?></td>
    <td>
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['seckill']['start_time']; ?>' readonly="readonly" /><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_end_date']; ?></td>
    <td>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['seckill']['end_time']; ?>' readonly="readonly" /><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_seckill_price']; ?></td>
    <td><input name="seckill_price" type="text" id="seckill_price" value="<?php echo empty($this->_var['seckill']['seckill_price']) ? '0' : $this->_var['seckill']['seckill_price']; ?>" size="30"></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticRestrict');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['label_restrict_amount']; ?></td>
    <td><input type="text" name="number" value="<?php echo empty($this->_var['seckill']['number']) ? '0' : $this->_var['seckill']['number']; ?>" size="30" />
      <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticRestrict"><?php echo $this->_var['lang']['notice_restrict_amount']; ?></span>    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_seckill_img']; ?></td>
    <td><input type="file" name="seckill_img" value="<?php echo $this->_var['seckill']['seckill_img']; ?>" size="30" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_desc']; ?></td>
    <td><?php echo $this->_var['FCKeditor']; ?></td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td>
      <input name="seckill_id" type="hidden" id="seckill_id" value="<?php echo $this->_var['seckill']['seckill_id']; ?>">
      <input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      </td>
  </tr>
</table>
</div>
</form>
<script language="JavaScript">
<!--


// 检查新订单
startCheckOrder();

/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  var eles = document.forms['theForm'].elements;

  var goods_id = eles['goods_id'].value;
  if (goods_id <= 0)
  {
    validator.addErrorMsg(error_goods_null);
  }
  validator.isNumber('number', error_number, false);
 
  return validator.passed();
}

/**
 * 搜索商品
 */
function searchGoods()
{
  var filter = new Object;
  filter.cat_id   = document.forms['searchForm'].elements['cat_id'].value;
  filter.brand_id = document.forms['searchForm'].elements['brand_id'].value;
  filter.keyword  = document.forms['searchForm'].elements['keyword'].value;

  Ajax.call('seckill.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
	return;
  }

  var sel = document.forms['theForm'].elements['goods_id'];

  sel.length = 0;

  /* 创建 options */
  var goods = result.content;
  if (goods)
  {
    for (i = 0; i < goods.length; i++)
    {
      var opt = document.createElement("OPTION");
      opt.value = goods[i].goods_id;
      opt.text  = goods[i].goods_name;
      sel.options.add(opt);
    }
  }
  else
  {
    var opt = document.createElement("OPTION");
    opt.value = 0;
    opt.text  = search_is_null;
    sel.options.add(opt);
  }

  return;
}
/**
 * 新增一个价格阶梯
 */
function addLadder(obj, amount, price)
{
  var src  = obj.parentNode.parentNode;
  var idx  = rowindex(src);
  var tbl  = document.getElementById('group-table');
  var row  = tbl.insertRow(idx + 1);
  var cell = row.insertCell(-1);
  cell.innerHTML = '';
  var cell = row.insertCell(-1);
  cell.innerHTML = src.cells[1].innerHTML.replace(/(.*)(addLadder)(.*)(\[)(\+)/i, "$1removeLadder$3$4-");;
}

/**
 * 删除一个价格阶梯
 */
function removeLadder(obj)
{
  var row = rowindex(obj.parentNode.parentNode);
  var tbl = document.getElementById('group-table');

  tbl.deleteRow(row);
}

//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>