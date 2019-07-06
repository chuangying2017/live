<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->liveList('2014-08-01','2014-10-01');

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
