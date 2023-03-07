<?php
    ob_start();
    $title = "WELCOME"
    // $title = "#速度与激情9#
    // 早上好中国
    // 现在我有冰激淋 我很喜欢冰激淋
    // 但是《速度与激情9》比冰激淋……"
?>
    <div class="col-md-6">
        <h3>What is Blackwell Music</h3>
        <p>Blackwell Music is the world’s biggest collection of musical knowledge</p>
        <!-- <div style="width: 100%; height: 0px; position: relative; padding-bottom: 100%;"><iframe src="https://streamable.com/e/unscxr" frameborder="0" width="100%" height="100%" allowfullscreen style="width: 100%; height: 100%; position: absolute;"></iframe></div>
        <?php
                // echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5g9lS8deSIxItFBmZRC4vN" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
        ?> -->
    </div>
    <div class="col-md-6">
        <h3>Charts</h3>
        <h4>Top albums</h4>
        <table class="table table-striped">
            <tr>
                <th style="width: 40%"></th>
                <th style="width: 40%"></th>
                <th style="width: 20%"></th>
            </tr>
            <tbody>
                <?php
                    foreach ($albumList as $album) {
                        echo '<tr>
                        <td><img src="'.$album['picture'].'"style="width:50%"></td>
                        <td><p style="font-size: 24px;">'.$album['name'].'</p></td>
                        <td>
                            <a href="editalbum?'.$album['id'].'" class="btn-success btn-sm btn-flat" style="display:flex;justify-content:center;position:relative;overflow:hidden">Edit</a>
                        </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <h4>Top artists</h4>
        <table class="table table-striped">
            <tr>
                <th style="width: 40%"></th>
                <th style="width: 40%"></th>
                <th style="width: 20%"></th>
            </tr>
            <tbody style="justify-content:center; margin: 0 auto;">
                <?php
                    foreach ($artistList as $artist) {
                        echo '<tr>
                        <td><img src="'.$artist['picture'].'" style="width:50%"></td>
                        <td><p style="font-size: 24px;">'.$artist['name'].'</p></td>
                        <td>
                            <a href="editalbum?'.$artist['id'].'" class="btn-success btn-sm btn-flat" style="display:flex;justify-content:center;position:relative;overflow:hidden">Edit</a>
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