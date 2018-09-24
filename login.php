  <!DOCTYPE html>
  <html>
  <head>
  	<title>Admin login</title>
	<link rel="stylesheet" href="./css/admin.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
  </head>
  <body>
  	<div class="wrapper">
	    <form class="form-signin" method="POST" action="./functions/login_action.php">       
	      <h2 class="form-signin-heading">Please login</h2>
	      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
	      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
	      <label class="checkbox">
	        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
	      </label>
	      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
	    </form>
  	</div>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
  </html>