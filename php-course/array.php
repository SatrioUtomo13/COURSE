<?php 

    //create array 1
    $values = array(10, 9 ,8 , 7.5);
    var_dump($values);

    echo '<br>';

    //create array 2
    $name = ['satrio', 23];
    var_dump($name);

    echo '<br>';
    echo '<br>';

    //A FEW OPERATION IN ARRAY

    //acces array
    var_dump($values[1]);
    echo '<br>';

    //add array
    $name[] = 'utomo';
    var_dump($name);
    echo '<br>';

    //change array
    $name[0] = 'arrazi';
    var_dump($name);
    echo '<br>';

    //delete array
    unset($name[1]);
    var_dump($name);
    echo '<br>';

    //count array
    var_dump(count($name));
    echo '<br>';
    echo '<br>';


    //array as a map
    $satrio = [
        'id' => '123',
        'name' => 'satrio utomo',
        'age' => 23
    ];
    var_dump($satrio['age']);
    echo '<br>';
    echo '<br>';


    //nested array
    $utomo = [
        'id' => '123',
        'name' => 'satrio utomo',
        'age' => 23,
        'addres' => [
            'city' => 'Serang',
            'country' => 'indonesia'
        ]
    ];
    var_dump($utomo['addres']['country']);
?>