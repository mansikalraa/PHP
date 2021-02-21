<?php

$count = 1;

// While loop
while($count<=10){
    echo "$count <br>";
    $count++;
}

$count = 1;

// Do-While loop
do{
    echo "$count <br>";
    $count++;
} while($count<=0);

// For loop
for($count = 1; $count<=10; $count++){
    echo "$count <br>";
}

// For Each loop
$abc = array('a','b','c');

foreach($abc as $a){
    echo "$a <br>";
}

// Associative array
$students = array(array('RN'=>'1',
                        'Name'=>'a',
                        'Age'=>'14'),
                  array('RN'=>'2',
                        'Name'=>'b',
                        'Age'=>'13'),
                  array('RN'=>'3',
                        'Name'=>'c',
                        'Age'=>'15'));
foreach($students as $student=> $innerArray){
    echo "$student : ";
    foreach($innerArray as $item){
        echo "$item ";
    }
    echo "<br>";
}

?>