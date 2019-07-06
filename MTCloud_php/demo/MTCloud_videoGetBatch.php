<?php

require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();

    $videoIds = array(665, 666);

    $result = $MTCloud->videoGetBatch($videoIds, 86400);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
