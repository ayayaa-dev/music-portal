<?php
ob_start();
$title = "Error 404";
?>

<div class="center" style="text-align:center;">
	<img src="images/404.png">
</div>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>