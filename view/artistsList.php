<?php
ob_start();
$title = "Artists"
?>
<div style="text-align: center;">
    <h3>List of all artists</h3>
</div>
<div style="display:flex;flex-direction:row;flex-wrap:wrap;width: 100%; justify-content: center;">
    <div class="All_Artist">
        <?php
        foreach ($artistList as $artist) {
            echo '<a href="artist?' . $artist['id'] . '" style="font-size: 18px;text-decoration: none; color: black;">';
            echo '<div class="Artist">';

            echo ' <div class="Artist_Picture">';

            echo '<img class= "Artist_Image" src="' . $artist['picture'] . '">';
            echo '</div>';
            echo '<div class="Artist_Name">';
            echo '<p class="Artist_Naming">' . $artist['name'] . '</p>';
            echo '</div>';
            echo '</a></div>';
        }
        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>