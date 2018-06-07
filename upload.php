<?php
if (isset($_FILES['newfile'])){
    if(0==$_FILES['newfile']['error']){
        if (($_FILES['newfile']['type']=='image/jpeg') || ($_FILES['newfile']['type']=='image/jpg') ||
            ($_FILES['newfile']['type']=='image/png')){
            $filename=$_FILES['newfile']['name'];
            $i=0;
            while (file_exists(__DIR__.'/uploads/'.$filename)) {
                 $i++;
                 $filename=$i.'_'.$_FILES['newfile']['name'];
            }
            move_uploaded_file($_FILES['newfile']['tmp_name'], __DIR__.'/uploads/'.$filename);
            echo "Файл загружен";
        } else {
           echo "Поддерживается загрузка только jpeg/jpg/png";
        }
    } else {
        echo 'Ошибка звгпузки файла';
    }
    } else {
        echo "Файл для загрузки не передан.";
    }

?>