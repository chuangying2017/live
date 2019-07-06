<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $album_id = 100007;

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveAlbumAdd($album_id,array(889));

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


