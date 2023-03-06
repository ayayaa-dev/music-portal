<?php
class ModelArtist {
    public static function artistAddResult() {
        $result = false ; 
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $description=$_POST['description'];
            if($name!="" && $description!=""){
                $sql="INSERT INTO `albums` (`name`, `picture`, `description`) VALUES ('$name','$picture','$description')";
                $database = new database(); 
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }

    public static function artistEditResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $picture=$_POST['picture'];
            $description=$_POST['description'];
            if($name!="" && $description!=""){
                $sql="UPDATE `artist` SET `name`='$name', `picture`='$picture', `description`='$description' WHERE `artists`.`id` =
                '".$id."'";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }

    public static function artistsDeleteResult($id) {
        $result = false;
        if(isset($_POST['send'])){
            //запрос на удаление данных

            $sql = "DELETE FROM `artists` WHERE `artists`.`id` = '".$id."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
}//END CLASS
?>