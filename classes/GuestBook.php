<?php
class GuestBook{
    protected $path;
    protected $records;
    protected $text;
    public function __construct($path){
        $this->path=$path;
        $this->records=file($this->path); 
    }

    public function getData(){
        return $this->records;

    }

    public function append($text){
        $this->records[]=$text."\n";
        return $this->records;
    }

    public function save(){
        file_put_contents($this->path, $this->records);
    }
}

?>