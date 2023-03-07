<?php
    ob_start();
    $title = "Artists"
?>
<div style="text-align: center;">
    <h3>List of all artists in the world</h3>
</div>
<div style="display:flex;justify-content: space-evenly;">
    <?php
        foreach ($artistList as $artist) {
            echo '<div style="flex-direction: column;width: 100%; height:100%; margin: 20px">';
            echo '<img src="'.$artist['picture'].'" style="width:250px; height: 250px">';
            echo '<a style="font-size: 24px;">'.$artist['name'].'</a>';
            echo '</div>';
        }
    ?>
</div>
<?php
    $content = ob_get_clean();
    include "view/template/layout.php";
?>