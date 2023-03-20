<?php
class AlbumController {
    // Add album
    public static function AddAlbum(){
        include_once ('view/addAlbumForm.php');
        return;
    }
    public static function addAlbumResult(){
        $result = AlbumModel::addAlbumResult();
        if($result == true){
            $albumList = Model::getAlbums();
            $_SESSION['message'] = 'New album has been added successfully!';
            header('Location:albums');
        }else{
            $error = 'Failed to add album!';
            include_once('view/addAlbumForm.php');
        }
        return;
    }
    // Edit album
    public static function EditAlbum($id){
        $album = Model::getAlbumById($id);
        include_once('view/editAlbumForm.php');
        return;
    }
    public static function editAlbumResult($id){
        $result = AlbumModel::editAlbumResult($id);
        if($result == true){
            $_SESSION['message']='Album with id: '.$id.'has been edited successfully!';
            $albumList = Model::getAlbums();
            header('Location:albums');
        } else {
            $albumList = Model::getAlbumById($id);
            $error='Failed to edit album!';
            include_once('view/editAlbumForm.php');
        }
        return;
    }
    public static function DeleteAlbum($id){
        $album = Model::getAlbumById($id);
        include_once('view/deleteAlbum.php');
        return;
    }
    public static function deleteAlbumResult($id){
        $result = AlbumModel::deleteAlbumResult($id);
        if ($result == true){
            $_SESSION['message']='Album with id: '.$id.'has been deleted successfully!';
            $albumList = Model::getAlbums();
            header('Location:albums');
        } else {
            $albumList = Model::getAlbumById($id);
            $error='Failed to delete album!';
            include_once('view/deleteAlbum.php');
        }
        return;
    }
} //END CLASS
?>