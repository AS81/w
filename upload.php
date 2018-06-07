<?php
require __DIR__.'/classes/Uploader.php';
$file = new Uploader('newfile');
echo $file->path(__DIR__.'/uploads/')->upload();
?>
<br>
<a href="/index.php">Назад</a>