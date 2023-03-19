<?php
ob_start();
$title="";
if (isset($album) && $album) {
    $title .= "Edit album info - ".$album['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
        if(isset($error)) echo '<p>'.$error.'</p>';
    ?>
</div>
<div>
    <form action="editAlbumResult?<?php echo $album['id'];?>" method="POST" >
    <div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $album['name'];?>" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Genre:</label>
                <textarea class="form-control" name="description"><?php echo $album['genre']?></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Image link:</label>
                <input type="text" name="picture" class="form-control" value="<?php echo $album['picture'];?>">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Artist:</label>
                <select name="artists" class="form-control" >
                    <?php
                    $artistList = Model::getArtists();
                    foreach ($artistList as $artist) {
                    echo '<option value="'.$artist.'" ';
                    if($artist['id'] == $album['artist_id']) echo 'selected';
                    echo '>'.$artist['id'].' - '.$artist['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editAlbum">Release date:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $album['release_date'];?>" required>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" name="send">Update album</button>
            <a href="album?<?php echo $album['id'];?>" type="button" class="btn btn-primary" >Back to album info</a>
        </div>
    </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>