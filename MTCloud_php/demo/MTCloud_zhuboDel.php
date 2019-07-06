<?php
/*=============================================================================
#     FileName: MTCloud_zhuboDel.php
#         Desc:  删除一个主播
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-22 10:19:22
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->zhuboDel('abc@qq.com',MTCloud::ACCOUNT_TYPE_THIRD);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
