<?php

class UploadFileService
{
    public $src = "./upload/";
    public $tmp;
    public $filename;
    public $type;
    public $uploadfile;

    public function startupload()
    {
        $file = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $path = 'upload/' . $file;
        $file1 = explode('.', $file);
        $ext = $file1[1];
        $allowed = array("jpg", "png", "JPEG", "svg","jpeg");
        if (in_array($ext, $allowed)) {
            if (!is_dir('upload')) {
                mkdir('upload');
            }
            move_uploaded_file($tmp_name, $path);
            return $path;
        }
    }

    public function uploadfile()
    {
        var_dump($this->uploadFile);
        die();
        if (move_uploaded_file($this->tmp, $this->uploadFile)) {
            return true;
        }
    }
}
