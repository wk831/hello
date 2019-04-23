<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/23
 * Time: 8:38
 */
$str='student. a am I';

    $word=explode(' ',$str);
    $word=array_reverse($word);
    $s=implode(' ',$word);
    print_r($s);
