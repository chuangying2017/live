<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveVoteEnd(16202, 1, 'asd10008', 'test');

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


