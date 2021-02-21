<?php

require 'connect.php';

$query="SELECT * FROM student";

if ($run=mysqli_query($db, $query)){
    echo "<br>query executed!<br>";
    while ($row = mysqli_fetch_array($run)) {
        echo '<table border="1" cellspacing=0><tr><td>'.$row['RN'].'</td><td>'.$row['name'].'</td><td>'.$row['age'].'</td></tr></table>';
    }
}
else {
    echo "query not executed";
}

?>