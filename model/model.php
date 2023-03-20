<?php
/* для выборки данных из базы данных используем запросы,
 * class database из папки inc
 */
class Model {
    // список артистов
    public static function getArtists(){
        $sql = "SELECT * FROM `artists` ORDER BY `artists`.`name` ASC;";//Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    // top 3 artists
    public static function getTopArtistList(){
        $sql = "SELECT * FROM `artists` ORDER BY RAND() LIMIT 3;";//Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    //detail артиста
    public static function getArtist($name) {
        $sql = "SELECT * FROM `artists` WHERE `name`='".$name."'"; //Одна запись
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }

    // Список альбомов по артистам
    public static function getAlbumListByArtist($artist_id) {
        $sql = "SELECT * FROM `albums` WHERE `artist_id`='".$artist_id."'"; //Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    //Список альбомов
    public static function getAlbums(){
        $sql = "SELECT * FROM `albums` ORDER BY `albums`.`name` ASC"; //список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    // GET 1 album by name
    public static function getAlbumByName($name){
        $sql = "SELECT * FROM `albums` WHERE `name` LIKE'".$name."' OR `name` LIKE '%".$name."%'";
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }
    
    // top 3 albums
    public static function getTopAlbums(){
        $sql = "SELECT * FROM `albums` ORDER BY RAND() LIMIT 3;";//Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    // Список треков
    public static function getTracks()
    {
        $sql = "SELECT * FROM  `tracks` ORDER BY `tracks`.`name`";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    //Страница список треков по альбому
    public static function getTracksByAlbum($album_id) {
        $sql = "SELECT * FROM `tracks` WHERE `album_id` = '".$album_id."' ORDER BY `tracks`.`id` ASC"; //Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    // Search bar (wip)
    public static function getTracksByAlbumName($name) {
        $sql = "SELECT t.`id`, t.`name`, `time`, `link` FROM `tracks` AS t, `albums` AS al WHERE t.`album_id`=al.`id` AND al.`name` LIKE '".$name."' OR `name` LIKE '%".$name."%' ORDER BY t.`id`;"; //Список
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }
    
    //search artist by name
    
    public static function getArtistByName($name) {
        $query = "SELECT * FROM `artist` WHERE `name`='".$name."' OR `name` LIKE '%".$name."%'";
        //detail
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
    //GET 3 tracks by artist on Album Page
    public static function get3TrackByAlbum($album_id) {
        $sql = "SELECT `name`, `time`  FROM `tracks` WHERE `album_id`= '" . $album_id . "' LIMIT 3";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    // GET artist by id
    public static function getArtistById($id) {
        $sql = "SELECT * FROM `artists` WHERE `ID`='" . $id . "'";
        $db = new database();
        $item = $db -> getOne($sql);
        return $item;
    }
    // GET album by id
    public static function getAlbumById($id) {
        $sql = "SELECT * FROM `albums` WHERE `ID`='".$id."'";
        $db = new database();
        $item = $db -> getOne($sql);
        return $item;
    }

    //GET track by id
    public static function getTrackById($id)
    {
        $sql = "SELECT * FROM `tracks` WHERE `ID`='" . $id . "'";
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }
    public static function getMusicPlayer(){
        $query  = "SELECT `link` FROM `tracks` ORDER BY RAND() LIMIT 1";
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
    public static function getMusicPlayer2(){
        $query  = "SELECT `link` FROM `tracks` ORDER BY RAND() LIMIT 1";
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
}//END CLASS
?>