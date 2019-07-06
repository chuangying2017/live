<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();
    $result = $MTCloud->liveVoteAdd(119, '10000', 'test', 'test', 'test', ['aaa','bbb'], 0, 1, '0', '/mnt/hgfs/H/tmp/vim.jpg');

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


