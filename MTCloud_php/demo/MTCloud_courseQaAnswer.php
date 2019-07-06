<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->courseQaAnswer(944087, 66840, 'php answer', 'u10002', 'nick3');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


