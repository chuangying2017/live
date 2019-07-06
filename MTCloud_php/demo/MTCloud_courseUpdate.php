<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseUpdate(10327,'13763369355', '课程1','2016-07-07 13:00','2016-07-07 16:30');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


