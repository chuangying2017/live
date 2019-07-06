<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $album_id = 100006;

    $MTCloud = new MTCloud();
    $result = $MTCloud->AlbumRemoveCourse($album_id,array(889));

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
