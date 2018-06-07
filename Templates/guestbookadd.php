<?php
require __DIR__.'/../Models/App/GuestBook.php';
$pathDb=__DIR__.'/db.txt';
$gb = new guestbook($pathDb);
if ($_POST['newrecord']!=null){
    $gbwithnewrecord=$gb->append($_POST['newrecord']);
    $gb->save($gbwithnewrecord);
    echo 'Ваш комментарий добавлен';
} else
    echo 'Комментарий должен соджержать не менее 5 символов и не более 500. Спасибо.';
?>
<br>
<a href="guestbook.php">Перейти на страницу с комментариями</a>