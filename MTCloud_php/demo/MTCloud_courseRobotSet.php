<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();

    $userList = [
        [
            'nickname' => '王雨--河北农业大学',
            'avatar' => '',
        ],
        [
            'nickname' => '王宇--河北农业大学',
            'avatar' => '',
        ]
    ];

    $res = $MTCloud->courseRobotSet(11461, $userList);

    var_dump($res);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


