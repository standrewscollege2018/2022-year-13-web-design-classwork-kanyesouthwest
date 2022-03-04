<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<h2>Select a tutor to delete</h2>

<?php



    $tutor_sql = "SELECT * FROM tutorgroup";
    $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

    if(mysqli_num_rows($tutor_qry)==0) {
        echo "<p>No students in database</p>";
    } else {
        // If there are students, display them as image links
        $tutor_aa = mysqli_fetch_assoc($tutor_qry);

        do {
            $tutorID = $tutor_aa['tutorgroupID'];
            $tutor_name = $tutor_aa['tutor'];
            $tutor_code = $tutor_aa['tutorcode'];
        ?>
        <div class="col-md-4"> <?php
            echo "<a href='index.php?page=deletetutorconfirm&tutorID=$tutorID'>";
            echo "<p>$tutor_name $tutor_code</p></a>";
        ?>
        </div><?php
        } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
    }

?>