<!DOCTYPE html>
<html lang="zh">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
	<meta charset="UTF-8">
	<title>账号注册</title>
	<link rel="stylesheet" type="text/css" href="themes/henli/inc/css/register.css"/>
	<style type=text/css>
		html, body {
			height: 100%;
		}
	</style>
</head>
<body>
<div class="hl-header">
	<div class="hl-center hl-nav">
		<a class="hl-logo hl-mr10" href=""></a>
		<a class="hl-mr20" href="" target="_blank">西门子家电</a>
		<a class="hl-mr20" href="" target="_blank">展望未来</a>
		<span class="hl-account hl-fr hl-f18">已有账号<a class="hl-ml20 hl-a3" href="user.php">请登录</a></span>
	</div>
</div>
<div class="hl-container">
    <form  id="form-signin" action="user.php?act=act_register" method="post">
        <div class="hl-main">
            <div class="hl-register-form">
                <div class="hl-form-group hl-mb35 hl-user">
                    <label for="">姓&nbsp;&nbsp;名</label>
                    <input type="text" name="user_name" id="username"  placeholder="请输入您的姓名" />
                </div>
                <div class="hl-form-group hl-phone hl-mb35">
                    <label for="">电&nbsp;&nbsp;话</label>
                    <input type="text" name="mobile_phone" id="mobile_phone" placeholder="请输入您的联系电话" />
                </div>
                <div class="hl-form-group hl-company hl-mb35">
                    <label for="">公司名称</label>
                    <input type="text" name="company" id="company" placeholder="请输入贵公司的公司名字" />
                </div>
                <div class="hl-form-group hl-category hl-mb35">
                    <label for="">分类查看</label>
                    <select name="category" id="category" class="hl-select">
                        <option value="0" >请选择你想查看的区域</option>
                        <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
                        <option value="<?php echo $this->_var['cate']['cat_id']; ?>"><?php echo $this->_var['cate']['cat_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                </div>
                <div class="hl-form-group hl-verify hl-mb35">
                    <label for="">验证码</label>
                    <input type="text" maxlength="4" name="captcha" id="captcha" placeholder="请输入验证码" />
                    <span class="hl-verify-code"><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;width:110px;height:58px;" onClick="this.src='captcha.php?'+Math.random()" /></span>
                </div>
                <div class="hl-form-group hl-mb35 hl-f14" id="hl-error-notice" style="text-align:center;color:red;" >
                 
                </div>
                <div class="hl-form-group">
                    <button id="registers" type="submit" class="hl-register hl-f30 hl-ff">立即注册</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="hl-footer hl-f14 hl-44 hl-tc">
	&copy;&nbsp;&nbsp;博西家用电器集团&nbsp;&nbsp;2016&nbsp;&nbsp;|&nbsp;&nbsp;BSH集团是西门子股份公司的商标许可方&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;苏ICP备10003401号
</div>
</body>
</html>
<script type="text/javascript" src="themes/henli/inc/public/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="themes/henli/inc/public/js/jquery.form.min.js"></script>
<script>
    $(document).ready(function () {
        $("#form-signin").ajaxForm({
            dataType:'json',
            clearForm:false,
            beforeSerialize:function(){
                if ($('#username').val() == '') {
                    $("#hl-error-notice").text("姓名不能为空!");
                    return false;
                }
                if ($('#mobile_phone').val() == '') {
                    $("#hl-error-notice").text("电话号码不能为空!");
                    return false;
                }
                if ($('#company').val() == '') {
                    $("#hl-error-notice").text("公司名称不能为空!");
                    return false;
                }
                if ($('#category option:selected').val() == 0) {
                    $("#hl-error-notice").text("分类不能为空!");
                    return false;
                }
                if ($('#captcha').val() == '') {
                    $("#hl-error-notice").text("验证码不能为空!");
                    return false;
                }
                $("#hl-error-notice").text("正在验证提交中...");
                return true;
            },
            success:function(data){
                if(data.state==200){
                    window.location.href = "user.php?act=act_register_success";
                }else{
                    $("#hl-error-notice").text(data.msg);
                }
            }
        });
    });
</script>