<?php

// 果物の個数
$num_peaches = 15;
$num_strawberries = 15;

// 価格の範囲
$peach_price_min = 200;
$peach_price_max = 300;
$strawberry_price_min = 400;
$strawberry_price_max = 500;

//桃の価格生成
$peach_prices = array();
for ($i = 0; $i < $num_peaches; $i++) {
    $price = rand($peach_price_min, $peach_price_max); 
    array_push($peach_prices, $price); 
}

//イチゴの価格生成
$strawberry_prices = array();
for ($i = 0; $i < $num_strawberries; $i++) {
    $price = rand($strawberry_price_min, $strawberry_price_max); 
    array_push($strawberry_prices, $price); 
}

// 桃の価格、最高値、最低値、平均値
$max_peach_price = max($peach_prices); 
$min_peach_price = min($peach_prices); 
$peach_avg_price = array_sum($peach_prices) / count($peach_prices); 

// イチゴの価格、最高値、最低値、平均値
$max_strawberry_price = max($strawberry_prices); 
$min_strawberry_price = min($strawberry_prices); 
$strawberry_avg_price = array_sum($strawberry_prices) / count($strawberry_prices); 

//桃の出力
echo "--桃の価格--\n";
for ($i = 0; $i < count($peach_prices); $i++) {
    echo "桃" . ($i + 1) . ": " . $peach_prices[$i] . "円\n";
}
echo "桃の最高値: " . $max_peach_price . "円\n";
echo "桃の最低値: " . $min_peach_price . "円\n";
echo "桃の平均価格: " . round($peach_avg_price, 1) . "円\n\n";

//イチゴの出力
echo "--イチゴの価格--\n";
for ($i = 0; $i < count($strawberry_prices); $i++) {
    echo "イチゴ" . ($i + 1) . ": " . $strawberry_prices[$i] . "円\n";
}
echo "イチゴの最高値: " . $max_strawberry_price . "円\n";
echo "イチゴの最低値: " . $min_strawberry_price . "円\n";
echo "イチゴの平均価格: " . round($strawberry_avg_price, 1) . "円\n";

?>
