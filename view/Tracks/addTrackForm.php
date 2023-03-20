<?php
ob_start();
$title = "Add track";
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="addTrackResult" method="POST">
        <div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="addTrack">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="addTrack">Time:</label>
                    <input type="text" name="time" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="addTrack">Spotify link:</label>
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="addTrack">Album:</label>
                    <select name="album_id" class="form-control">
                        <?php
                        $albumList = Model::getAlbums();
                        foreach ($albumList as $album) {
                            echo '<option value="' . $album['id'] . '">' . $album['id'] . ' - ' . $album['name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Add track</button>
                <a href="albums" type="button" class="btn btn-primary">Back to album</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>