<?php
class Uploader{
    protected $name;
    protected $path;
    public function __construct($name){
        $this->name=$name;
    }

    public function isUpladed(){
        if (isset($_FILES[$this->name])){
                if(0==$_FILES[$this->name]['error']){
                    if (($_FILES[$this->name]['type']=='image/jpeg') || ($_FILES[$this->name]['type']=='image/jpg') || ($_FILES[$this->name]['type']=='image/png')){
                            return true;
                    }
                }
            } return false;
    }

    public function upload(){
        if (true === $this->isUpladed()){
            $filename=$_FILES[$this->name]['name'];
            $i=0;
            while (file_exists($this->path.$filename)) {
                 $i++;
                 $filename=$i.'_'.$_FILES[$this->name]['name'];
            }
            move_uploaded_file($_FILES[$this->name]['tmp_name'], $this->path.$filename);
            return "Файл загружен";
        } else {
            return "Возникла ошибка при загрузке файла";
        }
    }

    public function path($path){
        $this->path=$path;
        return $this;
    }
}

?>