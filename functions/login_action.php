<?php
include "db.php";

session_start();

if(isset($_POST["submit"]) ){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["id"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["user_type"] = $row["user_type"];
		$user_type = $row["user_type"];
		if($user_type == 1){
			header('Location: ../admin.php');	
		}else{
			header('Location: ../index.php');
		}
	}
	else{
		echo "Wrong username or password";
	}
}

?>