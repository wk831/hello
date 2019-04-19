<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/19
 * Time: 8:37
 */
$n=3;
$m=10;
$r=LastRemaining_Solution($n, $m);
var_dump($r);
function LastRemaining_Solution($n, $m)
{
    $list=range(1,$n);
    $i=1;
    while(count($list)>1)
    {
       foreach($list as $k=>$v)
       {
           if($i==$m)
           {
               unset($list[$k]);
               $i=1;
           }else
           {
               $i++;
           }
       }
    }
    return $list;
}