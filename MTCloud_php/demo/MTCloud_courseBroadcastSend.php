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
    $result = $MTCloud->courseBroadcastSend(21388,'test:cmd',["a"=>'thisisipo','b'=>'sdioxx'],['touser' => ['xid' => ['6462683']]]);    

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
  
