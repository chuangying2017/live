<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->liveUploadPlayback(10000, MTCloud::ACCOUNT_TYPE_MT, 'aaa.flv', 'aaa');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}