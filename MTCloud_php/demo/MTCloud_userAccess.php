<?php
/*=============================================================================
#     FileName: MTCloud_userAccess.php
#         Desc: 用户进入房间，获取认证的token，以及房间地址
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-17 14:20:35
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    //TODO:合作方验证该用户的身份，判定该用户的角色、以及是否拥有权限进入该房间


    //登录的用户
    $uid = 10000;                       //填入用户的真实唯一性ID,int、string皆可，方便做数据查询
    $nickname = '&<>&';                 //填入用户的昵称，以在用户列表、聊天记录等需要的地方进行显示
    $role = MTCloud::ROLE_USER;         //用户角色
    $roomid = '119';                       //进入的房间ID

    $result = $MTCloud->userAccess($uid,$nickname,$role,$roomid,$expire = 86400 * 100);
    var_dump($result);
    exit;

    //游客

    //TODO:为了让同一个游客保持该账号进行登录麦拓，可以设置cookie,session，或者其他存储方式
    //如下代码
    /*
        session_start();
        if(isset($_SESSION['MT_GUESTID'])){
            $guestId = $_SESSION['MT_GUESTID'];
        }else{
            $guestId = $MTCloud->generateGuestId();
            $_SESSION['MT_GUESTID'] = $guestId;
        }
    */

    $guestId = $MTCloud->generateGuestId();
    $uid = $guestId;                       //自定义
    $nickname = '游客'.rand(100,200);       //自定义
    $role = MTCloud::ROLE_GUEST;
    $roomid = '119';
    $result = $MTCloud->userAccess($uid,$nickname,$role,$roomid); 

    var_dump($result);

    //管理员
    $uid = '10001';
    $nickname = '我是管理员';
    $role = MTCloud::ROLE_ADMIN;
    $roomid = '119';
    $result = $MTCloud->userAccess($uid,$nickname,$role,$roomid);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}




