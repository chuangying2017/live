<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();

try{
    $result = $MTCloud->roomNoticeRoll(551759, 'phpSdk', 'http://www.talk-fun.com/', 3600);

    var_dump($result);

}catch(MTCloudException $e){

    var_dump($e->getMessage());
}




