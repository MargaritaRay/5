<?php


/*class GuestBook{

    protected $way;
    public $text;

    function __construct($way)
    {
    $this->way = $way;
    return readfile($this->way);
    }

    public function getData(){
        return file($this->way);
    }

    public function append($text){
        return array_push($this->getData(),  $text);
    }

    public function save(){
        return file_put_contents($this->way, $this->text, FILE_APPEND);
    }

}

$book = new GuestBook(__DIR__ . '/db.txt');
$book->text = 'Новый текст'."\n";
$book->getData();
$book->save();*/

//==================2=======================

class TextFile{
    protected $way;


    function __construct($way)
    {
        $this->way = $way;
        return readfile($this->way);
    }
}



class GuestBook extends TextFile {

    public $text;

    function __construct($way)
    {
        parent::__construct($way);
    }

    public function getData(){
        return file($this->way);
    }

    public function append($text){
        return array_push($this->getData(),  $text);
    }

    public function save(){
         file_put_contents($this->way, $this->text, FILE_APPEND);
    }

}

$book = new GuestBook(__DIR__ . '/db.txt');
$book->text = "\n". 'Новый текст ';
$book->getData();
$book->save();
































