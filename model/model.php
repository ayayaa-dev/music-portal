<?php
/* для выборки данных из базы данных используем запросы,
 * class database из папки inc
 */
class Model {
    // список артистов
    public static function getArtistList(){
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
    // top 3 albums
    public static function getTopAlbums(){
        $sql = "SELECT * FROM `albums` ORDER BY RAND() LIMIT 3;";//Список
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

    //search by code or name
    public static function getArtistByName($name) {
        $query = "SELECT * FROM `artist` WHERE `name`='".$name."' OR `name` LIKE '%".$name."%'";
        //detail
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
    //GET 3 tracks by artist on Album Page
    public static function get3TrackByAlbum($albumid)
    {
        $sql = "SELECT `name`, `time`  FROM `Tracks` WHERE `album_id`= '" . $albumid . "' LIMIT 3";
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }
    // GET artist by id
    public static function getArtistById($id) {
        $sql = "SELECT * FROM `artists` WHERE `ID`='".$id."'";
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

    // public static function getMusicPlayer($album</head>_id){
    //     $query  = "SELECT `link` FROM `track` WHERE `album_id` = '".$album_id."'";
    //     $db = new database();
    //     $item = $db->getOne($query);
    //     return $item;
    // }
}//END CLASS
?>