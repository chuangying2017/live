<?php

require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud('','');
    $result = $MTCloud->videoUpload('/srv/test.mp4', '13800138000', MTCloud::ACCOUNT_TYPE_THIRD, 'test video', '昵称', '',false,['start_time' => '2018-10-10 16:28']);
	var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}



