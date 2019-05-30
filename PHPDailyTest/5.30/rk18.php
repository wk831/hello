<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/30
 * Time: 8:34
 */
$n = 100;
$str=NumberOf1($n);
print_r($str);
function NumberOf1($n)
{
    $num=0;
    while($n)
    {
        $yu=$n%2;
        if($yu==1)
        {
            $num++;
        }
        $n=floor($n/2);
    }
    return $num;
}