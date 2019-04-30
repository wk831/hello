<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/4/30
 * Time: 8:36
 */
class Math{
    public static function getNum($n)
    {
        $num=0;
        while($n)
        {
            $yu=$n%2;
            if($yu==1)
            {
                $num++;
            }
            $n=floor($n/2);
        }
        return $num;
    }
}