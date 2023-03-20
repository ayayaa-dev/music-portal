<?php
class ModelAlbums {

    public static function getAlbums($code){
        $sql = "SELECT * FROM `albums` WHERE `id`='".$code."'";
        $db = new database();
        $item = $db -> getOne($sql);
        return $item;
    }

    public static function albumsAddResult() {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $release_date=$_POST['release_date'];
            $genre = $_POST['genre'];
            $artist_id=$_POST['artist_id'];
            if($name!="" && $artist_id!=""){
                $sql="INSERT INTO `albums` (`name`, `picture`, `release_date`,`genre`,`artist_id`)VALUES ('$name','$picture','$release_date','$genre','$artist_id')";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }
    public static function albumEditResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $release_date=$_POST['release_date'];
            $genre = $_POST['genre'];
            $artist_id=$_POST['artist_id'];
            // $updated_at = date('Y-m-d');
            $sql="UPDATE `albums` SET `name`='$name', `picture`='$picture', `release_date`='$release_date', `genre` = '$genre',`artist_id`='$artist_id' WHERE `albums`.`id` ='".$id."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
    public static function albumDeleteResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $sql = "UPDATE `albums` SET `status` = 0 WHERE `album`.`id` = '".$id."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
}
