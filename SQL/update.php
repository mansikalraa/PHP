<?php

require 'connect.php';

$query="UPDATE student SET name='efg' WHERE RN=1";

if ($run=mysqli_query($db, $query)){
    echo "<br>Updated!<br>";
}
else {
    echo "<br>query not executed!";
}

?>