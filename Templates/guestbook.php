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
$pathDb=__DIR__.'/../Db/db.txt';
$gb = new guestbook($pathDb);
print_r($gb);

?>
</body>
</html>