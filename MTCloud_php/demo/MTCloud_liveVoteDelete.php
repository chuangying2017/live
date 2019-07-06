<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveVoteDelete(17336);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}