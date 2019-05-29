<?php

/*Создать функцию по преобразованию нотаций:
строка вида 'this_is_string'
преобразуется в 'thisIsString' (CamelCase-нотация)*/

function camel_case_notation($string, $delimiter, $search){
    return lcfirst(str_replace($search, '', ucwords($string, $delimiter)));
}

var_dump(camel_case_notation('this_is_string', '_', '_'));
var_dump(camel_case_notation('create****forgotten**tag', '*', '*'));
var_dump(camel_case_notation('just!text!to!replace!!', '!', '!'));