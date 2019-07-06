<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud(20,'');
    $result = $MTCloud->livePlaybackLoginUrl(11);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
