<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->courseQaAudit(944085, 66840);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


