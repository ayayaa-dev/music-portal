<?php
ob_start();
$title = "Artist"
?>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>