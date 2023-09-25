<?php

//1.私は「あなたの名前です」と表示. if文を==に修正
$name = "kumakubo";
if ($name == "kumakubo") {
    echo "「私はあなたの名前です」";
} else {
    echo "「あなたの名前ではありません」";
}
//2.for分を使って、1から10000までの合計の値を表示
$total = 0;
for($a = 0; $a <= 10000; $a++) {
    $total += $a;
}
echo $total;
//3.foreach文で順番に出す
$fruits = ["APPLE","PEACH","ORANGE","GRAPE","MELON"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}
//4.1から100までの間で、5の倍数のみ表示する
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}