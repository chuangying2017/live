<?php
/*=============================================================================
#     FileName: MTCloud_liveVisitorGet.php
#         Desc:  
#       Author: lee
#        Email: luoliuyou@talk-fun.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2016-06-07 14:32:39
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();

try{
    $result = $MTCloud->roomBroadcastSend(10162,'test:cmd',["a"=>'testcmd','b'=>'sdioxx']);    

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
  
