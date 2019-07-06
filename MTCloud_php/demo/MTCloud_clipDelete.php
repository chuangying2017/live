<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->clipDelete(1262063);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}