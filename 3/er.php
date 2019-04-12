<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/12
 * Time: 8:35
 */
$a=array();
for($i=0;$i<=9;$i++)
{
    for($n=0;$n<=9;$n++)
    {
        for($m=0;$m<=9;$m++)
        {
            if($i*$i*$i+$n*$n*$n+$m*$m*$m==100*$i+10*$n+$m)
            {
                $a[]=100*$i+10*$n+$m;
            }
        }
    }
}
print_r($a);