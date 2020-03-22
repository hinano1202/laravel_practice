<?php

//1
$name = 'ひなの';

if($name = 'ひなの'){
    echo '私はひなのです';
} else {
    echo 'ひなのではありません。';
}


//2
$total = 0;
for($i = 0; $i <= 1000; $i++){
    $total += $i;
}

echo $total;

//3
$fruits =["apple", "banana", "melon", "orange", "grape"];
foreach ($fruits as $fruit) {
echo '要素は' . $fruit;
echo "\n";
}

//4
/* for文の始めの値を定義する*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}