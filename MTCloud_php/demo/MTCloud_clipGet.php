<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->clipGet(10219);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}