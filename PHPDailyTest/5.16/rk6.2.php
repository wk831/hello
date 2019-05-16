<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/16
 * Time: 8:36
 */
function calFn($n,$m){
    $num=0;
    $last=[];
    for($n;$n<=$m;$n++){
        $arr=str_split($n,1);
        $a=array_count_values($arr);
        if(isset($a['1'])){
            $num=$num+1;
            $last[]=$n;
        }
    }
    return $num;
}
print_r(calFn(1,13));