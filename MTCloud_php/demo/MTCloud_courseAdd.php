<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseAdd('asdasdas2','18222308579','2016-09-16 11:30','2016-09-16 15:00', 'wesin','asdasd', ['departmentId' => 6, 'barrage' => 1, 'isPublic' => 1, 'robotNumber' => 1, 'robotType' => 1, 'pptDisplay' => 1]);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
