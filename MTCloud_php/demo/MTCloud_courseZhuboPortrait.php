<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseZhuboPortrait('wesin.zhubotest','/opt/talk-fun/20161025153710.jpg');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
