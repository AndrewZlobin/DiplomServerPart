<?php
//Отсортировать массив по 'price'
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

//echo($arr[1]);

asort($arr);
echo("Массив $arr, отсортированный по 'price', в порядке возрастания");
foreach ($arr as $new_arr) {
    $result = $new_arr['price'];
    var_dump($result);
}

arsort($arr);
echo("Массив $arr, отсортированный по 'price', в порядке убывания");
foreach ($arr as $new_arr) {
    $result = $new_arr['price'];
    var_dump($result);
}

//второй вариант (взят из мануала)
foreach ($arr as $key => $row) {
    $price  = array_column($arr, 'price');
    $count = array_column($arr, 'count');
}

$second_result = array_multisort($price, SORT_ASC, $count, SORT_DESC, $arr);
echo "Другой вариант";
var_dump("Цена отсортирована в порядке возрастания");
var_dump($price, $count);