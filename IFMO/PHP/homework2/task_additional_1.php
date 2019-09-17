<?php
/*Дано два текста.
Определите степень совпадения текстов
(разработать алгоритм определения соответствия по 5 балльной шкале).*/

function determine_line_similarity ($str1, $str2) {
    $result = similar_text($str1, $str2, $percents);
    $percents = intval($percents);


    if ($percents <= 20) {
        var_dump("Результат сравнения строки\n" . $str1 . "\n и строки \n" . $str2 . "\nпо 5-ти бальной шкале равна \t1");
    } elseif ($percents > 20 && $percents <= 40){
        var_dump("Результат сравнения строки\n" . $str1 . "\n и строки \n" . $str2 . "\nпо 5-ти бальной шкале равна \t2");
    } elseif ($percents > 40 && $percents <= 60){
        var_dump("Результат сравнения строки\n" . $str1 . "\n и строки \n" . $str2 . "\nпо 5-ти бальной шкале равна \t3");
    } elseif ($percents > 60 && $percents <= 80){
        var_dump("Результат сравнения строки\n" . $str1 . "\n и строки \n" . $str2 . "\nпо 5-ти бальной шкале равна \t4");
    } elseif ($percents > 80 && $percents <= 100){
        var_dump("Результат сравнения строки\n" . $str1 . "\n и строки\n" . $str2 . "\nпо 5-ти бальной шкале равна \t5");
    }
    return $result;
}

determine_line_similarity('В траве сидел кузнечик', 'Зелененький такой');