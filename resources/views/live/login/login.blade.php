@include('live.public.head')
    <title>管理员登录</title>
</head>
<body ontouchstart>
<img class="background-img" src="http://cdn13.mudu.tv/assets/upload/147070877352480.png" alt="">
<div class="managerlogin-wrap">
    <div class="loginbox">
        <div class="login-cover-wrap">
            <span></span>
            <img src="http://cdn13.mudu.tv/assets/upload/147070875483629.png" alt="">
        </div>
        <img src="{{asset('static/images/web/shadow.png')}}" alt="" class="shadow-img">
        <div class="login-input-wrap">
            <p class="clearfix"><span>用户名:</span><input type="text" name="username"></p>
            <p class="clearfix"><span>密&nbsp;码:</span><input type="password" name="password"></p>
            <p class="captcha clearfix">
                <span>安全验证:</span>
                <input type="text" name="captcha">
                <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src = '{{captcha_src()}}'+ Math.random()" >
            </p>
            <p class="error-tip clearfix"></p>
            <span id="login" class="login-btn">登录</span>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/jquery-ui/1.9.1/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/layer/2.4/layer.js')}}"></script>
<script type="text/javascript">

    //刷新验证码
    $(document).on('click','#captchaimg',function(){
        $("#captchaimg").attr('src','{{captcha_src()}}' + append);
    });

    $('input[name="authCode"]').keydown(function(e) {
        if(e.keyCode == 13){
            $('#login').trigger('click');
        }
    })
    $(document).on('click','#login',function(){
        var username = $('input[name="username"]').val(),
            password = $('input[name="password"]').val(),
            captcha = $('input[name="captcha"]').val();
        if (username=='') {
            return layer.msg('请输入用户名');
        }
        if (password=='') {
            return layer.msg('请输入密码');
        }
        if (captcha=='') {
            return layer.msg('请输入安全验证码');
        }
        $.post('/?c=session&a=login',{username:username,password:password,captcha:captcha},function(data){
            if(data.status == 'y'){
                $('.error-tip').text();
                location.href = "/console";
            }else {

            }
        },'json')
    });

</script>
</body>
</html>
