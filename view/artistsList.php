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

    <!-- old design -->
    <!-- <?php
            foreach ($artistList as $artist) {
                echo '<div style="display:flex;flex-direction: column;text-align:center;width:25%;margin-bottom:16px;">';
                echo '<a href="artist?' . $artist['id'] . '" style="font-size: 18px;text-decoration: none; color: black;">';
                echo '<div style="display: flex; justify-content: center;">';
                echo '<img src="' . $artist['picture'] . '" style="width:250px; height: 250px">';
                echo '</div>';
                echo '<a href="artist?' . $artist['id'] . '" style="font-size: 18px;text-decoration: none; color: black;">' . $artist['name'] . '</a>';
                echo '</div></a>';
            }
            ?> -->
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>