<?php
namespace com\example\blog;

class Article {

    public $id;
    public $title;
    public $text;

    public function __construct($id = null, $title = null, $text = null){
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString(){
        return "$this->id,$this->title,$this->text";
    }
}