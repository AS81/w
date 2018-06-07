<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php-1 Ex 4</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<h4>Гостевая книга</h4>
<?php
require __DIR__.'/functions.php';
require __DIR__.'/classes/TextFile.php';
require __DIR__.'/classes/GuestBook.php';
$gb = new GuestBook(__DIR__.'/Db.txt');
var_dump($gb->getData()); 
var_dump($gb->append('tratata'));
$gb->save();

echo '<hr><hr><hr>';
$lines=[];
$lines=read(__DIR__.'/Db.txt');
foreach ($lines as $key => $value) { ?>
    <p><?php echo $value; ?></p>
<?php }
?>
<br>
<form method="POST" action="/send.php">
    <textarea cols="45" rows="3" minlength="5" maxlength="500" name="newrecord" placeholder="Введите ваш текст"></textarea>
    <br>
    <input type="submit" value="Добавить">
</form>
<hr>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    А здесь Вы можете загрузить картинку
    <input type="file" name="newfile">
    <input type="submit" value="Загрузить">
</form>
</body>
</html>