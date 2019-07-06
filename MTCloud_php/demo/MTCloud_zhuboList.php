<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->zhuboList(1,10);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
