<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}


    $tutorID = $_GET['tutorID'];
    $confirm_sql = "SELECT * FROM tutorgroup WHERE tutorgroupID = $tutorID";


    $confirm_qry = mysqli_query($dbconnect, $confirm_sql);
    $confirm_aa = mysqli_fetch_assoc($confirm_qry);


    $tutor_name = $confirm_aa['tutor'];
    $tutor_code = $confirm_aa['tutorcode'];
    echo "<h2>Are you sure you want to delete this tutor group?</h2>";
    echo "<p>$tutor_name $tutor_code</p>";  

?>

<p> <a href="index.php?page=deletetutor&tutorID=<?php echo $tutorID; ?>">Yes remove their existance</a> | <a href="index.php?page=deletetutorselect">NOO wrong tutor!</a></p>
<p><a href="index.php">Back to home page</a></p>