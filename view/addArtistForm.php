<?php
ob_start();
$title="Add artist";
?>
<div class="box-header with-border">
    <!-- error message -->
    <?php
        if(isset($error)) echo '<p>'.$error.'</p>';
    ?>
</div>
<div>
    <form action="addArtistResult" method="POST" >
    <div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addArtist">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addArtist">Description:</label>
                <textarea class="form-control" name="description"></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addArtist">Summary:</label>
                <textarea class="form-control" name="summary"></textarea>
                <small>If you are using apostrophes symbol (') put backslash symbol (\) before it.</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="addArtist">Image link:</label>
                <input type="text" name="picture" class="form-control">
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" name="send">Add artist</button>
            <a href="artists" type="button" class="btn btn-primary" >Back to artist list</a>
        </div>
    </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>