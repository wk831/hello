<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/23
 * Time: 8:36
 */
function Sum_Solution($n){
    $r=0;
    $n &&($r=(Sum_Solution($n-1) + $n));
    return $r;
}
$data=Sum_Solution(5);
var_dump($data);
