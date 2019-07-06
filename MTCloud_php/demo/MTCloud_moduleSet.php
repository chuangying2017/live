<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();

    $options = array(
        'departmentID' => 1,
        'livePcLogo' => '/H/tmp/vim.png',
        'livePcLogoUrl' => 'http://open.talk-fun.com',
        'playbackPcLogo' => '/H/tmp/vim.png',
        'playbackPcLogoUrl' => 'http://kai.talk-fun.com',
        'clientLogo' => '/H/tmp/vim.png',
    );

    $res = $MTCloud->moduleSet($options);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}
