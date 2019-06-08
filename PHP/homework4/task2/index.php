<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SomeLink</title>
</head>
<body>

<div>
    <p>Введите ссылку в поле ниже (мы её проверим):</p>
</div>
<div>
    <form name="link_checker" action="link_reduction.php" method="post">
    <input type="url" name="url" placeholder="ссылку, пожалуйста!" required autofocus autocomplete="off">
    <input type="submit" value="Проверить!">
    </form>
</div>

</body>
</html>