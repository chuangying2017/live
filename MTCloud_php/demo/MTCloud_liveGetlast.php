<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $liveid = 1745;

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveGetLast(3,10236);    

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
