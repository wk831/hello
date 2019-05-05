<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/5
 * Time: 8:36
 */
class Math{
    public static function Number($arr,$target,$start=0,$end=0)
    {
        $middle_key=floor(($start+$end)/2);
        $middle=$arr[$middle_key];
        if($target==$middle)
        {
            return true;
        }
        if($start==$end)
        {
            return false;
        }
        if($middle>$target)
        {
            $end=$middle_key-1;
            return self::Number($arr,$target,$start,$end);
        }
        if($middle<$target)
        {
            $start=$middle_key+1;
            return self::Number($arr,$target,$start,$end);
        }
    }
    public static function Number1($arr,$target)
    {
        $start = 0;
        $end = count($arr) - 1;
        while (true) {
            $middle_key = floor(($start + $end) / 2);
            $middle = $arr[$middle_key];
            if ($target == $middle) {
                return true;
            }
            if ($start == $end) {
                return false;
            }
            if ($middle > $target) {
                $end = $middle_key - 1;
                return self::Number($arr, $target, $start, $end);
            }
            if ($middle < $target) {
                $start = $middle_key + 1;
                return self::Number($arr, $target, $start, $end);
            }
        }
    }
}