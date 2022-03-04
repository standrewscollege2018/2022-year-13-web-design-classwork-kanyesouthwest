<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}


    $tutorID = $_GET['tutorID'];



    $delete_sql = "DELETE FROM tutorgroup WHERE tutorgroupID = $tutorID";
    $delete_qry = mysqli_query($dbconnect, $delete_sql);
    echo "<h2>Tutorgroup has been decimated</h2>";
?>


<a href="index.php">Back to home page</a>