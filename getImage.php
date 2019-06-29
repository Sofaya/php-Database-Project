<?php


$conn = mysqli_connect("localhost", "root", "", "dbsaturday");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


$id = $_REQUEST['staff_id'];


$query = "DELETE FROM staff_details WHERE staff_id = $id";
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: rep_jdate_form.php");
?>