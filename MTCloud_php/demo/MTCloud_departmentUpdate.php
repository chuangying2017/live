<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->departmentUpdate(77, 'sdk update');

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


