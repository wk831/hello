<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/28
 * Time: 8:37
 */
$target = 7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$str=Find($target,$array);
var_dump($str);
function Find($target,$array){
    if($array[0][0]>$target){
        return false;
    }
    $len=count($array);
    $last=$array[$len-1];
    $childlen=count($last);
    if($last[$childlen-1]<$target){
        return false;
    }
    foreach($array as $k=>$v){
        if($v[$childlen-1]<$target){
            unset($array[$k]);
            continue;
        }
        if($v[0]>$target){
            $array=array_slice($array,0,$k-1);
            break;
        }
    }
    foreach($array as $k=>$v){
        if(in_array($target,$v)){
            return true;
        }
    }
    return true;
}