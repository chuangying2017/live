<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveVoteEmit(10000, 20000);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


