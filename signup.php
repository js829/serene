<!DOCTYPE html>
<html lang="en">
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

		<title>Registration</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<center><h1 class="title">To Do List Maker - Registration</h1></center>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">

					<form action="addUser.php" method="post">

						
						<center><div class="form-group">
							<label for="username" class="cols-sm-2 control-label"><strong>Username:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="username" id="username"  placeholder="Enter your email address"/></center>

						<center><div class="form-group">
							<label for="password" class="cols-sm-2 control-label"><strong>Password:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/></center>

						<center><div class="form-group">
							<label for="fname" class="cols-sm-2 control-label"><strong>First Name:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your first name"/></center>

						<center><div class="form-group">
							<label for="lname" class="cols-sm-2 control-label"><strong>Last Name:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your last name"/></center>

						<center><div class="form-group">
							<label for="birthday" class="cols-sm-2 control-label"><strong>Birthday:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="birthday" id="birthday"  placeholder="Enter your birthday"/></center>

						<center><div class="form-group">
							<label for="num" class="cols-sm-2 control-label"><strong>Phone Number:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
									<input type="tel" class="form-control" name="num" id="num"  placeholder="Enter your phone number"/></center>

						<center><div class="form-group">
							<label for="gender" class="cols-sm-2 control-label"><strong>Gender:</strong></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa-lg" aria-hidden="true"></i></span>
									<input type="radio" class="form-control" name="gender" id="gender"  value="female"> Female<br>
									<input type="radio" class="form-control" name="gender" id="gender"  value="male"> Male<br></center>


						<center><div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button"><strong>Sign Up<a href= addUser.php</strong></button></center>
						</div>
						<div class="login-register">
						
					</form>
				</div>
			</div>
		</div>
		<br>


		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>