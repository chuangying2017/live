<?php
/*=============================================================================
#     FileName: MTCloud_createRoom.php
#         Desc:  创建一个房间
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-17 14:40:23
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();

try{
    $result = $MTCloud->roomUpdate(119,['modetype' => 3,'voiceFlow'=>2,'roomName' => 'hehe']);

    var_dump($result);

}catch(MTCloudException $e){

    var_dump($e->getMessage());
}




