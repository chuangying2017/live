<?php

require __DIR__.'/../MTCloud.class.php';


try{

    $MTCloud = new MTCloud();
    //登录的用户
    $uid = 'wesin';                       //填入用户的真实唯一性ID,int、string皆可，方便做数据查询
    $nickname = 'wesin';                 //填入用户的昵称，以在用户列表、聊天记录等需要的地方进行显示
    $role = MTCloud::ROLE_USER;         //用户角色
    $roomid = 550639;                       //进入的房间ID

    $result = $MTCloud->userAccessUrl($uid,$nickname,$role,$roomid,$expire = 3000,['avatar' => '']);
    var_dump($result);
    exit;

}catch(MTCloudException $e){

}
