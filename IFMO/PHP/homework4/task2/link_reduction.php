<?php
$post = $_POST;
$url = $post['url'];

$get_short_link = function ($url){
    //парсим url, и делаем короткую ссылку
    $parse_url = parse_url($url);
    $short_link_creation = substr(strrev(md5($parse_url['path'])), 0);
    return $short_link_creation;
};

$file_treatment = function($filename){
    //переводим передаваемые файл в массив
    $file_in_array = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $file_in_array;
};

function link_to_reduce($url, $filename, $func1, $func2)
{

    $url_parse_for_check = parse_url($url);
    //проверки на корректность введенных данных.
    if (!$url_parse_for_check['path']) {
        print_r("Внимание!<br>Строка пуста<br>Повторите ввод!");
        return;
    }
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        print_r("Внимание!<br>Неккоректная ссылка!<br>Повторите ввод!");
        return;
    }

    //получаем короткую ссылку из анонимной функции
    $short_url = $func1($url);
//    var_dump($short_url);

    //получаем массив данных из файла благодаря анонимной функции
    $file_array = $func2($filename);
//    var_dump($file_array);

    $count_elems_in_array = count($file_array);
//    var_dump($count_elems_in_array);

    $short_url_exists = 0;
    $update_counter = 0;

    for ($i = 0; $i < $count_elems_in_array; $i++) {
        if (stristr($file_array[$i], ' => ', true) == $url) {
            print_r("Такая короткая ссылка уже есть в файле! <br>" . $short_url . "<br>");
            $short_url_exists++;
        }
    }

    if ($short_url_exists>0) {
        for ($i = 0; $i <= $count_elems_in_array; $i++) {
            if ($short_url == substr(stristr($file_array[$i], ' => '), 4)) {

                $short_url .= rand(1,9);
                print_r("Обновлена короткая ссылка:  <br>" . $short_url . "<br>");
                $update_counter++;
                //Если требуется именно перезаписывать, то требуется раскомментировать
                //код ниже (но в таком случае текстовой файл будет перезаписываться
                //каждый раз полностью)

                /*$fp = fopen($filename, "w+");
                fwrite($fp,"$url => $short_url\n");
                fclose($fp);*/

            }
        }

    }

    if (!$update_counter){
        file_put_contents($filename, $url . " => " . $short_url . PHP_EOL, FILE_APPEND | LOCK_EX);
        print_r("Создана новая короткая ссылка:<br>" . $short_url . "<br>");
    }
}

link_to_reduce($url, "links.txt", $get_short_link, $file_treatment);

?>
<div>
    <a href="index.php">Попробовать снова!</a>
</div>


