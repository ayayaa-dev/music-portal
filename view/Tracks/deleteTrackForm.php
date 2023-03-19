<?php
ob_start();
$title = "";
if (isset($track) && $track) {
    $title .= "Delete " . $track['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="deleteTrackResult?<?php echo $track['id']; ?>" method="POST">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="<?php echo $track['name']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Time:</strong>
                <input type="text" name="time" class="form-control" value="<?php echo $track['time']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Spotify Link:</strong>
                <input type="text" name="link" class="form-control" value="<?php echo $track['link']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger" name="send">Delete track</button>
            <a href="album?<?php echo $track['album_id']; ?>" type="button" class="btn btn-primary">Back to album
                info</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>