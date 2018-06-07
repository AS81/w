<?php
require __DIR__.'/functions.php';
if (isset($_POST['newrecord'])) {
    $records=[];
    $records=read(__DIR__.'/Db.txt');
    $records[]=$_POST['newrecord'];
    file_put_contents(__DIR__.'/Db.txt',implode("\n", $records));
    header('Location: /index.php');
} else {
        echo 'Что-то пошло не так ((';
}
?>