<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseVisitorListAll('2016-10-01 00:00:00', '2016-10-08 00:00:00', 1, 10);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
