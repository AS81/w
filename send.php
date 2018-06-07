<?php
require __DIR__.'/classes/TextFile.php';
require __DIR__.'/classes/GuestBook.php';
$gb = new GuestBook(__DIR__.'/Db.txt');
if (isset($_POST['newrecord'])) {
    $gb->append($_POST['newrecord'])->save();
    header('Location: /index.php');
} else {
        echo 'Что-то пошло не так ((';
}
?>