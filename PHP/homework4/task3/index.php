<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images Uploader</title>
</head>
<body>

<form name="images-upload" action="images-upload.php" method="post" enctype="multipart/form-data">
    <div><input name="images[]" multiple accept="image/*" type="file" max="2048000"></div>
    <div><input type="submit" value="Images Send"></div>
</form>

</body>
</html>
