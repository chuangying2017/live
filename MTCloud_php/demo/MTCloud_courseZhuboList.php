<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseZhuboList(1,10,'wesin.zhubotest');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
