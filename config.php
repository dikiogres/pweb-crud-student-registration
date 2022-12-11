<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "student_registration";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Failed to connect to database: " . mysqli_connect_error());
} else {
    echo "Successfully connected to the database";
}

?>