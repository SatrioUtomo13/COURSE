<?php 
//reference use when we want to reference variable to another variable or function

//simple example 
$name = 'satrio';
$otherName = &$name;
echo $otherName;

echo '<br><br>';

//we can change main variable in reference
$otherName = 'utomo';
echo $otherName;


echo '<br><br>';

//pass by reference
function increament (int &$value){
    $value++;
};
$counter = 1;
increament($counter);
echo $counter;
?>