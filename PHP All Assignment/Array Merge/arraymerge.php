<?php
    $a=array("a"=>"Sahil" , array("b"=>"Jaypal"));  
    echo "<pre>";         
    print_r($a);
    echo "</pre>";
    $b=array("c"=>"milind");
             echo "<br>";
    $c=array_merge($a[0],$b);
    

    foreach($a as $key=>$value)
    {
        if(is_array($value))
        {
            $a[$key] = array_merge($value,$b);
        }
    }

    echo "<pre>";         
    print_r($a);
    echo "</pre>";

?>