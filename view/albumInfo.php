<?php
ob_start();
$title = "";
if (isset($album) && $album) {
    $title .= $album['name'];
}
?>
<body>
    <?php
        if(isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin'){
            echo '<div style="text-align: right; margin:10px;">';
            echo '<a href="editAlbum?'.$album['id'].'" class="btn btn-primary btn-sm btn-flat" style="margin:2px;">Edit Album</a>';
            echo '<a href="deleteAlbum?'.$album['id'].'" class="btn btn-danger btn-sm btn-flat" style="margin:2px;">Delete Album</a>';
            echo '</div>';
        }
    ?>
    <div class="Full_div">
        <div class="Album_div">
            <div class="border_album">
                <div class="Album_Picture">
                    <?php
                    echo '<img class="album_img" src = "' . $album['picture'] . '">';
                    ?>
                </div>

                <div class="Album_Info">

                    <!-- <div class="Album_Name">
                        <div class="name_album">
                            <h2>Album Name</h2>
                        </div>

                        <div class="NAME">
                            <?php
                            echo '<p>' . $album['name'] . '</p>'
                            ?>
                        </div>

                    </div> -->

                    <div class="Album_Release">
                        <div class="release">
                            <h2>Release Date</h2>
                        </div>

                        <div class="release_Date">
                            <?php
                            echo '<p>' . $album['release_date'] . '</p>';
                            ?>
                        </div>
                    </div>

                    <div class="Album_genres">
                        <div class="genre">
                            <h2>Genre</h2>
                        </div>

                        <div class="genre_list">
                            <?php
                            echo '<p>' . $album['genre'] . '</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="Artist_div">
            <div class="border-artist">

                <div class="artist_image">
                    <?php
                    $artist = Model::getArtistById($album['artist_id']);
                    echo '<a href="artist?' . $artist['id'] . '">';
                    echo '<img class="artist_pic" src="' . $artist['picture'] . '"></a>'
                    ?>
                </div>

                <div class="Artist_Info">
                    <div class="name_artist">
                        <div class="name">
                            <h2>Artist Name</h2>
                        </div>
                        <div class="artist_name">
                            <?php
                            $artist = Model::getArtistById($album['artist_id']);
                            echo '<p class = "artist">' . $artist['name'] . '</p>';
                            ?>
                        </div>
                    </div>

                    <div class="artist_short_desc">
                        <div class="short_desc">
                            <h3>Short Description</h3>
                        </div>
                        <div class="short_desc_artist">
                            <?php
                            $artist = Model::getArtistById($album['artist_id']);
                            echo '<p class = "artist_desc">' . $artist['short_desc'] . '</p>';
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="Tracks_list">
        <hr>
        <div class="Tracks_div">
            <div class="Tracks">
                <p>Tracks</p>
            </div>
        </div>
        <div class="Table">
            <table class="Table_tracks">
                <tr>
                    <th style="width:45%; text-align: center;">
                        <p>Track Name</p>
                    </th>

                    <th style="width:20%; text-align: center">
                        <p>Time</p>
                    </th>

                    <th style="width:35%; text-align: center;">
                        <p>Preview</p>
                    </th>

                </tr>

                <?php
                foreach ($tracks as $track) {
                    echo '<tr>';
                    echo '<td> <p style= "text-align:center; padding:10px;">' . $track["name"] . '</p>  </td>';
                    echo '<td> <p style= "text-align:center;">' . $track["time"] . '</p> </td>';
                    echo '<td cla ss="spotify"><iframe style="border-radius:12px;" src="' . $track['link'] . '" width="500px" height="100px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></td>';
                    echo '</tr>';
                }

                ?>
            </table>
        </div>
    </div>
</body>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>