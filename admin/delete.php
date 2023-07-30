<?php
include('db_connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM roombook WHERE c_id = $id";
$query = mysqli_query($con, $sql);
if($query) {
	header("location: approve.php");
}
?>