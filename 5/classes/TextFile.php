<?php
class TextFile{
    protected $path;
    protected $records;

    public function getData(){
        return $this->records;
    }

    public function append($text){
        $this->records[]=$text."\n";
        return $this;
    }

    public function save(){
        file_put_contents($this->path, $this->records);
    }
}

?>