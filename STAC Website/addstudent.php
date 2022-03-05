<?php

if(!isset($_SESSION['admin'])) {
    // Not logged in, redirect back to index page
    header("Location: index.php");
}

    $tutor_sql = "SELECT * FROM tutorgroup";
    $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);


?>

<div class="container-fluid ">

    <form action="index.php?page=enterstudent" method="post">

        <div class="form-group">
            <label for="first_name">Student first name</label>
            <input name="first_name" type="text" class="form-control" placeholder="Enter students first name">
        </div>
        <div class="form-group">
            <label for="last_name">Student last name</label>
            <input name="last_name" type="text" class="form-control" placeholder="Enter students last name">
        </div>



        <br>
        <div class="form-group col-4">
            <select class="form-select" aria-label="">
                <option selected>Select tutor</option>
                    <?php
                    do {
                        $tutorgroupID = $tutor_aa['tutorgroupID'];
                        $tutorcode = $tutor_aa['tutorcode'];
                        echo "<option value="?>1><?php $tutorcode ?> </option>";
                        <?php
                        } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
                        ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>