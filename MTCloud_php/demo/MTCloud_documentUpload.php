<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->documentUpload('551759', array('file' => 'C:\\Users\\zhang\\Desktop\\ppt9.ppt', 'name' => 'php'));

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
