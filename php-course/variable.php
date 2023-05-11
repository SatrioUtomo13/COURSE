<?php 
    //regular variable
    $name = 'satrio';
    $age = 23;

    echo 'name : ';
    echo $name;
    echo '<br>';

    echo 'age : ';
    echo $age;
    echo '<br>';

    //delete variable using unset
    // $try = 'this is try';
    // unset($try);
    // echo $try;

    //checking variable using isset
    var_dump(isset($name));
    echo '<br>';

    //study case : checking variable 

    if(isset($name) === true){
        echo 'welcome ';
        echo $name;
    }else{
        echo 'data is not exist';
    }
?>