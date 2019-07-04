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

	</script>
</body>
