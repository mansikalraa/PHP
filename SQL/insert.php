<?php

require 'connect.php';

$query="INSERT INTO student(name,age) VALUES ('abc','16')";

if ($run=mysqli_query($db, $query)){
    echo "<br>query executed!<br>";
}
else {
    echo "<br>query not executed!";
}

?>