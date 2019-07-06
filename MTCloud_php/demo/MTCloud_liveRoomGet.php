<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->liveRoomGet(119,"2014-12-26 12:00:00");
    var_dump($result);

}catch(MTCloudException $e){

}
