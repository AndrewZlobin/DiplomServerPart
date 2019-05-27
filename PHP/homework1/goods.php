<?php


$goods = [
    [
        'id'=>1,
        'title'=>'Piano',
        'price'=>2345,
        'img' => 'piano.jpeg'
    ],
    [
        'id'=>2,
        'title'=>'Guitar',
        'price'=>1753,
        'img' => 'guitar.jpeg'
    ],
    [
        'id'=>3,
        'title'=>'Drum',
        'price'=>1224,
        'img' => 'drums.jpg'
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section>
    <?php foreach ($goods as $good):?>
        <article>
            <h3><?php echo $good['title']?></h3>
            <img src="/img/<?php echo $good['img'];?>" alt="<?php echo $good['img'];?>">
            <p><?php echo $good['price']?></p>
            <a href="good.php?id=<?php echo $good['id']?>">Подробнее</a>
        </article>
    <?php endforeach; ?>
</section>


</body>
</html>