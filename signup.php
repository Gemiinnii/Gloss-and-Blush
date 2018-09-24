<!DOCTYPE html>
	<html>
	<head>
		<title>Signup as a new user</title>
		<link rel="stylesheet" href="./css/admin.css">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
  	</head>
  	<body>
  		<div class="wrapper">
	    	<form class="form-signin" method="POST" action="./functions/add_users.php" name="signup" method="POST">   
	    		<h2 class="form-signin-heading">Signup</h2>
				<div class="form-group">
					<label for = "username"> Username: </label>
					<input type="name" name="username" class = "form-control" placeholder="username">
				</div>
				<div class="form-group">
					<label for ="password"> Choose password: </label>
					<input type="password" name="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<label for ="cpassword"> Confirm password: </label>
					<input type="password" name="cpassword" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<label for = "phone">Phone number : </label>
					<input type="integer" name="phone" placeholder="phone num" class="form-control">
				</div>	
				<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Signup</button>		     
		    </form>
	  	</div>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
  </html>