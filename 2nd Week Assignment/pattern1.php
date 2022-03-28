<?php

    function pat($p)
    {
        for($i=0;$i<$p;$i++)
        {
            for($j=0;$j<=$i;$j++)
            {
                echo "*";
            }
            echo ("<br>");
        }
    }
    pat(5);
?>