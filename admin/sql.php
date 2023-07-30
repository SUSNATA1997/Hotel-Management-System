<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$troom = $_POST['troom'];
	$bed = $_POST['bed'];
	$nroom = $_POST['nroom'];
	$meal = $_POST['meal'];
	$checkin = $_POST['cin'];
	$checkout = $_POST['cout'];
	$sql = "INSERT into roombook(name, email, phone, room_type, bedding_type, no_of_rooms, meal_plan, check_in, check_out, approved)VALUES('$name','$email','$phone','$troom', '$bed', '$nroom', '$meal', '$checkin', '$checkout', 0)";
	$query = mysqli_query($con, $sql);
	if($query) {
		echo '<script>alert("Form submitted successfully!"); window.location.href = "../demo.php";</script>';
		exit;
	}
}
?>
