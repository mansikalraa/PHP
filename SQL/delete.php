<?php

require 'connect.php';

$query="DELETE FROM student WHERE RN=2";

if ($run=mysqli_query($db, $query)){
    echo "<br>Deleted!<br>";
}
else {
    echo "<br>query not executed!";
}

?>