<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $liveids = array(843);

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveGetBatch($liveids);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
