<?php

// arrays are declared with array()
$abc = array('a','b','c');

print_r($abc); // to print all values of array
echo $abc[1], "<br>";  // to print one value at specified index

$abc[4] = 'd'; // to add element to array
print_r($abc);
echo "<br><br>";

// Associative arrays
// arrays that use named keys that you assign to them
echo "<b>Associative arrays</b><br>";
$efg = array('e'=>10,'f'=>20,'g'=>30);
print_r($efg);
echo "<br>e : ".$efg['e']; // to print value of any key
echo "<br><br>";

// Multidimentional arrays
/* Students
RN Name Age 
1  a    14
2  b    13
3  c    15
*/
echo "<b>Multidimentional arrays</b><br>";
$students = array(array('1','a','14'),
                  array('2','b','13'),
                  array('3','c','15'));

echo $students[0][0].' '.$students[0][1].' '.$students[0][2].'<br>';
echo $students[1][0].' '.$students[1][1].' '.$students[1][2].'<br>';
echo $students[2][0].' '.$students[2][1].' '.$students[2][2].'<br>';
echo "<br>";

// Associative Multidimentional arrays
$students = array(array('RN'=>'1',
                        'Name'=>'a',
                        'Age'=>'14'),
                  array('RN'=>'2',
                        'Name'=>'b',
                        'Age'=>'13'),
                  array('RN'=>'3',
                        'Name'=>'c',
                        'Age'=>'15'));

echo $students[0]['RN'].' '.$students[0]['Name'].' '.$students[0]['Age'].'<br>';
echo $students[1]['RN'].' '.$students[1]['Name'].' '.$students[1]['Age'].'<br>';
echo $students[2]['RN'].' '.$students[2]['Name'].' '.$students[2]['Age'].'<br>';

?>