<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->AlbumCreate('专辑1',array(989));

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}

