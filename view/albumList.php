<?php
ob_start();
$title = "Albums"
?>
<div style="text-align: center;">
    <h3>List of all albums in the world</h3>
</div>
<div class="album">
    <?php
    foreach ($albumList as $album) {

        echo '<div class = "album_div">';

        echo '<div class = "album_mid_div">';

        echo '<div class="album_mini_div">';

        echo '<div>';
        echo '<img class = "album_cover" src = "' . $album['picture'] . '"  >';
        echo '</div>';

        echo '<div class = "album_name_div">';
        echo '<p class = "album_name">' . $album['name'] . '</p>';
        echo '</div>';

        echo '</div>';

        echo '<div class = "trackList">';
        echo '<tr>';
        foreach ($trackList as $tracks) {
            echo ' <td class = "trackList"> <p>' . $tracks['name'] . '</p></td>';
        }
        echo '</tr>';

        echo '</div>';

        echo '</div>';

        echo '</div>';


        // echo '<div style="display:flex;flex-direction: column;text-align:center;width:25%;margin-bottom:16px;">';
        // echo '<a href="album?'.$album['id'].'" style="font-size: 18px;text-decoration: none; color: black;">';
        // echo '<div style="display: flex; justify-content: center;">';
        // echo '<img src="'. $album['picture'] . '" style="width:250px; height: 250px; horizontal-align: middle;">';
        // echo '</div>';
        // echo '<p style="font-size: 18px;">'.$album['name'].'</p>';
        // echo '</div></a>';
    }
    ?> </div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>