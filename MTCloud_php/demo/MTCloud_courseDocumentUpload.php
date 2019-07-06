<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->courseDocumentUpload('10327', array('file' => '/opt/talk-fun/金融专硕经典习题讲解4.pptx', 'name' => '金融专硕经典习题讲解4'));

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
