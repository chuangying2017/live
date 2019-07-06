<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseDocumentList(10327);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
