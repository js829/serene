<!DOCTYPE html>
<html lang="en">
<?php
require_once 'database.php';
?>
    <head> 
    <link rel="stylesheet" type= "text/css" href="main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<center><h1 class="title">To-Do List Maker</h1></center>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<center><div class="form-group">
							<label for="username" class="cols-sm-2 control-label"><strong>Username:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="username" id="username"  placeholder="Enter your Username"/></center>
								<br>
						<center><div class="form-group">
							<label for="password" class="cols-sm-2 control-label"><strong>Password:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/></center>

						<center><div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button"><strong>Log In</strong></button></center>
						</div>
<br>
<br>
			
						<center><div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button"><strong><a href="signup.php">Register Now!</strong></button></center>
						</div>

						<div class="login-register">
						<href="register.php"
					</form>
				</div>
			</div>
		</div>
		<br>
		</body>
		</html> 
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'database.php';
	
	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['username']) || !isset($_REQUEST['password'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.<br><a href='index.php'>Go back to main page.</a>");
	}
	else if ($_REQUEST['username'] == null || $_REQUEST['password'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$username = $_REQUEST['username'];
	$userpass  = $_REQUEST['password'];

	//Let's make sure the e-mail doesn't already exist.
	$sql = 'SELECT * FROM user where username="'.$username.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail already exists.
	if (count($results) > 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address already exists.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's add the data.
	$sql = 'INSERT INTO user (`email`, `password`) VALUES ("'.$username.'", "'.$password.'")';
	$results = runQuery($sql);
	
	echo "User Added.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>

	

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>