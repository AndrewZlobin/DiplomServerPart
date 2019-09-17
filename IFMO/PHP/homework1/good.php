<?php


$goods = [
    [
        'id'=>1,
        'title'=>'Piano',
        'price'=>2345
    ],
    [
        'id'=>2,
        'title'=>'Guitar',
        'price'=>1753
    ],
    [
        'id'=>3,
        'title'=>'Drum',
        'price'=>1224
    ],
];

$get = $_GET;
$id = $get['id']; // получаем id товара
//$auth = $get['auth'];

// TODO: получить товар из массива $goods по id, сохранить в переменную $good

foreach ($goods as $val) {
    if ($val['id'] == $id) {
        $good_title = $val['title'];
        $good_price = $val['price'];
    }
}

$isAuth = false; // флаг - авторизован пользователь или нет

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section>
<!--    TODO: вывести информацию о товаре $good-->

    <div>Информация о товаре:</div>
    <h1>
        Название товара:
    </h1>
    <h3>
<!--        так и не смог понять, на что ругается storm, но всё работает-->
        <?php echo $good_title; ?>
    </h3>
    <h1>
        Цена:
    </h1>
    <h3>
        <?php echo $good_price; ?> руб.
    </h3>
</section>


<!--    TODO: если пользователь авторизован $isAuth - отобразить блок для добавления комментариев, в противном случае, сообщить, что ему нужно авторизоваться-->
    <?php if ($isAuth): ?>
        <div>Поле для комментариев:</div>
        <textarea placeholder="Оставьте комментарий о товаре" rows="10" cols="50"></textarea>
        <div>
            <input type="submit">
        </div>
    <?php else: ?>
        <p>Извините, комментарий недоступен</p>
    <?php endif; ?>

</body>
</html>
