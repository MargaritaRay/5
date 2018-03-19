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
            move_uploaded_file( $_FILES[$this->formName]['tmp_name'], "/file/" );
        }

    }
}

$upFile = new Uploader("newfile");
$upFile->isUploaded();
$upFile->upload();






