<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->departmentDelete(76);

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


