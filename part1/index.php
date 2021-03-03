<?php
/**
 * 20个随机数中找到最大或最小数的程序，并说明算法复杂度
 */
function sortNum(){
    //先生成20个随机数
    $ran = range(1,200);
    shuffle($ran);
    $arr = array_slice($ran,0,20);
    var_export($arr);
    echo "\n";
    $min = 0;
    foreach ($arr as $k => $v){

        if($k == 0 || $v < $min){
            $min = $v;
        }
        if($k == 0 || $v > $max){
            $max = $v;
        }
    }
    echo "min :".$min."\n";
    echo "max :".$max."\n";
}

sortNum();

/*
 * 复杂度分析，时间复杂度O(n),空间复杂度O(1)
 */