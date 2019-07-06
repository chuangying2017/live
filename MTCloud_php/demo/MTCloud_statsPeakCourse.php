<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud(1111,'aaaaaaaaaaaaaaaaaaaaaaaaa');
    $result = $MTCloud->statsPeakCourse(111111);

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
