<?php
/*Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt').
Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.*/

function get_file_name($path, $suffix) {
    return basename("$path", "$suffix");
}

var_dump(get_file_name('C:\OpenServer\testsite\www\someFile.txt', '.txt'));
var_dump(get_file_name('C:\OpenServer\testsite\www\anotherFile.exe', '.exe'));
var_dump(get_file_name('D:\OpenServer\testsite\www\!some-picture_.bmp', '.bmp'));