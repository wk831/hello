<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/17
 * Time: 8:34
 */
function GetUglyNumber_Solution($index){
    $m=1;
    $unly_num=0;
    while(true){
        if(GetUglyNumber($m)){
            $unly_num+=1;
        }
        if($unly_num==$index){
            return $m;
        }
        $m++;
    }
}
function GetUglyNumber($m){
    if($m==1) return true;
    while($m%2==0){
        $m/=2;
    }
    while($m%3==0){
        $m/=3;
    }
    while($m%5==0){
        $m/=5;
    }
    if($m==1){
        return true;
    }else{
        return false;
    }
}
print_r(GetUglyNumber_Solution(5));