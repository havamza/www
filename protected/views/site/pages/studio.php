<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Havamza
 * Date: 12/6/12
 * Time: 8:38 AM
 * To change this template use File | Settings | File Templates.
 */
?>

<h3>С нами сотрудничают</h3>
<div id='main' class='row'>
    <?php
    $n = (int)(array_sum(array_map('is_file', glob('./images/preview/*'))));
    $count = 0;
    for ($i = 0; $i <= ($n / 2); $i++) {
        echo "<ul class='thumbnails'>";
        for ($j = 0; $j <= 1; $j++) {
            $count++;
            if (!($count <= $n)) break;
            echo "<li class='span6'><div class='thumbnail'>";
            $this->widget('application.widgets.WStudioPreview', array(
                'items' => array(
                    array(
                        'image' => $count
                    ),
                )));
            echo "</div></li>";
        }
        echo "</ul>";
    }
    ?>
</div>