<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->roomUnbindAccount(265,1013601,MTCloud::ACCOUNT_TYPE_THIRD);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
