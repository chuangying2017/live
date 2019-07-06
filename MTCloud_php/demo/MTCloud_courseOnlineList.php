<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseOnlineList("21881", "2017-01-01 00:00:00", "2017-12-12 00:00:00");

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

