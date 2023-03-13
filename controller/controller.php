<?php
class Controller { 
// Homepage
   public static function StartSite(){
      $albumList = Model::getTopAlbums();
      $artistList = Model::getTopArtistList();
      // $musicPlayer = Model::getMusicPlayer($album_id);
      include_once('view/homepage.php');
      return;
   }
   // Artist List
   public static function ArtistsPage(){
      $artistList = Model::getArtistList();
      include_once('view/artistsList.php');
      return;
   }
   // Single artist info
   public static function ArtistInfoPage($id){
      $artist = Model::getArtistById($id);
      include_once('view/artistInfo.php');
      return;
   }
   // Album List
   public static function AlbumsPage(){
      $albumList = Model::getAlbums();
      $trackList = Model::get3TrackByAlbum(2);
<<<<<<< Updated upstream
      include_once('view/albumList.php');
=======
      include_once('view/albumsList.php');
      return;
   }
   // Single album info
   public static function AlbumInfoPage($id){
      $album = Model::getAlbumById($id);
      include_once('view/albumInfo.php');
>>>>>>> Stashed changes
      return;
   }
   // Error page
   public static function error404(){
      include_once('view/error404.php');
      return;
   }
} //END CLASS
?>