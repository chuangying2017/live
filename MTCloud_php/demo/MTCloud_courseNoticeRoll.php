<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseNoticeRoll(12654, 'phpsdk', 'http://www.talk-fun.com/', 3600);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

