<?php
namespace App\Libs;
use \App\Libs\OSS;
use DateTime;

class Functions{

    public static function getImageUrl($path){
        if($path=="")return false;
        return OSS::getPrivateObjectURLWithExpireTime("hcc-blog",$path,new DateTime('+1 day'));
    }

}
?>