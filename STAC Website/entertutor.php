<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}


    $tutor_name = mysqli_real_escape_string($dbconnect, $_POST['tutor_name']);
    $tutor_code = mysqli_real_escape_string($dbconnect, $_POST['tutor_code']);

    $insert_sql = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutor_name','$tutor_code')";
    $insert_qry = mysqli_query($dbconnect, $insert_sql);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <p class="display-2">New tutor successfully added</p>
        </div>
    </div>
</div>