<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseFlowerList('10327');

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
