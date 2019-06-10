<?php
//var_dump($_SERVER);
//var_dump($_FILES);

define("NAME", $_FILES['images']['name']);
define("TYPE", $_FILES['images']['type']);
define("TMP_NAME", $_FILES['images']['tmp_name']);
define("ERROR", $_FILES['images']['error']);
define("SIZE", $_FILES['images']['size']);
define("METHOD", $_SERVER['REQUEST_METHOD']);
//var_dump($_FILES);

if(METHOD !== "POST"){
    echo "Выбран неверный метод передачи данных!";
    return;
}

for ($i = 0; $i < count(TYPE); $i++) {
    if (ERROR[$i] !== 0) {
        echo "Возникла ошибка при загрузке файла(файлов)!" . "<br>";
        echo "Файл " . NAME[$i] . ". Ошибка: " . ERROR[$i] . "<br>";
        return;
    }
    if (SIZE[$i] > 1000000) {
        echo "Размер файла(файлов) превышает 1 Мб! " . "<br>";
        echo "Файл " . NAME[$i] . ". Размер файла: " . SIZE[$i] . "<br>";
        return;
    }
    if (TYPE[$i] !== 'image/jpeg') {
        echo "Формат файла(файлов) отличается от jpeg!" . "<br>";
        echo "Файл " . NAME[$i] . ". Формат файла: " . substr(TYPE[$i], 6) . "<br>";
        return;
    }

    $new_name_of_image[$i] = substr(md5(strrev(NAME[$i])),0, 5) ."_". date("Ymd") . ".jpeg";
    $destination = "img/";
//    var_dump($new_name_of_image[$i]);
//    var_dump($destination);
    if (!move_uploaded_file(TMP_NAME[$i], "img/$new_name_of_image[$i]")){
        echo "Не удалось загрузить файл:" . "<br>";
        echo "Исходное название: ". NAME[$i]."<br>"."Новое название: ".$new_name_of_image[$i] . "<br>";
    } else {
        echo "Успешная загрузка файла:" . "<br>";
        echo "Исходное название: ". NAME[$i]."<br>"."Новое название: ".$new_name_of_image[$i] . "<br>";
    }
}
?>

<div>
    <a href="index.php">Вернуться к загрузке</a>
</div>