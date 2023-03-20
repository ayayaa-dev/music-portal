<?php
ob_start();
$title = "";
if (isset($artist) && $artist) {
    $title .= $artist['name'];
}
?>

<body>
    <?php
        if(isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin'){
            echo '<div style="text-align: right; margin:10px;">';
            echo '<a href="editArtist?'.$artist['id'].'" class="btn btn-primary btn-sm btn-flat" style="margin:2px;">Edit Artist</a>';
            echo '<a href="deleteArtist?'.$artist['id'].'" class="btn btn-danger btn-sm btn-flat" style="margin:2px;">Delete Artist</a>';
            echo '</div>';
        }
    ?>
    <div class="Full_Div">
        <div class="Artist_INFO">
            <div class="Artist_IMAGE">
                <?php
                echo '<img class= "Artist_IMAGE" src="' . $artist['picture'] . '">';
                ?>
            </div>
            <div class="ARTIST_INFO">
                <div class="Desc">
                    <p>Description</p>
                </div>
                <div class="Artist_Description">
                    <?php
                    echo '<p>' . $artist['description'] . '</p>';
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="Header">
            <div class="Album_Header">
                <p>Albums</p>
            </div>
        </div>
        <div class="album">
            <?php
            foreach ($album as $album) {
                $trackList = Model::get3TrackByAlbum($album['id']);
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
                echo '<table class="table table-striped"style="padding: 20px; height:100%; vertical-align: middle;">';

                // echo '<tr>
                // <th style="width: 88%"></th>
                // <th style="width: 12%"></th>
                // </tr>';
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
                echo '<button class="button">More Info</button></a>';
                echo '</div>';
                echo '</div>';

                echo '</div>';
            }
            ?>
        </div>


    </div>
</body>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>