<?php

require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud(20,'');
    $result = $MTCloud->videoUpload('1835152.mp4', '10000', MTCloud::ACCOUNT_TYPE_MT, 'test', 'nickname', 'accountIntro');

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}



