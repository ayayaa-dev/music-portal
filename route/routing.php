<?php
/*URI унифицированный идентификатор ресурса, 
	который был предоставлен для доступа к странице
знак ? отделяет полный путь и значение 
	переменной идентификатора для фильтрации
*/
$host = explode('?', $_SERVER['REQUEST_URI']);
//полный путь к проекту до знака ?
$path=$host[0];
	//количество папок вложений - считаем символы "/"
	$num = substr_count($path, '/');
	//вычисляем маршрут после последнего символа "/"
	$route = explode('/', $path)[$num];
//значение переменной - идентификатора фильтрации - после знака ?
if(strstr($_SERVER['REQUEST_URI'],'?')){//если найден символ '?'
	$id=urldecode($host[1]);//прочитаем значение из адресной строки и уберем пробелы
}
//-----------------------
// homepage
if ($route == '' OR $route == 'index.php'){
	Controller::StartSite();
} elseif ($route == 'artists'){
	Controller::ArtistsPage();
} elseif ( $route == 'artist'){
	if(isset($id)){
		Controller::ArtistInfoPage($id);
	} else {
		Controller::error404();	
	}
} elseif ($route == 'albums'){
	Controller::AlbumsPage();
} elseif ( $route == 'album'){
	if(isset($id)){
		Controller::AlbumInfoPage($id);
	} else {
		Controller::error404();	
	}
}
else {
	Controller::error404();
} 
