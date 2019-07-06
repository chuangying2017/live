@include('live.public.head')
    <title>首页</title>
</head>
<body ontouchstart>
<div class="wrap">
    <div id="rm-header" class="header clearfix" data-type="4" data-account="5">
        <div class="top">
            <a class="logo-wrap" href="/console/?c=index&amp;a=index">
                <img src="http://cdn13.mudu.tv/assets/upload/147071101583626.jpg" style="">
            </a>
            <div class="mid">
                <a href="/console/?c=index&amp;a=index" class="nav first active">首页</a>
                <a href="/console?c=app" class="nav ">频道统计
                    <img class="new" src="/assets/console/images/new_menu.png" alt="">
                </a>
                <a href="/console/?c=data&amp;a=userlist" class="nav last " target="_blank">
                    观众画像
                </a>
                <a href="/console/?c=media" class="nav ">媒体库</a>
            </div>
            <div class="right-wrap">
                <div id="msg-txt-wrap" class="hide">
                    <i class="iconfont" title="消息"></i>
                    <span class="num hide">0</span>
                </div>
                <div class="user-info act-manager">
                    <!-- <span class="dropDown">
                        <a class="dropDown_A" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">管理员</a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="#">多账号管理</a></li>
                            <li><a href="#">密码设置</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </span> -->
                    <div class="total-user-info" style="display: none;">
                        <a href="#">多账号管理</a>
                        <a href="#">密码设置</a>
                        <a href="#">退出</a>

                    </div>
                    <a id="username-link" title="账号设置" href="javascript:void(0)">
                        管理员</a>
                    <i class="iconfont username-arrow"></i>
                </div>
            </div>
        </div>

    </div>
    <div id="rm-main" class="main clearfix">
        <div class="co-index">
            <div class="left leftMenu">
                <div class="channelInfo index-info">
                    <p class="title">数据概况</p>
                    <p>已创建频道数：<span>192</span>个</p>
                    <p>当天直播频道：<span>20</span>个</p>
                    <p>累计观看时长：<span>无</span></p>
                    <p>累计用户数量：<span>175412</span></p>
                </div>
            </div>
        </div>
        <div id="rm-index" class="co-index">
            <div class="right-block">
                <div class="channel-search-bar" style="overflow: inherit;">
                    <div class="channel-sort">
                        <label>排序:</label>
                        <select class="select" style="width: auto;color: rgb(153, 153, 153);border-radius: 5px;">
                            <option value="0">默认排序</option>
                            <option value="1">最后直播时间</option>
                            <option value="2">累计观看人次</option>
                            <option value="3">累计观看时长</option>
                        </select>

                    </div>
                    <div class="ant-search-input-wrapper channel-search-input ">
							<span class="ant-input-group ant-search-input">
								<input value="" placeholder="请输入频道关键字" type="text" class="ant-input">
								<button type="button" class="ant-btn ant-btn-primary ant-btn-icon-only" ><i class="Hui-iconfont Hui-iconfont-search1"></i></button>
							</span>
                    </div>
                    <span></span>
                </div>
                <div id="index-block" class="rightContent">
                    <div class="channel-block add-channel rm-add-channel "  onClick="addChannel()" >
                        <i class="add-icon iconfont " ></i><p>新建直播频道</p>
                    </div>
                    <div class="channel-block channel-info">
                        <!-- <div class="multi">多流直播</div> -->
                        <div class="rightTools">
                            <div class="ball-bar checked icon-close hide">
                                <div class="ball"></div>
                            </div>
                            <div style="display:inline-block;" >
                                <a class="iconfont icon-close icon-set hide" onclick="setChannel(12)"></a>
                            </div>
                            <a class="iconfont icon-close hide"></a>
                        </div>
                        <div class="top" >
                            <div class="avatar"><img src="http://cdn13.mudu.tv/assets/upload/147070844698332.jpg" ></div>
                            <div class="top-info" >
                                <p class="title" >
									<span>
										<span class="title-span">楚楚1</span>
										<span > </span>
										<span class="title-set" >
											<span >管理员：</span>
											<span >测试sonny</span>
										</span>
									</span>
                                </p>
                                <p class="act-view-info">
                                    <span >直播开始时间：</span>
                                    <span >2019-07-26 00:00:00</span>
                                </p>
                                <p class="last-living-info" >
                                    <span >最后直播时间：</span>
                                    <span >该频道未直播过</span>
                                </p>
                                <p class="act-view-info" >
									<span >
										<span >观看量：</span>
										<span class="num-info" >
											<span >0</span>
											<span class="info-unit" > 次</span>
										</span>
									</span>
                                    <span >
										<span >观看总时长：</span>
										<sapn class="num-info" >
											<span >0</span>
											<span class="info-unit" > 分钟</span>
										</sapn>
									</span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom" >
                            <a class="bottom-info" target="_blank" href="/console/?c=data&amp;a=analysis&amp;id=200930" >
                                <i class="iconfont" ></i>
                                <span class="bottom-info-hint" >数据统计</span>
                            </a><a class="bottom-info" target="_blank" href="http://live.51job.com/watch/3425810" >
                                <i class="iconfont" ></i>
                                <span class="bottom-info-hint" >PC预览</span>
                            </a><a class="bottom-info" >
                                <i class="iconfont"></i>
                                <div class="bottom-info-hint" >
                                    <div class="qrimg-wrap" >
                                        <img src="/activity.php?a=QRImage&amp;id=200930" alt="二维码无法显示">
                                    </div>
                                    <span >手机预览</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rm-footer" class="footer clearfix">
        <img src="http://cdn13.mudu.tv/assets/upload/147070872782018.png" style="width:390px; height:110px;" alt="目睹直播">
    </div>
</div>
<div id="addChannel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content radius">
            <div class="modal-header">
                <h3 class="modal-title">新建直播频道</h3>
                <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
            </div>
            <div class="modal-body">
                <form class="ant-form ant-form-horizontal">
                    <div class="ant-row ant-form-item" >
                        <div class="ant-col-4 ant-form-item-label">
                            <label for="channelName" class="ant-form-item-required" title="频道名称">频道名称</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper">
                            <div class="ant-form-item-control ">
								<span class="ant-input-group-wrapper" style="width:530px;">
									<span class="ant-input-wrapper ant-input-group">
										<input type="text" placeholder="频道名将显示在观看页上，请认真填写" value="" id="channelName" class="ant-input ant-input-lg">
										<span class="ant-input-group-addon" >
											<i >0/120</i>
										</span>
									</span>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item channel-live-type">
                        <div class="ant-col-4 ant-form-item-label">
                            <label class="" title="直播类型：">直播类型</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper">
                            <select class="select" style="width: auto;color: rgb(153, 153, 153);border-radius: 5px;height: 32px;padding: 0 10px;">
                                <option value="0">直播</option>
                                <option value="1">预告</option>
                            </select>
                        </div>
                    </div>
                    <div class="ant-row">
                        <div class="ant-col-12">
                            <div class="ant-row ant-form-item" >
                                <div class="ant-col-8 ant-form-item-label">
                                    <label for="start_time" class="" title="直播开始时间:">直播开始时间</label>
                                </div>
                                <div class="ant-col-16 ant-form-item-control-wrapper">
                                    <div class="ant-form-item-control has-success">
										<span class="ant-calendar-picker" style="width:154px;" >
											<div >
												<input readonly="" value="" placeholder="请选择时间" class="ant-calendar-picker-input ant-input ant-input-lg start_time" >
												<span class="ant-calendar-picker-icon"></span>
											</div>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item channel-theme" >
                        <div class="ant-col-4 ant-form-item-label" >
                            <label class="" title="频道主题:">频道主题</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper" >
                            <div class="ant-form-item-control ">
                                <div class="ant-radio-group ant-radio-group-large theme-radio clearfix">
                                    <label class="ant-radio-wrapper ant-radio-wrapper-checked" >
										<span class="ant-radio ant-radio-checked" >
											<input type="radio" class="ant-radio-input" checked="">
											<span class="ant-radio-inner" ></span>
										</span>
                                        <span >
											<img src="/assets/img/console/theme-default-card.png" alt="" >
											<i class="anticon anticon-check-circle theme-check-circle" ></i>
										</span>
                                    </label>
                                    <label class="ant-radio-wrapper">
										<span class="ant-radio" >
											<input type="radio" class="ant-radio-input" >
											<span class="ant-radio-inner" ></span>
										</span>
                                        <span>
											<img src="/assets/img/console/theme-tech-card.png" alt="" >
											<i class="theme-uncheck-circle" ></i>
										</span>
                                    </label>
                                    <label class="ant-radio-wrapper">
										<span class="ant-radio">
											<input type="radio" class="ant-radio-input" >
											<span class="ant-radio-inner"></span>
										</span>
                                        <span>
											<i class="new-icon" ></i>
											<img src="/assets/img/console/theme-newyear-card.png" alt="" >
											<i class="theme-uncheck-circle" ></i>
										</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item create-channel-intro" >
                        <div class="ant-col-4 ant-form-item-label">
                            <label class="ant-form-item-required" title="说明">说明</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper" >
                            <div class="ant-form-item-control ">
                                <p class="new-channel-info">严禁上传包括反动、暴力、色情、违法、及侵权内容的文件。平台有义务配合有关部门将上传违规文件的用户信息保存，并保留因配合调查及冻结账号的权利。</p>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item create-channel-tip">
                        <div class="ant-col-4 ant-form-item-label" >
                            <label class="ant-form-item-required" title="注">注</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper" >
                            <div class="ant-form-item-control ">
                                <p class="new-channel-info" >若想对直播内容进行媒体推广，请点击右上角工单按钮进行申请</p>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item" >
                        <div class="ant-col-19 ant-col-offset-4 ant-form-item-control-wrapper" >
                            <div class="ant-form-item-control has-warning" >
                                <label class="ant-checkbox-wrapper" >
								<span class="ant-checkbox" >
									<input type="checkbox" class="ant-checkbox-input">
									<span class="ant-checkbox-inner" ></span>
								</span>
                                    <span >我已阅读</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">确定</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>
    </div>
</div>
<div id="setChannel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <div class="modal-header">
                <h3 class="modal-title">设置</h3>
                <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
            </div>
            <div class="modal-body">
                <form class="ant-form ant-form-horizontal">
                    <div class="ant-row ant-form-item" >
                        <div class="ant-col-4 ant-form-item-label">
                            <label for="channelName" class="ant-form-item-required" title="频道名称">频道名称</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper">
                            <div class="ant-form-item-control ">
								<span class="ant-input-group-wrapper" style="width:300px;">
									<span class="ant-input-wrapper ant-input-group">
										<input type="text" placeholder="频道名将显示在观看页上，请认真填写" value="TEST" id="channelName" class="ant-input ant-input-lg">
										<span class="ant-input-group-addon" >
											<i >0/120</i>
										</span>
									</span>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item channel-live-type">
                        <div class="ant-col-4 ant-form-item-label">
                            <label class="" title="直播类型：">直播类型</label>
                        </div>
                        <div class="ant-col-19 ant-form-item-control-wrapper">
                            <select class="select" style="width: auto;color: rgb(153, 153, 153);border-radius: 5px;height: 32px;padding: 0 10px;">
                                <option value="0">直播</option>
                                <option value="1">预告</option>
                            </select>
                        </div>
                    </div>
                    <div class="ant-row">
                        <div class="ant-col-12">
                            <div class="ant-row ant-form-item" >
                                <div class="ant-col-8 ant-form-item-label">
                                    <label for="start_time" class="" title="直播开始时间:">直播开始时间</label>
                                </div>
                                <div class="ant-col-16 ant-form-item-control-wrapper">
                                    <div class="ant-form-item-control has-success">
										<span class="ant-calendar-picker" style="width:154px;" >
											<div >
												<input readonly="" value="" placeholder="请选择时间" class="ant-calendar-picker-input ant-input ant-input-lg start_time1" name="start_time" >
												<span class="ant-calendar-picker-icon Hui-iconfont Hui-iconfont-shijian"></span>
											</div>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row">
                        <div class="ant-col-12">
                            <div class="ant-row ant-form-item" >
                                <div class="ant-col-8 ant-form-item-label">
                                    <label for="end_time" class="" title="直播结束时间:">直播结束时间</label>
                                </div>
                                <div class="ant-col-16 ant-form-item-control-wrapper">
                                    <div class="ant-form-item-control has-success">
										<span class="ant-calendar-picker" style="width:154px;" >
											<div >
												<input readonly="" value="" placeholder="请选择时间" class="ant-calendar-picker-input ant-input ant-input-lg end_time" name="end_time" >
												<span class="ant-calendar-picker-icon Hui-iconfont Hui-iconfont-shijian"></span>
											</div>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item" style="display:block;">
                        <div class="ant-col-5 ant-form-item-label">
                            <label for="cover_img" class="" title="频道图标" >频道图标</label>
                        </div>
                        <div class="ant-col-18 ant-form-item-control-wrapper" >
                            <div class="ant-form-item-control ">
								<span class="upload-content">
									<div class="ant-upload ant-upload-select ant-upload-select-text" style="display:;" >
										<span tabindex="0" class="ant-upload" role="button" >
											<input type="file" style="display:none;" accept="" >
											<div class="upload-box" >
												<img src="http://cdn13.mudu.tv/assets/upload/147070844698332.jpg" >
												<div class="upload-box-opa" >
													<i class="anticon anticon-upload upload-btn" ></i>
												</div>
											</div>
										</span>
									</div>
								</span>
                                <p class="img-upload">图片大小2M以内，支持PNG、JPG、JPEG格式</p>
                                <p class="img-upload" >您上传的图片自动会生成128*128像素的图片,请注意图片是否清晰</p>
                                <button disabled="" type="button" class="ant-btn ant-btn-sm reset"><span >恢复默认</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">确定</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>
    </div>
</div>
@include('live.public.commonjs')
<script type="text/javascript">
    // 新建
    function addChannel(){
        $("#addChannel").modal("show")}

    // 设置
    function setChannel(id){
        $("#setChannel").modal("show")}
    $(".start_time,.start_time1,.end_time").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss",
        autoclose: true
    });
    (function($) {
        var timer
        $('#username-link,.username-arrow').on('mouseenter',function(e){
            clearTimeout(timer)
            //$('.total-user-info').removeClass('hide');
            $('.total-user-info').slideDown(200)
            $('.username-arrow').addClass('active')

        });
        $('#username-link,.username-arrow').on('mouseleave',function(e){
            timer = setTimeout(function () {
                $('.total-user-info').slideUp(200)
                $('.username-arrow').removeClass('active')
            }, 200)
        });

        $('.total-user-info').on('mouseenter', function () {
            clearTimeout(timer)
        })

        $('.total-user-info').on('mouseleave', function () {
            timer = setTimeout(function () {
                $('.total-user-info').slideUp(200)
                $('.username-arrow').removeClass('active')
            }, 200)
        })
        $('.channel-info').on('mouseenter', function () {
            $(this).find('.icon-close').removeClass('hide')
        })

        $('.channel-info').on('mouseleave', function () {
            $(this).find('.icon-close').addClass('hide')
        })

    })(jQuery);
</script>
</body>
</html>
