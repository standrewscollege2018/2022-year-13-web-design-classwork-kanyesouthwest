<!-- Admin panel contains all links to admin pages -->
<?php

if(!isset($_SESSION['admin'])) {
    // Not logged in, redirect back to index page
    header("Location: index.php");
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><a class="" href="index.php?page=addtutor">Add tutor </a></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><a class="" href="index.php?page=deletetutorselect">Delete Tutor </a></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><a class="" href="index.php?page=addstudent">Add Student </a></p>
                </div>
            </div>
        </div>


    <div class="col-12 col-sm-6 col-md-3">
        <div class="card">
            <div class="card-body">
                <!-- Notice that the logout page is standalone, not inside the index page -->
                <p class="card-text"><a class="" href="index.php?page=logout">Log out</a></p>
            </div>
        </div>
    </div>


    </div>
</div>