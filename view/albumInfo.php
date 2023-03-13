<?php
ob_start();
$title = "";
if (isset($album) && $album) {
    $title .= $album['name'];
}
?>

<body>
    <div class="Full_div">

        <div class="Album_div">
            <div class="border_album">
                <div class="Album_Picture">
                    <?php
                    echo '<img class="album_img" src = "' . $album['picture'] . '">';
                    ?>
                </div>

                <div class="Album_Info">
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
            <div class="artist_image">
                <?php
                $artist = Model::getArtistById($album['artist_id']);
                echo '<a href="artist?' . $artist['id'] . '">';
                echo '<img class="artist_pic" src="' . $artist['picture'] . '"></a>'
                ?>
            </div>
            <div class="Artist_Info">
                <div class="artist_name">
                    <?php
                    $artist = Model::getArtistById($album['artist_id']);
                    echo '<p class = "artist">' . $artist['name'] . '</p>';
                    ?>
                </div>

                <div class="artist_short_desc">
                    <?php
                    $artist = Model::getArtistById($album['artist_id']);
                    echo '<p class = "artist_desc">' . $artist['short_desc'] . '</p>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="Tracks_list">
        <hr>
        <div class="Tracks">
            <p>Tracks</p>
        </div>
        <table style="width: 100%;">
            <tr>
                <th style="width:40%; text-align: center">
                    <p>Track Name</p>
                </th>

                <th style="width:25%; text-align: center">
                    <p>Time</p>
                </th>

                <th style="width:35%; text-align: center; vertical-align:bottom;">
                    <p>LINK</p>
                </th>

            </tr>

            <?php
            foreach ($tracks as $track) {
                echo '<tr>';
                echo '<td> <p style= "text-align:center;">' . $track["name"] . '</p>  </td>';
                echo '<td> <p style= "text-align:center;">' . $track["time"] . '</p> </td>';
                echo '<td class="spotify"><iframe style="border-radius:12px;" src="' . $track['link'] . '" width="500px" height="100px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></td>';
                echo '</tr>';
            }

            ?>
        </table>
    </div>
</body>

<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>