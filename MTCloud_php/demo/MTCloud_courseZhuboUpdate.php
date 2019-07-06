<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseZhuboUpdate('wesin.zhubotest','wesin.1024','gege');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
