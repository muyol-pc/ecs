<!-- $Id: auction_info.htm 16992 2010-01-19 08:45:49Z wangleisvn $ -->

{include file="pageheader.htm"}

<script type="text/javascript" src="../js/calendar.php?lang={$cfg_lang}"></script>

<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />

{insert_scripts files="validator.js,../js/transport.js,../js/utils.js}

<div class="main-div">

    <form method="post" action="seckill_goods.php" name="theForm" enctype="multipart/form-data" onSubmit="return validate()">

        <table cellspacing="1" cellpadding="3" width="100%">

            <tr>

                <td class="label">{$lang.label_act_name}</td>

                <td><input name="act_name" type="text" id="act_name" value="{$seckill.act_name}" maxlength="60" />

                    {$lang.notice_act_name}</td>

            </tr>

            <tr>

                <td class="label">{$lang.label_act_desc}</td>

                <td><textarea  name="act_desc" cols="60" rows="4" id="act_desc">{$seckill.act_desc}</textarea></td>

            </tr>

            <tr>

                <td align="right">{$lang.label_search_goods}</td>

                <td><input name="keyword" type="text" id="keyword">

                    <input name="search" type="button" id="search" value="{$lang.button_search}" class="button" onclick="searchGoods()" /></td>

            </tr>

            <tr>

                <td class="label">{$lang.label_goods_name}</td>

                <td><select name="goods_id" id="goods_id" onchange="javascript:change_good_products();">

                    <option value="{$seckill.goods_id}" selected="selected">{$seckill.goods_name}</option>

                </select>

                    <select name="product_id" {if $auction.product_id <= 0}style="display:none"{/if}>

                    {html_options options=$good_products_select selected=$auction.product_id}

                    </select></td>

            </tr>

            <tr>

                <td class="label">{$lang.label_start_time}</td>

                <td><input name="start_time" type="text" id="start_time" value="{$seckill.start_time}" readonly="readonly" />

                    <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="{$lang.btn_select}" class="button" /></td>

            </tr>

            <tr>

                <td class="label">{$lang.label_end_time}</td>

                <td><input name="end_time" type="text" id="end_time" value="{$seckill.end_time}" readonly="readonly" />

                    <input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="{$lang.btn_select}" class="button" /></td>

            </tr>

            <tr>

                <td class="label">{$lang.label_start_price}</td>

                <td><input name="start_price" type="text" id="start_price" value=""></td>

            </tr>

            <tr>

                <td class="label">{$lang.label_goods_num}</td>

                <td><input name="seckill_num" type="text" id="seckill_num" value=""></td>

            </tr>

            <tr>

                <td colspan="2" align="center">

                    {if $seckill.act_id eq 0 or $seckill.status_no eq "0" or $auction.status_no eq "1"}

                    <input type="submit" class="button" value="{$lang.button_submit}" />

                    <input type="reset" class="button" value="{$lang.button_reset}" />

                    <input type="hidden" name="act" value="{$form_action}" />

                    {elseif $seckill.status_no eq "2"}

                    {$lang.settle_frozen_money}

                    <input type="submit" class="button" value="{$lang.unfreeze}" name="unfreeze" />

                    <input type="submit" class="button" value="{$lang.deduct}" name="deduct" />

                    <input type="hidden" name="act" value="settle_money" />

                    {/if}

                    <input type="hidden" name="id" value="{$seckill.act_id}" /></td>

            </tr>

        </table>

    </form>

</div>



{literal}

<script language="JavaScript">

    <!--

    var display_yes = (Browser.isIE) ? 'block' : 'table-row-group';



    onload = function()

    {

        // 开始检查订单

        startCheckOrder();

    }

    /**

     * 检查表单输入的数据

     */

    function validate()

    {

        validator = new Validator("theForm");

        validator.isNumber('start_price', start_price_not_number, false);

        validator.isNumber('end_price', end_price_not_number, false);



        if (document.forms['theForm'].elements['no_top'].checked == false)

        {

            validator.gt('end_price', 'start_price', end_gt_start);

        }

        validator.isNumber('amplitude', amplitude_not_number, false);

        validator.isNumber('deposit', deposit_not_number, false);

        validator.islt('start_time', 'end_time', start_lt_end);

        return validator.passed();

    }

    function checked_no_top(o)

    {

        if (o.checked)

        {

            o.form.elements['end_price'].value = '';

            o.form.elements['end_price'].disabled = true;

        }

        else

        {

            o.form.elements['end_price'].disabled = false;

        }

    }

    function searchGoods()

    {

        var filter = new Object;

        filter.keyword  = document.forms['theForm'].elements['keyword'].value;



        Ajax.call('auction.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');

    }



    function searchGoodsResponse(result)

    {

        if (result.error == '1' && result.message != '')

        {

            alert(result.message);

            return;

        }



        var frm = document.forms['theForm'];

        var sel = frm.elements['goods_id'];

        var sp = frm.elements['product_id'];



        if (result.error == 0)

        {

            /* 清除 options */

            sel.length = 0;

            sp.length = 0;



            /* 创建 options */

            var goods = result.content.goods;

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



            /* 创建 product options */

            var products = result.content.products;

            if (products)

            {

                sp.style.display = display_yes;



                for (i = 0; i < products.length; i++)

                {

                    var p_opt = document.createElement("OPTION");

                    p_opt.value = products[i].product_id;

                    p_opt.text  = products[i].goods_attr_str;

                    sp.options.add(p_opt);

                }

            }

            else

            {

                sp.style.display = 'none';



                var p_opt = document.createElement("OPTION");

                p_opt.value = 0;

                p_opt.text  = search_is_null;

                sp.options.add(p_opt);

            }

        }



        return;

    }



    function change_good_products()

    {

        var filter = new Object;

        filter.goods_id = document.forms['theForm'].elements['goods_id'].value;



        Ajax.call('snatch.php?is_ajax=1&act=search_products', filter, searchProductsResponse, 'GET', 'JSON');

    }



    function searchProductsResponse(result)

    {

        var frm = document.forms['theForm'];

        var sp = frm.elements['product_id'];



        if (result.error == 0)

        {

            /* 清除 options */

            sp.length = 0;



            /* 创建 product options */

            var products = result.content.products;

            if (products.length)

            {

                sp.style.display = display_yes;



                for (i = 0; i < products.length; i++)

                {

                    var p_opt = document.createElement("OPTION");

                    p_opt.value = products[i].product_id;

                    p_opt.text  = products[i].goods_attr_str;

                    sp.options.add(p_opt);

                }

            }

            else

            {

                sp.style.display = 'none';



                var p_opt = document.createElement("OPTION");

                p_opt.value = 0;

                p_opt.text  = search_is_null;

                sp.options.add(p_opt);

            }

        }



        if (result.message.length > 0)

        {

            alert(result.message);

        }

    }

    //-->

</script>

{/literal}

{include file="pagefooter.htm"}

