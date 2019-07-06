<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->zhuboLogin(10000, MTCloud::ACCOUNT_TYPE_MT, array('ssl' => true));

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}



