<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登录</title>
	<link rel="stylesheet" href="{{asset('static/live/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('static/live/css/component/component.min.css')}}">
	<link rel="stylesheet" href="{{asset('static/live/css/index/managerlogin.min.css')}}">
	<script type="text/javascript" src="{{asset('static/live/js/jquery-1.10.2.min.js')}}"></script>

</head>
<body>
	<img class="background-img" src="http://cdn13.mudu.tv/assets/upload/147070877352480.png" alt="">
	<div class="managerlogin-wrap">
		<div class="loginbox">
			<div class="login-cover-wrap">
				<span></span>
				<img src="http://cdn13.mudu.tv/assets/upload/147070875483629.png" alt="">
			</div>
			<img src="{{asset('static/live/image/console/shadow.png')}}" alt="" class="shadow-img">
			<div class="login-input-wrap">
				<p class='clearfix'><span>用户名:</span><input type="text" name="email"></p>
				<p class='clearfix'><span>密&nbsp;码:</span><input type="password" name="password"></p>

				<p class="error-tip clearfix" ></p>
				<span id="login" class="login-btn">登录</span>
			</div>
		</div>
	</div>

	<script>

		$('input[name="authCode"]').keydown(function(e) {
			if(e.keyCode == 13){
				$('#login').trigger('click');
			}
		})

		$(document).on('click','#login',function(){
			var email = $('input[name="email"]').val(),
				password = $('input[name="password"]').val(),
				belong_to = 10895,
				token = window.token,
				sessionId = window.sessionId,
				sig = window.sig;
			if (!token || !sessionId || !sig) {
				return;
			}
			$.post('/?c=session&a=login',{email:email,password:password,loginType: is_primary_account ? "" : "actManager", belong_to: belong_to, token: token, sig: sig, sessionId: sessionId, scene: 'ic_login' },function(data){
				if(data.status == 'y'){
					$('.error-tip').text();
					location.href = "/console";
				}else {
					ic.reset();
					if(data.Flag == 101 || data.Flag == 102){
						$('.error-tip').text('用户名或密码错误');
					}else if(data.Flag == 103){
						$('.error-tip').text('验证码错误');
					}else if(data.Flag === 105) {
						$('.error-tip').text('用户名或密码为空');
					}else {
						$('.error-tip').text(data.info);
					}
				}
			},'json')
		});
	</script>
</body>
