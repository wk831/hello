<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/17
 * Time: 8:37
 */
calFn(100,1300);
function calFn($n,$m)
{
    $str=range($n,$m);
    echo substr_count(join($str),'1');
}