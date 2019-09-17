<?php
/*Дан массив, состоящий из целых чисел.
Выполнить сортировку массива по возрастанию суммы цифр чисел.
Например, дан массив [13, 55, 100].
После сортировки он будет следующего вида: [100, 13, 55],
тк сумма цифр числа 100 = 1,
сумма цифр числа 13 = 4, а 55 = 10.
На экран вывести исходный массив,
массив после сортировки и сумму цифр каждого числа отсортированного массива.*/

function super_array_method($arr, $empty_arr = []) {
    echo 'Исходный массив:';
    var_dump($arr);
    foreach ($arr as $key => $value){
        $sum_of_digits = array_sum(str_split($value));
        echo "Сумма цифр числа № " . ($key+1) . " равна: ";
        var_dump($sum_of_digits);
        array_push($empty_arr, $sum_of_digits);
    }
    echo "Новый массив: ". "<br>";
    var_dump($empty_arr);
}

$arr1 = array(13, 55, 100);
super_array_method($arr1);