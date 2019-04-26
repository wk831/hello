<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/26
 * Time: 8:38
 */
print_r(FindNumbersWithSum([1,2,3,4,5,6,7,8,9],9));
function FindNumbersWithSum($array,$sum){
    $a=[];
    $len=count($array);
    if($len<2){
        return false;
    }
    for($i=0;$i<$len;$i++){
        for($j=0;$j<$len;$j++){
            if($array[$i]+$array[$j]==$sum){
              $a[]=$array[$i]*$array[$j];
            }
        }
    }
    sort($a);
    return $a[0];
}