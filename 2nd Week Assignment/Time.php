<?php
error_reporting(0);
    date_default_timezone_set("asia/kolkata");
    echo date("y/m/d h:i:s A"),"<br>";
    $d=mktime("28,03,2022,02,32,34");
    echo ("Create Date Is".date("h:m:i A d/m/y")),"<br>";
    
    //strtotime Function

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    //
?>
