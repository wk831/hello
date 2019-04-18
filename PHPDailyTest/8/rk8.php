<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/18
 * Time: 8:37
 */
//function GetUglyNumber_Solution($index)
//{
//
//
//}
num(14);
function num($m)
{
    if(!$m)
    {
       echo "请输入一个数";
    }
    while($m%2==0)
    {
        $m/=2;
        echo 2;
    }
    while($m%3==0)
    {
        $m/=3;
        echo 3;
    }
    while($m%5==0)
    {
        $m/=5;
        echo 5;
    }
    if($m==1)
    {
        echo "<br />";
        echo "这是丑数";
    }else
    {
        echo "这不是丑数";
    }
}