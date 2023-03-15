<?php
    ob_start();
    $title = "Log In (Admin only)";
?>
<div class="login-container">
    <form class="form-login" action="loginResult" method="POST">
        <h3 class="form-login-heading">Log In</h3>
        <h4>Email</h4>
        <input type="email" name="email" class="form-control" placeholder="Email" autofocus required>
        <h4>Password</h4>
        <input type="password" name="password" class="form-control" placeholder="Password" required>

        <button class="btn btn-success" type="submit" name="send">Log In</button>
        <p class="error-msg">
            <?php 
            if(isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            
            ?>
        </p>        
    </form>
</div>
<?php
    $content = ob_get_clean();
    include "view/template/layout.php";
?>
