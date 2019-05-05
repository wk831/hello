<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/5
 * Time: 8:36
 */
include 'Math.php';
$objNum=new Math();
$arr=[1,2,3,4,5,6,7,8,9];
$list=$objNum->Number($arr,3);
var_dump($list);