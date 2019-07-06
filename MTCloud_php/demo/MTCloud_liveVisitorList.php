<?php
/*=============================================================================
#     FileName: MTCloud_liveVisitorList.php
#         Desc:  
#       Author: lee
#        Email: luoliuyou@talk-fun.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2016-01-06 14:32:39
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->liveVisitorList(1264819,1,10);    

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
  
