<?php
/*=============================================================================
#     FileName: MTCloud_dropRoom.php
#         Desc:  删除一个房间
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-17 15:13:30
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

try{
    $roomid = 254;

    $MTCloud = new MTCloud();
    $result = $MTCloud->roomDrop($roomid);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

