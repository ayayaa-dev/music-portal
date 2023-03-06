<?php
    ob_start();
    $title = "REAL NIGGAS ONLY USE BLACKWELL"
?>
    <div class="col-md-6">
        <h3>What is Blackwell Music</h3>
        <p>Blackwell Music is the world’s biggest collection of musical knowledge</p>
    </div>
    <div class="col-md-6">
        <h3>Charts</h3>
        <h4>Top albums</h4>
        <table class="table table-striped">
            <tr>
                <th style="width: 10%"></th>
                <th style="width: 25%"></th>
                <th style="width: 10%"></th>
            </tr>
            <tbody>
                <?php
                    foreach ($albumList as $album) {
                        echo '<tr>
                        <td><img src="'.$album['picture'].'"></td>
                        <td><p style="font-size: 24px; text-align: center; margin: 0 auto;">'.$album['name'].'</p></td>
                        <td>
                            <a href="editalbum?'.$album['id'].'" class="btn-success btn-sm btn-flat">Edit</a>
                        </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <h4>Top artists</h4>
        <table class="table table-striped">
            <tr>
                <th style="width: 10%"></th>
                <th style="width: 25%"></th>
                <th style="width: 10%"></th>
            </tr>
            <tbody>
                <?php
                    foreach ($artistList as $artist) {
                        echo '<tr>
                        <td><img src="'.$artist['picture'].'"></td>
                        <td><p style="font-size: 24px; text-align: center; margin: 0 auto;">'.$artist['name'].'</p></td>
                        <td>
                            <a href="editalbum?'.$artist['id'].'" class="btn-success btn-sm btn-flat">Edit</a>
                        </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php
    $content = ob_get_clean();
    include "view/template/layout.php";
?>