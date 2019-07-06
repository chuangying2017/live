<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->courseQaList(66840);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


