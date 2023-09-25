<?php
//1.引数に数値を入れると、数値を2倍にして返す関数
function double($a) {
    return $a * 2;
}
echo double(6);

//2.$aと$Bを借り引数に持ち、.$aと$Bを足した結果を返す関数
function add($a,$b) {
    return $a + $b;
}
echo add(4,6);

//3.配列の要素をすべてかけた結果を返す関数
$array = array(1,3,5,7,9);
echo array_product($array);

//for文
$a = array(1,3,5,7,9);
function num($arr) {
    $result = 1;
    for($i = 0 ; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    return $result;
}
echo num($a);

//foreach文
function num2($arr){
    $result = 1;
    foreach($arr as $num) {
        $result *= $num;
    }
    return $result;
}
echo num2($a);

//4.配列の中で1番大きい値を返す max_array という関数
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}
$b = array(1,3,4,8,7);
echo max_array($b);

//ビルトイン関数を実際に使う　strip_tags
$text = '<p>Test paragraph.</p><!--Comment ==> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_pushを使う
$animals = array("cat","dog","panda");
array_push($animals, "bird");
print_r($animals);

//array_mergeを使う
$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = array_merge($array1,$array2);
print_r($array3);

//time,mktimeを使う
echo '現在のUnixタイムスタンプ:'.time();
$timestamp = mktime(23,30,30,9,24,2023);
echo 'タイムスタンプ'.$timestamp;

//dateを使う
echo date("Y-m-d H:i:s");
//test