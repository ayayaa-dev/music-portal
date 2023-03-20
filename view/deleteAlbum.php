<?php
ob_start();
$title = "";
if (isset($album) && $album) {
    $title .= "Delete " . $album['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="deleteAlbumResult?<?php echo $album['id']; ?>" method="POST">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="<?php echo $album['name']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                <input type="text" name="genre" class="form-control" value="<?php echo $album['genre']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Release date:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $album['release_date']; ?>" readonly>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger" name="send">Delete album</button>
            <a href="album?<?php echo $album['id']; ?>" type="button" class="btn btn-primary">Back to album info</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>