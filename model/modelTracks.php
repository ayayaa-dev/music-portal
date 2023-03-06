<?php
class ModelTracks {

    public static function getTracks($id){
        $sql = "SELECT * FROM `Tracks` WHERE `id`='".$id."'";
        $db = new database();
        $item = $db -> getOne($sql);
        return $item;
    }

    public static function tracksAddResult() {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $time=$_POST['time'];
            $link=$_POST['link'];
            $album_id=$_POST['album_id'];
            if($name!="" && $album_id!=""){
                $sql="INSERT INTO `tracks` (`name`, `time`, `link`,`album_id`)VALUES ('$name','$time','$link','$album_id')";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }
    public static function tracksEditResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $time=$_POST['time'];
            $link=$_POST['link'];
            $album_id=$_POST['album_id'];
            $sql="UPDATE `tracks` SET `name`='$name', `time`='$time', `link`='$link', `album_id`='$album_id' WHERE `tracks`.`id` =
            '".$id."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
    public static function tracksDeleteResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $sql = "UPDATE `tracks` SET `status` = 0 WHERE `tracks`.`id` = '".$id."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
}
?>