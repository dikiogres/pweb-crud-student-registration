<?php

include("config.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $school_origin = $_POST['school_origin'];

    $sql = "INSERT INTO prospective_student (name, address, gender, agama, school_origin) VALUE ('$name', '$address', '$gender', '$agama', '$school_origin')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=failed');
    }


} else {
    die("Access prohibited...");
}

?>