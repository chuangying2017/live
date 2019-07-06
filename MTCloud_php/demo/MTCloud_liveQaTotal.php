<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->liveQaTotal(1000003795);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


