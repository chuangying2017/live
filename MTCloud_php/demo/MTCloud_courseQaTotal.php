<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->courseQaTotal(10003);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


