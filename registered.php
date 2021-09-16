<?php include_once('header.php') ?>;

<?php 

include_once('action/cn.php');
$query="SELECT    *
        FROM      citizens
        ORDER BY  id DESC
        LIMIT     1";
$result= mysqli_query($cn, $query) or die('Cannt Run Query' . mysqli_error($cn));

$data = mysqli_fetch_array($result);
?>

<h1>Congratulations <?php echo $data['name']; ?> you are registered.</h1>
<h2>Your ID card number is <?php echo $data['cardno']; ?></h2>



<?php include_once('footer.php') ?>;