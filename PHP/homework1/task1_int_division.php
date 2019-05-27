<?php
//Дано число $num=800.
//Делите его на 2 столько раз, пока результат деления не станет меньше 50.
//Какое число получится?
//Посчитайте количество итераций, необходимых для этого
//(итерация - это проход цикла).
//Решите задачу сначала через цикл while, а потом через цикл for.

var_dump("Вариант с while");

$num = 800;
$while_counter = 0;

while ($num >= 50) {
    $num /= 2;
    var_dump($num);
    $while_counter++;
}

var_dump("Количество итераций для while = ". $while_counter);

var_dump("Вариант с for");

//$num_again = 800;
$for_counter = 0;
for ($num_again = 800; $num_again >=50; $num_again /= 2) {
    var_dump($num_again);
    $for_counter++;
}

var_dump("Количество итераций для for = ". $for_counter);