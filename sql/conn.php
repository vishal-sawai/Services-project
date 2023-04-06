
<?php

$conn = mysqli_connect("localhost", "root", "coder", "service-project");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
?>