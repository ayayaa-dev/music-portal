<?php
ob_start();
$title="Add album";
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
        if(isset($error)) echo '<p>'.$error.'</p>';
    ?>
</div>
<div>
    <form action="addAlbumResult?<?php echo $album['id'];?>" method="POST" >
    <div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addAlbum">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addAlbum">Genre:</label>
                <textarea class="form-control" name="description"></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addAlbum">Image link:</label>
                <input type="text" name="picture" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addAlbum">Artist:</label>
                <select name="artists" class="form-control" >
                    <?php
                    $artistList = Model::getArtists();
                    foreach ($artistList as $artist) {
                    echo '<option value="'.$artist.'">'.$artist['id'].' - '.$artist['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addAlbum">Release date:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" name="send">Add album</button>
            <a href="albums" type="button" class="btn btn-primary" >Back to album list</a>
        </div>
    </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>