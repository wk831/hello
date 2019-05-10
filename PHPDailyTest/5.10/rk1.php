<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2019/5/10
 * Time: 8:35
 */
$str='Have you ever gone shopping and';
function serchPos($str){
    if(strlen($str)==0){
        return;
    }
    $len=strlen($str);
    $temArray=[];
    for($i=0;$i<$len;$i++){
        if($str[$i] !=' '){
            if(isset($temArray[$str[$i]])){
                $temArray[$str[$i]]+=1;
            }else{
                $temArray[$str[$i]]=1;
            }
            if($temArray[$str[$i]]>=3){
                return $str[$i];
            }
        }
    }
    return '没有找到匹配项';
}
echo "<pre>";
print_r(serchPos($str));