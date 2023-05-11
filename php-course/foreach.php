<?php 

    //foreach used when we want to access data of array

    $names = ['muhammad', 'satrio', 'utomo'];

    //forach without index
    foreach ($names as $name) {
        echo "welcome $name <br>";
    };

    echo '<br>';
    echo '<br>';

    //foreach with index
    foreach ($names as $index => $name) {
        echo "data number $index is : $name <br>";
    };

    echo '<br>';
    echo '<br>';

    //foreach key and value
    $person = [
        "firstName" => 'satrio',
        "lastName" => 'utomo'
    ];

    foreach ($person as $key => $value) {
        echo "$key : $value <br>";
    }


?>