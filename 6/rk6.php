<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/16
 * Time: 8:36
 */
$array=arr(array([1,2,3,4,5,6]));
$array=arr(array([1,3,5,2,4,6]));
var_dump($array);
function arr($array)
{
    $tmp1=[];
    $tmp2=[];
    for($i=0;$i<count($array);$i++)
    {
        if($array[$i]%2)
        {
            $tmp1[]=$array[$i];
        }else
        {
            $tmp2[]=$array[$i];
        }
    }
    for($j=0;$j<count($tmp2);$j++)
    {
        $tmp1[]=$tmp2[$j];
    }
    return $tmp1;
}