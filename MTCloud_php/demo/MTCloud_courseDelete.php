<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseDelete(10328);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}