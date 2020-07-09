<?php include("includes/header.php"); ?>
<?php
$leave_type = $_GET["q"];

    $spot_leave = "SELECT available_days, leave_name FROM leave_details WHERE leave_name = '$leave_type'";
    $spot_leave_result = mysqli_query($connection, $spot_leave);
	$row_leave_result = mysqli_fetch_array($spot_leave_result);
?>
<input type="number" class="form-control" value = "<?php echo $row_leave_result["available_days"]; ?>" disabled>