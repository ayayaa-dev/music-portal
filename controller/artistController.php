<?php
class ArtistController {
    // Add artist
    public static function AddArtist(){
        include_once ('view/addArtistForm.php');
        return;
    }
    public static function addArtistResult(){
        $result = ArtistModel::addArtistResult();
        if($result == true){
            $artistList = Model::getArtists();
            $_SESSION['message'] = 'New artist has been added successfully!';
            header('Location:artists');
        }else{
            $error = 'Failed to add artist!';
            include_once('view/addArtist.php');
        }
        return;
    }
    // Edit artist
    public static function EditArtist($id){
        $artist = Model::getArtistById($id);
        include_once('view/editArtistForm.php');
        return;
    }
    public static function editArtistResult($id){
        $result = ArtistModel::editArtistResult($id);
        if($result == true){
            $_SESSION['message']='Artist with id: '.$id.'has been edited successfully!';
            $artistList = Model::getArtists();
            header('Location:artists');
        } else {
            $artistList = Model::getArtistById($id);
            $error='Failed to edit artist!';
            include_once ('view/addArtistForm.php');
        }
        return;
    }
    public static function DeleteArtist($id){
        $artist = Model::getArtistById($id);
        include_once('view/deleteArtist.php');
        return;
    }
    public static function deleteArtistResult($id){
        $result = artistModel::deleteArtistResult($id);
        if ($result == true){
            $_SESSION['message']='artist with id: '.$id.'has been deleted successfully!';
            $artistList = Model::getArtists();
            header('Location:artists');
        } else {
            $artistList = Model::getArtistById($id);
            $error='Failed to delete artist!';
            include_once('view/deleteArtist.php');
        }
        return;
    }
} //END CLASS
?>