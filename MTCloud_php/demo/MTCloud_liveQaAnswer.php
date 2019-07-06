<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->liveQaAnswer(944079, 643109, 'php answer', 'u10001', 'nick2');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


