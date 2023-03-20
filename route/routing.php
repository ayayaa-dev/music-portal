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
// Search bar (wip)
elseif ($route == 'search'){
	if(isset($_GET['text'])) {
		Controller::SearchByAlbum($_GET['text']);
	} else {
		Controller::error404();	
	}
}

// user Login
elseif ($route == 'login'){
	AdminController::LoginForm();
} elseif ($route == 'loginResult'){
	AdminController::LoginAction(); 
} elseif(isset($_SESSION['role'])){
	// user Profile page
	if($route == 'profile'){
		AdminController::ProfileForm();
	} elseif ($route == 'editProfileResult'){
		AdminController::editProfileResult();
	} 
	// user Logout
	elseif ($route == 'logout'){
		AdminController::LogoutAction();
	}
	if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
		// Albums CRUD
		// Add New Album
		if($route == 'addAlbum'){
			AlbumController::AddAlbum();
		}
		elseif ($route == 'addAlbumResult'){
			AlbumController::addAlbumResult();
		}
		// Edit Existing Album
		elseif($route == 'editAlbum'){
			if(isset($id)){
				AlbumController::EditAlbum($id);
			} else {
				Controller::error404();	
			}
		} elseif ($route == 'editAlbumResult'){
			if(isset($id)){
				AlbumController::editAlbumResult($id);
			} else {
				Controller::error404();
			}
		}
		// Delete Existing Album
		elseif ($route == 'deleteAlbum'){
			if(isset($id)){
				AlbumController::DeleteAlbum($id);
			} else {
				Controller::error404();
			}
		}
		elseif ($route == 'deleteAlbumResult'){
			if(isset($id)){
				AlbumController::deleteAlbumResult($id);
			} else {
				Controller::error404();
			}
		}

		// Artists CRUD
		// Add New Artist
		elseif($route == 'addArtist'){
			ArtistController::AddArtist();
		}
		elseif ($route == 'addArtistResult'){
			ArtistController::addArtistResult();
		}
		// Edit Existing Artist
		elseif($route == 'editArtist'){
			if(isset($id)){
				ArtistController::EditArtist($id);
			} else {
				Controller::error404();	
			}			
		} elseif ($route == 'editArtistResult'){
			if(isset($id)){
				ArtistController::editArtistResult($id);
			} else {
				Controller::error404();
			}
		}
		// Delete Existing Artist
		elseif ($route == 'deleteArtist'){
			if(isset($id)){
				ArtistController::DeleteArtist($id);
			} else {
				Controller::error404();
			}
		}
		elseif ($route == 'deleteArtistResult'){
			if(isset($id)){
				ArtistController::deleteArtistResult($id);
			} else {
				Controller::error404();
			}
		}

		//Tracks CRUD
		//New Track
		elseif ($route == 'addTrack') {
			TrackController::addTrack();
		} elseif ($route == 'addTrackResult') {
			TrackController::addTrackResult();
		}
		// Edit Existing Track
		elseif ($route == 'editTrack') {
			if (isset($id)) {
				TrackController::EditTrack($id);
			} else {
				Controller::error404();
			}
		} elseif ($route == 'editTrackResult') {
			if (isset($id)) {
				TrackController::editTrackResult($id);
			} else {
				Controller::error404();
			}
		}
		// Delete Existing Track
		elseif ($route == 'deleteTrack') {
			if (isset($id)) {
				TrackController::DeleteTrack($id);
			} else {
				Controller::error404();
			}
		} elseif ($route == 'deleteTrackResult') {
			if (isset($id)) {
				TrackController::deleteTrackResult($id);
			} else {
				Controller::error404();
			}
		}
	}
}
// error 404 page
else {
	Controller::error404();
}