<?php
class ArtistModel {
    public static function addArtistResult() {
        $result = false ; 
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $description=$_POST['description'];
            $short_description=$_POST['short_description'];
            if($name!="" && $description!=""){
                $sql="INSERT INTO `artists` (`name`, `picture`, `description`, `short_desc`) VALUES ('$name','$picture','$description', '$short_description')";
                $database = new database(); 
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }

    public static function editArtistResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $description=$_POST['description'];
            if($name!="" && $description!=""){
                $sql="UPDATE `artists` SET `name`='$name', `picture`='$picture', `description`='$description' WHERE `artists`.`id` =
                '".$id."'";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }

    public static function deleteArtistResult($id) {
        $result = false;
        if (isset($_POST['send'])) {
            $database = new database();
            $sql = $database->getAll("SELECT * FROM `albums` WHERE `albums`.`artist_id` = $id");
            foreach ($sql as $album) {
                $sql2 = $database->executeRun("DELETE FROM `tracks` WHERE `tracks`.`album_id` = $album[id]");
                $sql3 = $database->executeRun("DELETE FROM `albums` WHERE `albums`.`artist_id` = $id");
            }
            $sql4 = $database->executeRun("DELETE FROM `artists` WHERE `artists`.`id` = $id");

            if ($sql4 == true) $result = true;
        }
        return $result;
    }
}//END CLASS
?>