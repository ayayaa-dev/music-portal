<?php
class Controller { 
// Homepage
   public static function StartSite(){
      $albumList = Model::getAlbums();
      $artistList = Model::getArtistList();
      include_once('view/homepage.php');
      return;
   }
   // Error page
   public static function error404(){
      include_once('view/error404.php');
      return;
   }
}//END CLASS
?>















