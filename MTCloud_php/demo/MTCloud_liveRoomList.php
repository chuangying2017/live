<?php
require __DIR__.'/../MTCloud.class.php';


try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->liveRoomList('119',"2014-12-20","2014-12-26");
    var_dump($result);

}catch(MTCloudException $e){
}
