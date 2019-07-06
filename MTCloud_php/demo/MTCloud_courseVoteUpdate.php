<?php
require __DIR__.'/../MTCloud.class.php';

try{

    $MTCloud = new MTCloud();

    $op = array('aaa', 'bbb');

    $result = $MTCloud->courseVoteUpdate(17339, array('image' => '/mnt/hgfs/H/tmp/vim.png', 'op' => $op));

    var_dump($result);

}catch(MTCloudException $e){
    var_dump($e->getMessage());
}