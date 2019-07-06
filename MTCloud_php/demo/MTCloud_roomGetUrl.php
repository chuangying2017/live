<?php
/*=============================================================================
#     FileName: MTCloud_roomGetUrl.php
#         Desc: 用户进入房间地址
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-17 14:20:35
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud(20, '');


try{
    $result = $MTCloud->roomGetUrl(10162);
    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}




