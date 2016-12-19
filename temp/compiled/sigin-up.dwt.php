<!DOCTYPE html>
<html lang="zh">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="themes/henli/inc/css/sigin-up.css"/>
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
	</div>
</div>
<div class="hl-container">
    <div class="hl-main">
        <div class="hl-sigin-form">
            <form  id="form-signin" action="user.php?act=signin" method="post">
                <h2 class="hl-f24 hl-fb hl-a3">账户登录<a class="hl-fr hl-43" href="user.php?act=register">立即注册</a></h2>
                <div class="hl-form-group hl-user hl-mb30 hl-f0">
                    <label for="hl-user"></label>
                    <input class="hl-f14" type="text" name="username" id="username" placeholder="邮箱/用户名/已验证手机" />
                </div>
                <div class="hl-form-group hl-password hl-mb30 hl-f0">
                    <label for="hl-password"></label>
                    <input class="hl-f14" name="password" id="password" type="password" placeholder="密码" />
                </div>
                <div class="hl-form-group hl-automatic hl-f0 hl-mb10">
                    <label class="hl-f14"><input value="1" name="remember" class="hl-mr10" type="checkbox" value="自动登录" />自动登录</label>
                    <a class="hl-f14 hl-fr hl-62 hl-mr10" id="tips" >忘记密码</a>
                </div>
                <div class="hl-form-group hl-mb10 hl-f14" id="hl-error-notice" style="text-align:center;color:red;height:;">
                    
                </div>
                <div class="hl-form-group">
                    <button class="hl-sigin-up hl-bgc-a3 hl-f24 hl-fb">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
                </div>
            </form>
        </div>
    </div>
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
        $("#tips").click(function(){
            $("#hl-error-notice").text("请联系管理员!");
        });
        $("#form-signin").ajaxForm({
            dataType:'json',
            clearForm:false,
            beforeSerialize:function(){
                if ($('#username').val() == '') {
                    $("#hl-error-notice").text("账号不能为空!");
                    return false;
                }
                if ($('#password').val() == '') {
                    $("#hl-error-notice").text("密码不能为空!");
                    return false;
                }
                $("#hl-error-notice").text("正在验证提交中...");
                return true;
            },
            success:function(data){
                if(data.error==0){
                    window.location.href = "<?php echo $this->_var['back_act']; ?>";
                }else{
                    $("#hl-error-notice").text(data.msg);
                }
            }
        });
    });
</script>