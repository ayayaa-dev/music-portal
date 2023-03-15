<?php
    ob_start();
    $title="Log In Successful";
    if(isset($_SESSION['name']) && isset($_SESSION['role'])){
        echo '<h3>Welcome, '.$_SESSION['name'].'!</h3>';
    }
?>
<?php
    $content = ob_get_clean();
    include "view/template/layout.php";
?>