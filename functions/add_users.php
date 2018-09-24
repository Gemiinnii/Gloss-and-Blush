<?php
session_start();
include "db.php";

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$phone = $_POST["phone"];

$sql = "INSERT INTO tbl_users (username, password, phone)
VALUES ('$username', '$password', '$phone')";

$run_query = mysqli_query($con,$sql);
if($run_query){
	$_SESSION["username"] = $username;
	$_SESSION["user_type"] = 0;
	header('Location: ../index.php');
}else{
	echo $con->error;
}

?>