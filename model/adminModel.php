<?php
class AdminModel {
    public static function userLogin(){
        $test = false;
        $_SESSION['error'] = 'Wrong email or password';
        if(isset($_POST['send'])){
            if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != ""){
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $password = $_POST['password'];
                $sql = 'SELECT * FROM `users` WHERE `email` = "'.$email.'"';
                $database = new database();
                $item = $database -> getOne($sql);

                if($item != null){
                    $login = strtolower($email);
                    if($login == $item['email'] && password_verify($password, $item['password'])){
                        $_SESSION['sessionId'] = session_id();
                        $_SESSION['name'] = $item['username'];
                        $_SESSION['role'] = $item['role'];
                        $_SESSION['userId'] = $item['id'];
                        $test = true;
                    }
                }
            }
        }
        return $test;
    }

    public static function userLogout(){
        unset($_SESSION['sessionId']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        unset($_SESSION['error']);
        unset($_SESSION['userId']);
        session_destroy();
        return;
    }
    public static function ChangePassword(){
        $result = array(false, "Incorrect password");
        if(isset($_POST['send'])){
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            if($newPassword == $confirmPassword && $newPassword != ""){
                $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `password` = '$passwordHash' WHERE `users`.`id` = ".$_SESSION['userId'];
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item == true){
                    $result = array(true, "Password changed");
                } else {
                    $result = array(false, "Error occurred. Try again");
                }
            }
        }
        return $result;
    }
}
?>