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

        echo '<div style = width:100%; height:100%;>';
        echo '<table class="table table-striped"style="padding: 20px;">';

        echo '<tr>
        <th style="width: 18%"></th>
        <th style="width: 82%"></th>
        </tr>';
        foreach ($trackList as $tracks) {
            echo '<tr>';
            echo '<td> <p>' . $tracks['name'] . '</p></td>';
            echo '<td> <p>' . $tracks['time'] . '</p> </td>';
            echo '</tr>';
        }
        echo ' </table>';

        echo '</div>';

        echo '</div>';

        echo '<div>';
        echo '<div>';
        echo '<a href="album?' . $album['id'] . '" style="font-size: 18px;text-decoration: none; color: black;">';
        echo '<button>More Info</button></a>';
        echo '</div>';
        echo '</div>';

        echo '</div>';
    }
    ?> </div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>