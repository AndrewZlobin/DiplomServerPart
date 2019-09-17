<?php
/*Написать функцию - конвертер строки.
Возможности (в зависимости от второго аргумента - флаг, который указывает, какую именно операцию следует выполнить):
1) перевод всех символов в верхний регистр,
2) перевод всех символов в нижний регистр,
3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.`*/

function string_converter ($result_string, $flag) {
    switch ($flag) {
        case "all_upper":
            return mb_convert_case($result_string,MB_CASE_UPPER, "UTF-8");
        case "all_lower":
            return mb_convert_case($result_string,MB_CASE_LOWER, "UTF-8");
        case "first_upper":
            return mb_convert_case($result_string,MB_CASE_TITLE, "UTF-8");
    }
}

var_dump(string_converter("bla-bla-bla", "all_upper"));
var_dump(string_converter("какой-то текст", "all_upper"));
var_dump(string_converter("КТО ЗДЕСЬ?", "all_lower"));
var_dump(string_converter("WHO IS HERE?", "all_lower"));
var_dump(string_converter("A LIT BIT MORE CAPSLOCK!", "first_upper"));
var_dump(string_converter("just a text here", "first_upper"));
var_dump(string_converter("привет всем!", "first_upper"));
