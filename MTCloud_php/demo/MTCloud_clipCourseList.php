<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->clipListByCid(10021,$page = 1, $size = 10);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}