<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->departmentGetBatch([75, 74, 73, 54]);

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


