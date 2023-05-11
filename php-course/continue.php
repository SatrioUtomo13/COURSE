<?php 

    //continue used when you want to skip a condition, likes looping

    for ($i = 1; $i<= 100; $i++){
        if($i % 2 == 0){
            continue;
        }
        echo "this is looping number : $i <br>";
    };
?>