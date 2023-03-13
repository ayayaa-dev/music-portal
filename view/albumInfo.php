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

            <div class="Album_Picture">
                <?php
                echo '<img class="album_cover" src = "' . $album['picture'] . '">';
                ?>
            </div>

            <div class="Album_genres">
                <div class="genre">
                    <h2>Genre:</h2>
                </div>

                <div class="genre_list">
                    <?php
                    echo '<p>' . $album['genre'] . '</p>';
                    ?>
                </div>
            </div>
        </div>

        <div class="Tracks_list">
            <table>
                <tr>

                    <th>
                        <p>Track Name</p>
                    </th>

                    <th>
                        <p>Time</p>
                    </th>

                    <th>
                        <p>LINK</p>
                    </th>

                </tr>

                <?php
                foreach ($tracks as $track) {
                    echo '<tr>';
                    echo '<td> <p>' . $track["name"] . '</p>   </td>';
                    echo '<td> <p>' . $track["time"] . '</p> </td>';
                    echo '<td><iframe style="border-radius:12px" src="' . $track['link'] . '" width="100%" height="120" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>   </td></td>';
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