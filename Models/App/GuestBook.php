<?php
class GuestBook
{
    protected $path;
    protected $text;
    public $records;
    public function __construct($path){
        $this->path=$path;
    }

    public function getData(){
        $records=[];
        $records=file($this->path);
        return $records;
    }

    public function append($text){
        $this->text=$text;
        $records=[];
        $records=$this->getData();
        $records[]=$this->text;
        return $records;
    }

    public function save(){

    }
}

?>