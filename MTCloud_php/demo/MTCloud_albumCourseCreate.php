<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->AlbumCreateCourse('专辑hei',10018);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
