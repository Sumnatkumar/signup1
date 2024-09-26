<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "signupforms";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con) {
    die(mysqli_connect_error($con));
// }else{
//     die(mysqli_connect_error($con));
}
?>