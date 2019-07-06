<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseAccess(10021,1215,'student1215', 'user',3600,['avatar' => '']);
    var_dump($res);
	$res = $MTCloud->courseAccessPlayback(10021,1215,'student1215', 'user',3600,['avatar' => '']);
    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}




