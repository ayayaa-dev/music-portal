<?php
ob_start();
$title = "Log In Successful";
if (isset($_SESSION['name']) && isset($_SESSION['role'])) {
    echo '<h3>Welcome, ' . $_SESSION['name'] . '!</h3>';
}
?>
<!-- comment html if you don't want the gif -->
<div style="display: flex; justify-content: center;">
    <img src="https://media0.giphy.com/media/kd9BlRovbPOykLBMqX/giphy.gif?cid=ecf05e47j5rzl7k7hp19rmnh8ni4z7ibe0un8wrmuaufndww&rid=giphy.gif&ct=g"></img>
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>