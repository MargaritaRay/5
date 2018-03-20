<?php
class TextFile
{
    protected $data;

    function __construct($way)
    {
        //путь собираетя из обьекта
        $this->way = $way;
        //читает содержимое файла, помещает в массиа
        $this->data = file($way);
    }

    public function getData()
    {
        //возвращает массив записей (содержимое файла)
        return  $this->data;
    }

    public function append($text)
    {
        //добавление элемент в конец массива (содержимое файла, элемент)
        array_push($this->data,  $text);
    }

}


class GuestBook extends TextFile
{
    public $way;

    public function  save()
    {
        file_put_contents($this->way, $this->data);

    }

}

$book = new GuestBook(__DIR__ . '/db.txt');
$book->append( "\n".'Новый текст ');
$book->save();

echo implode("\n",$book->getData())."<br>";
