<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->liveQaAdd(643109, 'phptest', 'u10000', MTCloud::ROLE_USER, 'nickname');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


