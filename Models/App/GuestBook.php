<?php
class GuestBook
{
    protected $path;
    protected $text;
    protected $str;
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

    public function save(array $data){
        $str=null;
        $this->data=$data;
        foreach ($this->data as $key => $value) {
            $str.=$value;
        }
        $str.="\n";
        file_put_contents($this->path, $str);
    }
}

?>