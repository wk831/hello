<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/24
 * Time: 8:36
 */
function Add($num1,$num2){
    if($num2==0){
        return $num1;
    }
    $num=$num1^$num2;
    $sum=($num1 & $num2)<<1;
    return Add($num,$sum);
}
echo Add(6,4);