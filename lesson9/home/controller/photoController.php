<?php
require_once "../model/photoModel.php";
require_once "../services/uploadFileService.php";

class PhotoController
{

    private $uploadFileService;

    public function __construct($post)
    {
        $this->uploadFileService = new UploadFileService;
        if (isset($post['methodName']) && $post['methodName'] === 'uploadImage') {
            $this->upload();
        } else if (isset($post['methodName']) && $post['methodName'] === 'show') {
            $this->show();
        } else if (isset($post['methodName']) && ($post['methodName']) === 'delete') {
            $this->delete($post);
        } else if (isset($post['methodName']) && ($post['methodName']) === 'deleteCheck') {
            $this->checkDelete($post);
        }
    }

    public function upload()
    {
        $path = $this->uploadFileService->startupload();
        PhotoModel::createImage($path);
    }

    public function show()
    {
        echo PhotoModel::showPhotos();
    }

    public function delete($post)
    {
        echo PhotoModel::delete($post);
    }

    public function checkDelete($post)
    {
        foreach ($post['ids'] as $id) {
            $data = [
                'id' => $id
            ];
            PhotoModel::delete($data);
        }

        echo 'success';
    }
}

$upload = new PhotoController($_POST);
