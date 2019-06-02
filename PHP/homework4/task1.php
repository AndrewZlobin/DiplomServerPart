<?php

/*Удаление каталога. Написать рекурсивную функцию удаления непустого каталога
1.написать функцию, которая будет удалять каталог и все его содержимое
2.Осуществить рекурсивный вызов в подкаталогах
3.Дано: path - путь к каталогу (каталог должен быти с подкаталогами и файлами)*/

function cleaning_directory_virus($directory_path) {
    if (is_file($directory_path)){
        return unlink($directory_path);
    }
    if(is_dir($directory_path)){
        $scanning = array_slice(scandir($directory_path), 2);
        foreach ($scanning as $value) //не понял только, почему foreach неправильно работает, если использовать фигурные скобки?
            cleaning_directory_virus($directory_path . '/' . $value);
            return rmdir($directory_path);
    }
}

cleaning_directory_virus("directory_for_task_1");