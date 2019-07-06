<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseList('2016-01-01','2017-11-13',1,10,array('status'=>0));

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

