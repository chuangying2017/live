<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseZhuboClassRecord('10311', 1);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
