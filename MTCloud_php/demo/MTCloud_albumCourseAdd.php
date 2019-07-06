<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->AlbumAddCourse(100103,array(10017,10016));

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}