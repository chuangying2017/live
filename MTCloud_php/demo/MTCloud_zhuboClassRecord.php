<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->zhuboClassRecord('10311');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
