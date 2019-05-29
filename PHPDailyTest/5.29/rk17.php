<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/29
 * Time: 8:37
 */
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
$str=Combine($arr_A, $arr_B);
print_r($str);
function Combine($arr_A, $arr_B){
    $arr=array_merge($arr_A,$arr_B);
    $len=count($arr);
    for($i=1;$i<=$len;$i++){
        for($k=0;$k<$len-$i;$k++){
            if($arr[$k]>$arr[$k+1]){
                $arr[$k]=$arr[$k]^$arr[$k+1];
                $arr[$k+1]=$arr[$k]^$arr[$k+1];
                $arr[$k]=$arr[$k]^$arr[$k+1];
            }
        }
    }
    return $arr;
}