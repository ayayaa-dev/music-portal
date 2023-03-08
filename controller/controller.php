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
   public static function ArtistPage(){
      $artistList = Model::getArtistList();
      include_once('view/artistsList.php');
      return;
   }
   // Album List
   public static function AlbumPage(){
      $albumList = Model::getAlbums();
      include_once('view/albumList.php');
      return;
   }
   // Error page
   public static function error404(){
      include_once('view/error404.php');
      return;
   }
}//END CLASS
?>















