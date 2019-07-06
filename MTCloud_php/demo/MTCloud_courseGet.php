<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseGet(10327,86400);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}




