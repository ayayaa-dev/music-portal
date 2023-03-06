<?php 
	ob_start();
	$title="Error 404";
 ?>
 
	<div class="center" >
		<img src="images/404.png">    
	</div> 

<?php 
	$content = ob_get_clean(); 
	include "view/template/layout.php";
?>