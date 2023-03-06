<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Blackwell Music</title>
	<!-- bootstrap -->	
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- custom -->	
	<!-- <link href="public/css/templatemo-style.css" rel="stylesheet">	 -->
	<link href="public/css/style.css" rel="stylesheet">
	<link href="public/css/search.css" rel="stylesheet">
	<link href="public/css/login.css" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<!-- navigation -->
		<div class="navbar navbar-default" role="navigation">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<!-- menu -->
				<div class="collapse navbar-collapse" style="font-size: 20px; text-align: center;">
					<div>
						<div class="img-logo" style="height:100%">
							<a href="./" class="navbar-brand"><img src="images/logo.png" style="height:100%"></img></a>					
						</div>
						<ul class="nav justify-content-center">
						<?php
							echo '<li class="nav-item"><a class="nav-link" href="artists">Artists</a></li>';
							echo '<li class="nav-item"><a class="nav-link" href="albums">Albums</a></li>';
							// echo '<li class="nav-item"><a href="./" class="navbar-brand"><img src="images/logo.png"></img></a>';
							if(!isset($_SESSION['sessionId'])){
								echo '<li class="nav-item"><a class="nav-link" href="login">Log in</a></li>';
							} else {
								echo '<li class="nav-item"><a class="nav-link" href="logout">'.$_SESSION['name'].' - Log out</a></li>';
								echo '<li class="nav-item"><a href="profile">- Profile</a></li>';
							}
							if(isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin'){
								echo '<li class="nav-item"><a class="nav-link" href="countryList">Manage Artists</a></li>';
								echo '<li class="nav-item"><a class="nav-link" href="cityList">Manage Albums</a></li>';
							}
						?>
						</ul>
					</div>		
				</div>
			</nav>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
		<!-- end navigation -->
	</header>
	<!-- main -->
	<main>		
		<section  class="templatemo-section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top: 50px;">
						<h2 class="text-uppercase text-center">
						<?php
						if(isset($title)) {
							echo $title;	
						}
						?>
						</h2>
						<hr>
						<?php
						if(isset($content)) {
							echo $content;
						}

						?>
					</div>	  
				</div>
			</div>
		</section>
	</main>
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy; 2023 Blackwell Music. Daniil Divissenko, Daniil Vassiljev, Viktoria Minaeva. JPTV20</p>					
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#">Navbar</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	</button>
  	<form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
 -->

