<?php
/*Сгенерировать 5 массивов из случайных чисел.
Вывести массивы и сумму их элементов на экран.
Найти массив с максимальной суммой элементов.
Вывести его на экран еще раз.
Генерация массива и подсчет суммы - разные функции*/

$get_array_with_max_values = function ($arr){
    return array_sum($arr);
};

$get_max = function($arr) {
    return max($arr);
};

function generate_random_arrays ($amount, $func_first, $func_second){

    $array_of_max_values = [];

    for ($i = 1; $i <= $amount; $i++) {
        echo "Случайный массив №" . ($i);
        var_dump($arr[$i] = array(rand(5, 10), rand(7, 12), rand(10, 15)));
        echo "Сумма значений в массиве №" . ($i);
        $values_sum = $func_first($arr[$i]);
        var_dump($values_sum);
        if ($values_sum > 0) {
            array_push($array_of_max_values, $values_sum);
        }
    }
    foreach ($array_of_max_values as $key => $val){
        $max = $func_second($array_of_max_values);
        if ($max === $val) {
            echo "Максимальная сумма значений, равная " . $val . ", находится в массиве №" . ($key+1);
        }
    }
}

generate_random_arrays(5, $get_array_with_max_values, $get_max); //будем создавать пять, как требуется по заданию