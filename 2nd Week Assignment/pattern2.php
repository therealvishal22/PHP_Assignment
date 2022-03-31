
<?php
    // right triangle pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print spaces
        for($j = 1; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>
