<?php
/*=============================================================================
#     FileName: MTCloud_getRoom.php
#         Desc:  获取房间信息
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-17 15:13:21
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

try{
    $roomid = 10032;

    $MTCloud = new MTCloud();
    $result = $MTCloud->roomGetInfo($roomid);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


