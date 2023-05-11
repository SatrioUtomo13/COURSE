<?php 

    //break use when you want to stop condition, likes looping

    $counter = 1;

    while(true){
        echo "this is looping no. $counter <br>";
        $counter++;

        if($counter > 10){
            break;
        }
    }

    //study case: counting person in a room

    $member = 0;
    $ask = true;

    while($ask === true){
        $member ++;
        echo "you are member no. $member <br>";

        if($member >= 30){
            break;
            echo 'maximum space';
        }
    }

?>