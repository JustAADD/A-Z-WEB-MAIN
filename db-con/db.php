<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "azph_database"; //databases

// Create connection
$con = mysqli_connect($hostname, $username, $password, $dbname); // connecting 
// Check connection

if (!$con) {


    die("Connection failed: " . mysqli_connect_error());
    // } else {
    //     echo "Connected successfully";
}

// mysqli_close($con);