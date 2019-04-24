<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/24
 * Time: 8:38
 */

function Sum_Solution($n)
{
    $r=0;
    $n && ($r=(Sum_Solution($n-1) + $n));

    return $r;
}
$n=Sum_Solution(10);
var_dump($n);