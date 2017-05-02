<?php
	include_once 'database.php';
	
	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['uname']) || !isset($_REQUEST['password'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.<br><a href='index.php'>Go back to main page.</a>");
	}
	else if ($_REQUEST['uname'] == null || $_REQUEST['password'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$uname = $_REQUEST['uname'];
	$password = $_REQUEST['password'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$birthday = $_REQUEST['birthday'];
	$num = $_REQUEST['num'];
	$gender = $_REQUEST['gender'];


	//Let's make sure the e-mail doesn't already exist.
	$sql = 'SELECT * FROM users where uname="'.$uname.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail already exists.
	if (count($results) > 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address already exists.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's add the data.
	$sql = 'INSERT INTO users (`uname`, `password`, `fname`,`lname`,`birthday`,`num`,`gender`,) VALUES ("'.$uname.'", "'.$password.'", "'.$fname.'", "'.$lname.'", "'.$birthday.'", "'.$num.'", "'.$gender.'")';

	$results = runQuery($sql);
	
	echo "User Added.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>