<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->zhuboGet(10148);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
