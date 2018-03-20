<?php
class Uploader
{
    public $formName;

    function __construct($formName)
    {
        $this->formName = $formName;
    }
    function isUploaded()
    {
        if(!empty($_FILES[$this->formName]) && $_FILES[$this->formName]['error'] == 0){
            return is_uploaded_file($_FILES[$this->formName]['tmp_name']);
        }
    }
    function upload()
    {
        if($this->isUploaded()){
            //Не знаю как правильнее выносить путь в переменную или на прямую писать))
            //$upl = 'file/'. rand(000000000,999999999). ".jpg";
            //$upl = __DIR__.'/file/'.$_FILES[$this->formName]["name"];
            //return move_uploaded_file( $_FILES[$this->formName]['tmp_name'],$upl);
            return move_uploaded_file( $_FILES[$this->formName]['tmp_name'],__DIR__.'/file/'.$_FILES[$this->formName]["name"]);
        }
    }
}

$upFile = new Uploader("newfile");
$upFile->isUploaded();
$upFile->upload();

var_dump($upFile->isUploaded());
echo "<br>";
var_dump($upFile->upload());




