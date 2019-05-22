<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/22
 * Time: 8:36
 */

$str ="student. a am I";
$word=explode(' ',$str);
$word=array_reverse($word);
$str=implode(' ',$word);
print_r($str);