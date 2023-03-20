<?php
ob_start();
$title = "";
if (isset($track) && $track) {
    $title .= "Edit track info - " . $track['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="editTrackResult?<?php echo $track['id']; ?>" method="POST">
        <div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="editTrack">Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $track['name']; ?>" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="editTrack">Time:</label>
                    <input type="text" name="time" class="form-control" value="<?php echo $track['time']; ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="editTrack">Spotify Link:</label>
                    <input type="text" name="link" class="form-control" value="<?php echo $track['link']; ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="addTrack">Album:</label>
                    <select name="album_id" class="form-control">
                        <?php
                        $albumList = Model::getAlbums();
                        foreach ($albumList as $album) {
                            echo '<option value="' . $album['id'] . '" ';
                            if ($album['id'] == $track['album_id']) echo 'selected';
                            echo '>' . $album['id'] . ' - ' . $album['name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Update track</button>
                <a href="album?<?php echo $album['id']; ?>" type="button" class="btn btn-primary">Back to album
                    info</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>