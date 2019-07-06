<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseZhuboAdd('wesin.zhubotest','wesin1025','hehe');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
