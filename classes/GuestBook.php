<?php
class GuestBook extends TextFile{

    public function __construct($path){
        $this->path=$path;
        $this->records=file($this->path); 
    }

}

?>