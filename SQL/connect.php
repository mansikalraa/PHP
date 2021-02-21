<?php

$host ='localhost';
$user='root';

$db = mysqli_connect($host,$user)
or die('Cannot connect!');

if(mysqli_select_db($db,'try')){
    echo "Successfully connected!!";
}
else {
    die('Cannot connect to database!');
}


?>