<?php
/*=============================================================================
#     FileName: MTCloud_zhuboCreate.php
#         Desc:  创建一个主播
#       Author: seven
#        Email: luoliuyou@aipai.com
#        Phone: 13602436266
#     HomePage: http://www.weibo.com/myskynet
#      Version: 0.0.1
#   LastChange: 2014-10-22 10:19:12
#      History:
=============================================================================*/
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->consoleAutoLogin(437,3600,'course-66823');

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
