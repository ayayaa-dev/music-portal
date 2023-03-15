<?php
ob_start();
$title = "WELCOME";
// $title = "#速度与激情9#
//     早上好中国
//     现在我有冰激淋 我很喜欢冰激淋
//     但是《速度与激情9》比冰激淋……";
// 
?>
<div class="col-md-6" style="height: 91.7%; display: flex; flex-direction: column; justify-content: space-between;">
    <div>
        <h3 style=" text-align: center">What is Blackwell Music?</h3>
        <div style="display:flex; flex-direction: column; font-size:20px; text-align: center; margin: 10px; justify-content: space-evenly;">
            <div>
                <p>
                    Blackwell Music is a new upcomming music encyclopedia with more artist and albums being added
                    constantly.
                </p>
            </div>
            <div>
                <p>
                    We spotlights the artists who are shaping music culture across every genre and
                    musical discipline, sharing the stories behind their creativity and craft in their own words.
                </p>
            </div>
        </div>
    </div>
    <!-- <div style="width: 100%; height: 0px; position: relative; padding-bottom: 100%;"><iframe src="https://streamable.com/e/unscxr" frameborder="0" width="100%" height="100%" allowfullscreen style="width: 100%; height: 100%; position: absolute;"></iframe></div> -->
    <div>
        <h4 style="text-align: center;">Our favorite tracks</h4>
        <div class="">
            <?php
            echo '<iframe style="border-radius:12px; margin:0px;"
                  src="' . $musicPlayer['link'] . '" 
                  width="100%" height="347" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; 
                  encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                  </iframe>';
            // echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0vjeOZ3Ft5jvAi9SBFJm1j?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
            ?>
            <?php
            echo '<iframe style="border-radius:12px"
                  src="' . $musicPlayer2['link'] . '" 
                  width="100%" height="347" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; 
                  encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                  </iframe>';
            // echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0vjeOZ3Ft5jvAi9SBFJm1j?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
            ?>
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- <h3>Charts</h3> -->
    <h4>Recommended albums</h4>
    <table class="table table-striped">
        <tr>
            <th style="width: 18%"></th>
            <th style="width: 82%"></th>
            <!-- <th style="width: 20%"></th> -->
        </tr>
        <tbody>
            <?php
            foreach ($albumList as $album) {
                echo '<tr>
                        <td><img src="' . $album['picture'] . '" style="width:110px; height: 110px"></td>
                        <td style="text-align: center;vertical-align: middle;"><a href="album?' . $album['id'] . '" style="font-size: 24px;text-decoration: none; color: black;">' . $album['name'] . '</a></td>
                        </tr>';
            }
            ?>
        </tbody>
    </table>
    <h4>Recommended artists</h4>
    <table class="table table-striped">
        <tr>
            <th style="width: 18%"></th>
            <th style="width: 82%"></th>
            <!-- <th style="width: 20%"></th> -->
        </tr>
        <tbody style="justify-content:center; margin: 0 auto;">
            <?php
            foreach ($artistList as $artist) {
                echo '<tr>
                        <td><img src="' . $artist['picture'] . '" style="width:110px; height: 110px"></td>
                        <td style="text-align: center;vertical-align: middle;"><a href="artist?' . $artist['id'] . '" style="font-size: 24px;text-decoration: none; color: black;">' . $artist['name'] . '</a></td>

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

<!--
    <td>
        <a href="editalbum?'.$album['id'].'" class="btn-success btn-sm btn-flat" style="display:flex;justify-content:center;position:relative;overflow:hidden">Edit</a>
    </td> 
    <td>
        <a href="editalbum?'.$artist['id'].'" class="btn-success btn-sm btn-flat" style="display:flex;justify-content:center;position:relative;overflow:hidden">Edit</a>
    </td>
-->