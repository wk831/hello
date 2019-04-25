<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/25
 * Time: 8:51
 */
class Math{
    public static function Add($num1,$num2)
    {
        if($num2==0) return $num1;
        $a=$num1^$num2;
        $b=($num1&$num2)<<1;
        return self::Add($a,$b);
    }
}
