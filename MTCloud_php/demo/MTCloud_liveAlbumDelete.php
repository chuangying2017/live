<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $album_id = 100008;

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveAlbumDelete($album_id);

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

