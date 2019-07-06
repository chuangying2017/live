<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseUpdateConfig(12379, array('barrage' => 1, 'isPublic' => 0, 'robotNumber' => 1, 'robotType' => 1, 'pptDisplay' => 1));

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
