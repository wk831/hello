<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/15
 * Time: 8:35
 */
function getJion($arr){
    $ji=[];
    $ou=[];
    foreach($arr as $k=>$v){
        if($v%2==0){
            $ou[]=$v;
        }else{
            $ji[]=$v;
        }
    }
    $request=array_merge($ji,$ou);
    return $request;
}
$arr=[1,2,3,4,5,6,7,8,9];
print_r(getJion($arr));