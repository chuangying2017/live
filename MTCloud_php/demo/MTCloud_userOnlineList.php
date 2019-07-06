<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $res = $MTCloud->userOnlineList(120,'2014-10-01','2015-01-29');

    print_r($res);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
