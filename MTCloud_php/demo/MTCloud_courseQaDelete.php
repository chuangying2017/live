<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->courseQaDelete(944086, 66840);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


