<?php
$post = $_POST;
$url = $post['url'];

$get_short_link = function ($url){
    //парсим url, и делаем короткую ссылку
    $parse_url = parse_url($url);
    $short_link_creation = substr(strrev(md5($parse_url['path'])), 0, 7);
    return $result_short_link = $parse_url['host'] . "/" . $short_link_creation;
};

$file_treatment = function($filename){
    //переводим передаваемые файл в массив
    $file_in_array = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $file_in_array;
};

function link_to_reduce($url, $filename, $func1, $func2){

    //проверки на корректность введенных данных, которые я проверить не смог =(
    if ($url == null){
        print_r("Внимание!<br>Строка пуста<br>Повторите ввод!");
        return;
    }
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        print_r("Внимание!<br>Неккоректная ссылка!<br>Повторите ввод!");
        return;
    }

    //получаем короткую ссылку из анонимной функции
    $short_url = $func1($url);
    var_dump($short_url);

    //получаем массив данных из файла благодаря анонимной функции
    $file_array = $func2($filename);
    var_dump($file_array);

// Для проверки
//    $string = 'html/header => jk67h';
    //в переменные подставить не получилось
//    $after_delimiter = substr(stristr($string, ' => '), 4);
//    $before_delimiter = stristr($string, ' => ', true);
//    var_dump($before_delimiter);
//    var_dump($after_delimiter);
//$a = 0;

    $count_elems_in_array = count($file_array);
    var_dump($count_elems_in_array);

    for($i = 0; $i < $count_elems_in_array; $i++){
        if (stristr($file_array[$i], ' => ', true) == $url) {
            print_r("Такая короткая ссылка уже существует! <br>". $short_url. "<br>");
            $fp = fopen($filename, 'a');
            $remade_short_url .= substr(strrev(md5($short_url)),0,3);
            fwrite($fp, $remade_short_url);
            fclose($fp);
            print_r("Сгенерирована новая короткая ссылка: ! <br>". $short_url. $remade_short_url . "<br>");
        }
    }

    //Следущая часть кода не работает =(

    for($i = 0; $i < $count_elems_in_array; $i++) {
        if($count_elems_in_array === 0){
            file_put_contents($filename, $url . " => " . $short_url . PHP_EOL, FILE_APPEND | LOCK_EX);
            print_r("Создана новая короткая ссылка: ! <br>" . $short_url . "<br>");
        }
    }
}

link_to_reduce($url, "links.txt", $get_short_link, $file_treatment);