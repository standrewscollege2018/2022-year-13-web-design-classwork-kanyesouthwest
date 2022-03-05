<?php

if(!isset($_SESSION['admin'])) {
    // Not logged in, redirect back to index page
    header("Location: index.php");
}



$first_name = mysqli_real_escape_string($dbconnect, $_POST['first_name']);
$last_name = mysqli_real_escape_string($dbconnect, $_POST['last_name']);
$tutor_code = mysqli_real_escape_string($dbconnect, $_POST['tutor_code']);



echo $first_name, $last_name, $tutor_code;
?>