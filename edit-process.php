<?php

include("config.php");

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $school_origin = $_POST['school_origin'];

    $sql = "UPDATE prospective_student SET name='$name', address='$address', gender='$gender', religion='$religion', school_origin='$school' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: student-list.php');
    } else {
        die("Failed to save changes...");
    }


} else {
    die("Access prohibited...");
}

?>