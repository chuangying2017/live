<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->courseUploadPlayback(13387, 'aaa.flv');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}