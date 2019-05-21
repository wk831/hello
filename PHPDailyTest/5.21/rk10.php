<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/21
 * Time: 8:35
 */
$array = [2,4,3,6,3,2,5,5];
function FindNumsAppearOnce($array){
    $len=count($array);
    $num=[];
    for($i=0;$i<=$len;$i++){
        if($array[$i]%2==1){
            return false;
        }
        if($array[$i]%2==0){
            $num[]=$array[$i];
        }
    }
     return $num;
}
var_dump($array);