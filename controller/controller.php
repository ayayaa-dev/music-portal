<?php
class Controller { 
// Homepage
   public static function StartSite(){
      $albumList = Model::getTopAlbums();
      $artistList = Model::getTopArtistList();
      $musicPlayer = Model::getMusicPlayer();
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
      include_once('view/albumsList.php');
      return;
   }
   public static function AlbumSongs($album_id){
      $trackList = Model::get3TrackByAlbum($album_id);
      include_once('view/albumsList.php');
      return;
   }
   // Single album info
   public static function AlbumInfoPage($id){
      $album = Model::getAlbumById($id);
      include_once('view/albumInfo.php');
      return;
   }
   public static function error404(){
      include_once('view/error404.php');
      return;
   }
} //END CLASS
?>