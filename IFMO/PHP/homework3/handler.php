<?php
$post = $_POST;
// var_dump($post);
$mail = $post['mail'];
$pwd = $post['pwd'];
$pwd_repeat= $post['pwd_repeat'];
echo "Email пользователя: $mail";
echo "Пароль пользователя: $pwd";
echo "Повтор пароля: $pwd_repeat";
if ($pwd_repeat == $pwd){
    echo "Еще и пароли совпадают!";
} else {
    echo "Странно, а пароли-то не совпадают!";
}