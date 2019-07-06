<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->clipUpdate(1262055,'asdjiasdh',array(array('start'=>60,'end'=>120)));

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}