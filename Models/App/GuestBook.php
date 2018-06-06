<?php
class GuestBook
{
    //protected $path;
    public $path;
    public $records;
    public function __construct($path){
        $this->path=$path;
        $records=[];
        $records=file($this->path);
        return $records;
    }

    public function getData(){

    }

    public function append($text){

    }

    public function save(){

    }
}

?>