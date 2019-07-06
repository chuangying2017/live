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
    $result = $MTCloud->roomCreate(222,MTCloud::VOICE_FLOW_CLOUD,768980367);

    var_dump($result);

}catch(MTCloudException $e){

    var_dump($e->getMessage());
}



