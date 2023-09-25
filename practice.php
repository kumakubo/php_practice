<?php
echo 'hello php!';
//1.$a + $b
$a = 3;
$b = 7;
echo $a + $b;
//2.8月を表示する。　変数名と、要素番号の間の半角スペース削除　
$array_month = [
    "1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"
    ];
echo $array_month[7];
//3.名前’s World!を表示
$hello = "Hello,";
$name = "kumakubo";
$world = "'s World!";
echo $hello.$name.$world;
//4.tech boostと表示する
$tech_boost = 'tech';
$tech_boost .= '_boost';
echo $tech_boost;
//5.プログラムの修正　１２月を表示する。　変数名と、要素番号の間の半角スペース削除
$_2018_calender = [
    "January" => "１月",
    "February" => "２月",
    "March" => "３月",
    "April" => "４月",
    "May" => "５月",
    "June" => "６月",
    "July" => "７月",
    "August" => "８月",
    "September" => "９月",
    "October" => "１０月",
    "November" => "１１月",
    "December" => "１２月"
    ];
echo $_2018_calender["December"];






 