<!DOCTYPE html>
<html lang ="ru">
<head>
    <meta charset="utf-8">
    <title>PHP1_Home-L4</title>
</head>
<body>
Гостевая книга.
<?php
require __DIR__.'/../Models/App/GuestBook.php';
$pathDb=__DIR__.'/db.txt';
$gb = new guestbook($pathDb);
echo "<hr>";
foreach ($gb->getData() as $key=>$rec) {
    $key1=$key+1;
    echo $key1. ' гостевая запись из '.count($gb->getData()).':';?>
    <p><?php echo $rec.'<br><br>'; ?></p>
<?php }
//var_dump(($gb->append('4 stroka я строка 4')));
?>
<hr>
<form method="POST" action="guestbookadd.php">
    <textarea name="newrecord" maxlength="500" minlength="5" cols="45" rows ="3" placeholder="Ваше мнение"></textarea>
    <br>
    <input type="submit" value="Добавить">
</form>
<br>
</body>
</html>