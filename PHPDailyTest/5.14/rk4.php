<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/14
 * Time: 8:34
 */

function calSteps($n){
    if($n==1){
        return 1;
    }elseif($n==2){
        return 2;
    }else{
        return calSteps($n-1) + calSteps($n-2);
    }
}
echo calSteps(10);