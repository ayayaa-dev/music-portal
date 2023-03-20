<?php
ob_start();
$title = "Albums"
?>
<div style="text-align: center;">
    <h3>List of found albums</h3>
</div>
<?php
    if(isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin'){
        echo '<div style="text-align: right;">';
        echo '<a href="addAlbum" class="btn btn-primary btn-sm btn-flat">Add Album</a>';
        echo '</div>';
    }
?>
<div>
<div class="album">
    <?php
    foreach ($albumList as $album) {
        $trackList = Model::get3TrackByAlbum($album['id']);
        echo '<div class="album_div">';
        echo '<div class="album_mid_div">';
        echo '<div class="album_mini_div">';

        echo '<div>';
        echo '<img class="album_cover" src="'. $album['picture'].'">';
        echo '</div>';

        echo '<div class="album_name_div">';
        echo '<p class="album_name">'.$album['name'].'</p>';
        echo '</div>';

        echo '</div>';

        echo '<div style=width:100%; height:100%;>';
        echo '<table class="table table-striped"style="padding: 20px; height:100%; vertical-align: middle;">';

        // echo '<tr>
        // <th style="width: 88%"></th>
        // <th style="width: 12%"></th>
        // </tr>';
        foreach ($trackList as $tracks) {
            echo '<tr>';
            echo '<td> <p>'.$tracks['name'].'</p></td>';
            echo '<td> <p>'.$tracks['time'].'</p> </td>';
            echo '</tr>';
        }
        echo ' </table>';
        echo '</div>';
        echo '</div>';
        echo '<div>';

        echo '<div>';
        echo '<a href="album?'.$album['id'].'" style="font-size: 18px;text-decoration: none; color: black;">';
        echo '<button class="button">More Info</button></a>';
        echo '</div>';
        
        echo '</div>';
        echo '</div>';
    }
    ?> </div>
    <div style="text-align:center">
        <h2>ARTISTS</h2>
    </div>
    <hr>
    <div style="text-align: center;">
        <h3>List of found artists</h3>
    </div>
    <?php
    if(isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin'){
        echo '<div style="text-align: right; margin: 10px;">';
        echo '<a href="addArtist" class="btn btn-primary btn-sm btn-flat">Add Artist</a>';
        echo '</div>';
        }
    ?>
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
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>
