<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>



<form action="index.php?page=entertutor" method="post">
    <div class="p-2 col-6">
        <div class="form-group row">
            <label for="tutor_name" class="col-sm-2 col-form-label">Tutor Name</label>
            <div class="col-sm-10">
                <input type="text" name="tutor_name" class="form-control" id="tutor_name" placeholder="Enter tutor name">
            </div>
        </div>
        <div class="form-group row">
            <label for="tutor_code" class="col-sm-2 col-form-label">Tutor Code</label>
            <div class="col-sm-10">
                <input type="text" name="tutor_code" class="form-control" id="tutor_code" placeholder="Enter tutor code (Max 3 characters)">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>