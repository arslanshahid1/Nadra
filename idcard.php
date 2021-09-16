<?php include_once('header.php') ?>

<?php

$cardno = $_GET['card-no'];
include_once('action/cn.php');
$query = "SELECT * FROM `citizens` WHERE cardno='$cardno'";
$result = mysqli_query($cn, $query) or die("Cant Run Query" . mysqli_error($cn));
$rows = mysqli_num_rows($result);
if ($rows > 0) {
    $row = mysqli_fetch_array($result);

    $name       = $row['name'];
    $fname      = $row['fname'];
    $country    = $row['country'];
    $dob        = $row['dob'];
    $gender     = $row['gender'];
    $cardno     = $row['cardno'];
?>

    <div class="col-9 m-auto id-card">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-0">Pakistan</h3>
                <p class="mt-0 ">Islamic republic of pakistan</p>
                <h4>Name: <?php echo $name; ?></h4>
                <h4>Father's Name: <?php echo $fname; ?></h4>
                <h4>Country of stay: <?php echo $country; ?></h4>
                <h4>Date of birth: <?php echo $dob; ?></h4>
                <h4>Gender: <?php echo $gender; ?></h4>
                <h4>Identity Number: <?php echo $cardno; ?></h4>
            </div>
            <div class="col-6 text-right">
                <h5>National Identity Card</h5>
                <img src="pk.png" width="250" class="mt-5" alt="">
            </div>
        </div>

    </div>

<?php
} else {
?>
    <h2>Citizen not found. Please register and try again.</h2>
<?php
}

?>



<?php include_once('footer.php'); ?>