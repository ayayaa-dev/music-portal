<?php
ob_start();
$title = "Artists";
?>


<div class="Add_Artist">
    <a href="artistAdd" style="text-decoration: none; color: white;">
        <button class="Blue_button">Add Artist</button>
    </a>
</div>

<div style="display:flex;flex-direction:row;flex-wrap:wrap;width: 100%; justify-content: center;">
    <div class="All_Artist">
        <?php
        foreach ($artistList as $artist) {
            echo '<a href="artist?' . $artist['id'] . '" style="font-size: 18px;text-decoration: none; color: black;">';
            echo '<div class="Artist">';

            echo ' <div class="Artist_Picture">';

            echo '<img class= "Artist_Image" src="' . $artist['picture'] . '">';
            echo '</div>';
            echo '<div class="Artist_Name">';
            echo '<p class="Artist_Naming">' . $artist['name'] . '</p>';
            echo '</div>';
            echo '</a>';
            echo '<div class= "Button_Block">';
            echo '<div class="Green_button">';
            echo '<a href="artistEdit?' . $artist['id'] . '" style="text-decoration: none; color: white;">';
            echo '<button class="Edit_Button">Edit</button></a>';
            echo '</div>';
            echo '<div class="Red_button">';
            echo '<a href="artistDelete?' . $artist['id'] . '" style="text-decoration: none; color: white;">';
            echo '<button class="Delete_Button">Delete</button></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>



<?php
$content = ob_get_clean();
include "view/template/layout.php";
?>