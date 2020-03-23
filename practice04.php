<?php

//1

function kakezan($value){
    return  $value * 2;
}

echo kakezan(2);


//2

function tashizan($a, $b){
    return $a += $b;
}

echo tashizan(5, 7);


//3

function kakezan_all($arr){
    $result = 1;
    foreach($arr as $arra){
        $result *=  $arra;
    }
    return $result;
}

echo kakezan_all(array(1,3,5,7,9));

//4

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number){
            $max_number = $a;
        } else{
            
        }
    }
    return $max_number;
}

echo max_array(array(2,5,1,6,7,11));



//5
//____strip_tags 指定要素からタグを消す

$str = "<h1>PHP</h1><br><p>練習中です</p><br><p>練習中、です</p>";
echo strip_tags($str);

//____array_push 配列の最後に要素を追加

$animal = ['cat','dog','lion','penguin'];
array_push($animal,'mouse','kirin');
print_r($animal);


//____array_merge 配列同士の結合

$animal = ['cat','rabbit','dog'];
$sweets =['cake','chocolate','cream'];
$color = ['red','black','pink'];

$favorite = array_merge($animal,$sweets,$color);
print_r($favorite);


//____time 現在時刻のUnixタイムスタンプを取得

echo time();

echo "\n";

//____mktime 指定日時のタイムスタンプを取得（2020年4月1日15：00）

echo mktime(15,0,0,4,1,2020);

echo "\n";


//____date タイムスタンプを日付で表示
echo date('Y年m月d日', time());






