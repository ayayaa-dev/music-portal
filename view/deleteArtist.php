<?php
ob_start();
$title="";
if (isset($artist) && $artist) {
    $title .= "Delete ".$artist['name'];
}
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
    if(isset($error)) echo '<p>'.$error.'</p>';
    ?>
</div>
<div>
    <form action="deleteArtistResult?<?php echo $artist['id'];?>" method="POST">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="<?php echo $artist['name'];?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Summary:</strong>
                <input type="text" name="summary" class="form-control" value="<?php echo $artist['short_desc'];?>" readonly>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" value="<?php echo $artist['description'];?>" readonly>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger" name="send">Delete artist</button>
            <a href="artist?<?php echo $artist['id'];?>" type="button" class="btn btn-primary" >Back to artist info</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>