<?php
    ob_start();
    if(isset($album) && $album){
        $title.= $album['name'];
    }
?>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>