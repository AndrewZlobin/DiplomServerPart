<?php
/*Написать функцию - конвертер строки.
Возможности (в зависимости от второго аргумента - флаг, который указывает, какую именно операцию следует выполнить):
1) перевод всех символов в верхний регистр,
2) перевод всех символов в нижний регистр,
3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.`*/

$all_to_upper = function($string) {
    return strtoupper($string);
};
$all_to_lower = function($string) {
    return strtolower($string);
};
$only_first_upper = function($string) {
    return ucfirst($string);
};

function string_converter ($result_string, $flag) {
    return $flag($result_string);
}

var_dump(string_converter("bla-bla-bla", $all_to_upper));
var_dump(string_converter("WHAT IS HAPPENING HERE?", $all_to_lower));
var_dump(string_converter("A LIT BIT MORE CAPSLOCK!", $only_first_upper));
var_dump(string_converter("just a text here", $only_first_upper));