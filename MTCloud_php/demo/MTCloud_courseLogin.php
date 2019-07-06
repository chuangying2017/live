<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseLogin('10000', MTCloud::ACCOUNT_TYPE_MT);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

