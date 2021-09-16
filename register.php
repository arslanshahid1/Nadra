<?php include_once('header.php'); ?>

<div class="col-6 m-auto">
    <form action="action/register.php" method="get">
        <div class="form-group">
            <label for="name">Name</label>
            <input  type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="fname">Father's Name</label>
            <input type="text" class="form-control" id="fname" name="fname" required  placeholder="Enter your father's name">
        </div>

        <div class="form-group">
            <label for="country">Country of stay</label>
            <input type="text" class="form-control" id="country" name="country" required placeholder="Enter your country of stay">
        </div>
        <div class="form-group">
            <label for="dob">Date of birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required placeholder="Enter your country of stay">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
            <label class="form-check-label" for="male">
                Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" >
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>

        <button type="submit" class="btn btn-primary d-block mt-3">Submit</button>
    </form>
</div>

<?php include_once('footer.php'); ?>