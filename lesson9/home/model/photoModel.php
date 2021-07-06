<?php
require_once "../config/db.php";

class PhotoModel extends Database
{
    const TABLE_NAME = 'photos';
    static public function createImage($path)
    {
        $table = self::TABLE_NAME;
        $create = mysqli_query(self::connect(),"INSERT INTO $table (photo_url) VALUES ('$path')");
    } 

    static public function showPhotos()
    {
        $table = self::TABLE_NAME;
        $show = mysqli_query(self::connect(),"SELECT * FROM $table");
        $result = mysqli_fetch_all($show,MYSQLI_ASSOC);
        return json_encode($result);
    }

    static public function delete($post)
    {
        $id = $post['id'];
        $table = self::TABLE_NAME;
        $delete = mysqli_query(self::connect(),"DELETE FROM `photos` WHERE id = '$id'");
        
    }
}