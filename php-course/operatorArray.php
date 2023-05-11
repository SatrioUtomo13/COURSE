<?php 

    //union

    // $first = [
    //     'first' => 'satrio'
    // ];

    // $last = [
    //     'last' => 'utomo'
    // ];

    // $full = $first + $last;
    // var_dump($full);

    //equality
    $first = [
        'last' => 'utomo',
        'first' => 'satrio'
    ];

    $last = [
        'first' => 'satrio',
        'last' => 'utomo'
    ];

    var_dump($first == $last);


    //identity
    var_dump($first === $last);


    //inequality
    var_dump($first != $last);

    //nonidentity
    var_dump($first !== $last);
?>

