<?php
    //regular function
    function sayHello(){
        echo "hello function <br>";
    }
    sayHello();
    sayHello();

    //function in if statement
    $buat = true;
    if ($buat){
        function buat(){
            echo 'this is function <br>';
        }
    }
    buat();

    //argument in function
    function myName($name){
        echo "hello $name <br>";
    }
    myName('satrio');

    //default value in argument
    function def($name = 'satrio'){
        echo "welcome $name <br>";
    }
    def();

    //type declaration : used when we want to tell function that our arguments has specifict type data
    function sum(int $first , int $last){
        $total = $first + $last;
        echo "total from $first + $last = $total <br>";
    }
    sum(100, 50);
    sum('100', '20');
    sum(true, false);

    //...argument : used to add all argument, act likes array
    function sumAll(...$num){
        $total = 0;
        foreach ($num as $nums) {
            $total += $nums;
        }
        echo "$total <br>";
    }
    sumAll(12,34,10);

    //function with return value
    function add(int $first, int $last){
        return $first + $last;
    }
    $all = add(30,10);
    var_dump($all);
    echo '<br>';
    //or
    function add2($value){
        if($value >= 90){
            return 'A';
        }elseif($value >= 75){
            return 'B';
        }elseif($value >= 60){
            return 'C';
        }else{
            return 'D';
        }
    }
    $all2 = add2(72);
    var_dump($all2);

    echo '<br>';
    echo '<br>';


    //return type declaration
    function sum2($a, $b): int{
        return $a + $b;
    }
    var_dump (sum2("2", 5));

    echo '<br><br>';

    //variable function
    function sayHello2(string $name, $strtoupper){
        $final = $strtoupper($name);
        echo "hello $final";
    }
    $call = "sayHello2";
    $call("satrio", "strtoupper");

    echo '<br><br>';

    //anonymous function
    $hi = function(string $name){
        echo "hello $name";
    };
    $hi("utomo");

    echo '<br><br>';


    //arrow function
    $firstname = "satrio";
    $arrow = fn() => "hello $firstname";
    echo $arrow();

    echo '<br><br>';

    //use method : to acces outer variable
    $firstname2 = 'satrio';
    $lastname2 = 'utomo';
    $say = function() use($firstname2 , $lastname2){
        echo "my name is $firstname2 $lastname2";
    };
    $say();

    echo '<br><br>';

    //callback function
    function say2(string $name , callable $filter){
        $finalName = call_user_func($filter, $name);
        echo "hi $finalName";
    }
    say2('rasel', "strtoupper");
    say2('rasel', fn($name) => strtoupper($name));

?>