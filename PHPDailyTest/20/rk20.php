<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/6
 * Time: 8:36
 */
$x=1;
$y=1;
$str=CountSteps($x,$y);
print_r($str);
function CountSteps($x,$y){
    $arr=[];
    for($i=1;$i<$x;$i++)
    {
        for($j=1;$j<$y;$y++)
        {
            $a=$arr[$i][$j];
        }
    }
    return $a;
}