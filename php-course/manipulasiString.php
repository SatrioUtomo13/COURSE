<?php 

    // combine string using dot .

    $name = 'satrio';  
    echo 'name : ' . $name;

    echo "<br>";
    echo "<br>";

    //convert 
    $vstring = (string)100;
    var_dump($vstring);

    echo "<br>";

    $vint = (int)'100';
    var_dump($vint);

    echo "<br>";

    $vfloat = (float)'1.234';
    var_dump($vfloat);

    echo "<br>";
    echo "<br>";

    //acces variable

    echo $name[2];
    // echo $name[6]; //this is error

    echo "<br>";
    echo "<br>";

    //variable parsing : seems like combine string using dot we've discuss before
    //using double qoute ("") or heredoc (<<<)
    echo "hello $name , welcome";
    echo "<br>";
    echo "hello {$name}s, welcome";
?>