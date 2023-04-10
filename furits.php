<?php

// 桃とイチゴの個数
$num_peaches = 15;
$num_strawberries = 15;

// 桃とイチゴの価格の範囲
$peach_price_min = 200;
$peach_price_max = 300;
$strawberry_price_min = 400;
$strawberry_price_max = 500;

// 桃とイチゴの価格をランダムに生成
$peach_prices = array();
$strawberry_prices = array();

for ($i = 0; $i < $num_peaches; $i++) {
    $price = rand($peach_price_min, $peach_price_max);
    array_push($peach_prices, $price);
}

for ($i = 0; $i < $num_strawberries; $i++) {
    $price = rand($strawberry_price_min, $strawberry_price_max);
    array_push($strawberry_prices, $price);
}

// 桃とイチゴの最高値、最安値、および平均価格を計算
$max_peach_price = max($peach_prices);
$min_peach_price = min($peach_prices);
$avg_peach_price = array_sum($peach_prices) / $num_peaches;

$max_strawberry_price = max($strawberry_prices);
$min_strawberry_price = min($strawberry_prices);
$avg_strawberry_price = array_sum($strawberry_prices) / $num_strawberries;

// 結果を出力（平均価格は少数第1位で四捨五入）
echo "桃の最高値: " . $max_peach_price . "\n";
echo "桃の最安値: " . $min_peach_price . "\n";
echo "桃の平均価格: " . round($avg_peach_price,1) . "\n\n"; 

echo "イチゴの最高値: " . $max_strawberry_price . "\n";
echo "イチゴの最安値: " . $min_strawberry_price . "\n";
echo "イチゴの平均価格: " . round($avg_strawberry_price,1) . "\n";

?>
