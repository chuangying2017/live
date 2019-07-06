<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $liveid = 1745;

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveGet($liveid);    

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
