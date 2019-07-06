<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $album_id = 100006;

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveAlbumRemove($album_id,array(889));

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}



