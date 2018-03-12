<?php
var_dump($_FILES);

class Uploader
{
    public $formName;

    function __construct($formName)
    {
        $this->formName = $formName;
    }

    function isUploaded()
    {
        is_uploaded_file($_FILES[$this->formName]);
        return $this;
    }

    function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file( $_FILES['tmp_name'], __DIR__ . "/file" );
        }

    }
}

$upFile = new Uploader('newimg');






