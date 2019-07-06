<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->roomAddRobot(12371,[array("nickname"=>"wesin","avatar"=>"http://static-1.talk-fun.com/open/cooperation/default/live-pc/css/img/main/user.png")]);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
