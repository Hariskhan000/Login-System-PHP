<?php

$conn = mysqli_connect("localhost","root","", "loginsystem");

if(!$conn){
    echo "connection error" or mysqli_connect_error($conn);
}
?>
