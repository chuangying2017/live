<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $album_id = 100012;

    $MTCloud = new MTCloud();
    $result = $MTCloud->AlbumGet(100011,86400 * 360);

    print_r($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
