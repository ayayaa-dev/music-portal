<?php
class AdminController {
    public static function LoginForm(){
        include_once('view/loginForm.php');
    }
    public static function LoginAction()
    {
        $result = AdminModel::userLogin();
        if (isset($result) && $result == true) {
            include_once('view/startManage.php');
        } else {
            include_once('view/loginForm.php');
        }
    }
    public static function LogoutAction()
    {
        $result = AdminModel::userLogout();
        include_once('view/homepage.php');
    }
    public static function ProfileForm()
    {
        include_once('view/profileTable.php');
    }
    public static function editProfileResult()
    {
        $result = AdminModel::ChangePassword();
        include_once('view/profileTable.php');
    }

    public static function ArtistManage()
    {
        $artistList = Model::getArtists();
        include_once('view/artistManage.php');
    }

    public static function AlbumManage()
    {
        $albumList = Model::getAlbums();
        include_once('view/albumManage.php');
        return;
    }
}