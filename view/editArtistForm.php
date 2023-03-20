<?php
ob_start();
$title="";
if (isset($artist) && $artist) {
    $title .= "Edit artist info - ".$artist['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
        if(isset($error)) echo '<p>'.$error.'</p>';
    ?>
</div>
<div>
    <form action="editArtistResult?<?php echo $artist['id'];?>" method="POST" >
    <div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editArtist">Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $artist['name'];?>" required>
            </div>
        </div>        
        <div class="col-md-12">
            <div class="form-group">
                <label for="editArtist">Summary:</label>
                <textarea class="form-control" name="description"><?php echo $artist['short_desc']?></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editArtist">Description:</label>
                <textarea class="form-control" name="description"><?php echo $artist['description']?></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="editArtist">Image link:</label>
                <input type="text" name="picture" class="form-control" value="<?php echo $artist['picture'];?>">
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" name="send">Update artist</button>
            <a href="artist?<?php echo $artist['id'];?>" type="button" class="btn btn-primary" >Back to artist info</a>
        </div>
    </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>