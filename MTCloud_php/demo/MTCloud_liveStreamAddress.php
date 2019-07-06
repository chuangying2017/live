<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->liveStreamAddress(1000000053);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}