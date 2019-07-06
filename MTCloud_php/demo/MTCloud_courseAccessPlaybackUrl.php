<?php

require __DIR__.'/../MTCloud.class.php';


try{

    $MTCloud = new MTCloud();

    $result = $MTCloud->courseAccessPlaybackUrl(13341,10000,'test','user',$expire = 3600);
    var_dump($result);
    exit;

}catch(MTCloudException $e){

}
