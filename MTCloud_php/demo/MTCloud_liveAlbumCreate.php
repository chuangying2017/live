<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveAlbumCreate('专辑1',array(10259,10260));

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
