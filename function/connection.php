<?php
$con = mysqli_connect("localhost:3306", "root", "", "buynsell");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
