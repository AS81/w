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
    echo $key1. ' гостевая запись из '.count($gb->getData()).':<br>';
    echo $rec.'<br><br>';
}
echo "<hr>";
var_dump(($gb->append('4 stroka я строка 4')));
?>
</body>
</html>