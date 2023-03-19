<?php
/*URI унифицированный идентификатор ресурса, 
	который был предоставлен для доступа к странице
знак ? отделяет полный путь и значение 
	переменной идентификатора для фильтрации
*/
$host = explode('?', $_SERVER['REQUEST_URI']);
//полный путь к проекту до знака ?
$path = $host[0];
//количество папок вложений - считаем символы "/"
$num = substr_count($path, '/');
//вычисляем маршрут после последнего символа "/"
$route = explode('/', $path)[$num];
//значение переменной - идентификатора фильтрации - после знака ?
if (strstr($_SERVER['REQUEST_URI'], '?')) { //если найден символ '?'
	$id = urldecode($host[1]); //прочитаем значение из адресной строки и уберем пробелы
}
//-----------------------
// homepage
if ($route == '' or $route == 'index.php') {
	Controller::StartSite();
}
// list of albums/artists
elseif ($route == 'artists') {
	Controller::ArtistsPage();
} elseif ($route == 'artist') {
	if (isset($id)) {
		// Artist info
		Controller::ArtistInfoPage($id);
	} else {
		Controller::error404();
	}
} elseif ($route == 'albums') {
	Controller::AlbumsPage();
} elseif ($route == 'album') {
	if (isset($id)) {
		// Album info
		Controller::AlbumInfoPage($id);
	} else {
		Controller::error404();
	}
}
// search
// elseif ($route == 'search'){
// 	if(isset($_GET['text'])) {
// 		Controller::SearchByAlbum($_GET['text']);
// 	} else {
// 		Controller::error404();	
// 	}
// }
// user Login / Logout
elseif ($route == 'login') {
	AdminController::LoginForm();
} elseif ($route == 'loginResult') {
	AdminController::LoginAction();
} elseif ($route == 'logout') {
	AdminController::LogoutAction();
} elseif ($route == 'profile') {
	AdminController::ProfileForm();
} elseif ($route == 'artistsList') {
	AdminController::ArtistManage();
}
// error 404 page
else {
	Controller::error404();
}