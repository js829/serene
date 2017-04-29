<?php
require_once 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<html>
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
	</head>
	<body>

	<!-- white box behind text -->
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<center><h1 class="title">To Do List </h1></center>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
				<p> hello world </p>
				<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Type a new
				item here" class="input" autocomplete="off">
				<input type="submit" value="Add" class="submit" >
			</form>
				<ul class="items">
				<li>
				<span class="item">Pick up shopping</span>
				<a href="#" class="done-button">Mark as done</a>
				</li>
				<li><span class="item done">Learn Php</span></li>
			</ul>

	<?php		

	function setTask( $task ) {
		global $connection;
		$query = "INSERT INTO todo (task, completed, visible) VALUES (\"{$task}\", 0, 1)";
		$result = mysql_query( $query, $connection );
		#echo mysql_error();
	}
	function confirm_query( $result_set ) {
		if ( !$result_set ) {
			die("Database query failed: " . mysql_error() );
		}
	}
	# Delete All Rows from table
	function deleteRows () {
		global $connection;
		$query = "DELETE FROM todo";
		$result = mysql_query( $query, $connection );
		$query = "ALTER TABLE todo AUTO_INCREMENT = 1";
		$result = mysql_query( $query, $connection );
	}
	# Set task completion flag to 1 using Task Number
	function completedTask ( $taskNum ) {
		global $connection;
		$query = "UPDATE todo SET completed = 1 WHERE id={$taskNum}";
		$result = mysql_query($query, $connection);
		#if ( ) {
		#	echo "Change Success, " . mysql_affected_rows() . " rows affected.";
		#} else {
		#	echo mysql_error();
		#}
	}
	# Set task visibility to 0 using Task Number
	function hideTask( $taskNum ) {
		global $connection;
		$newText = "Something";
		$query = "UPDATE todo SET visible=0 WHERE id={$taskNum}";
		$result = mysql_query($query, $connection);
	}
	# Displays All Visible Tasks
	function getAllTask() {
		global $connection;
		$query = "SELECT * FROM todo WHERE visible=1";
		$result = mysql_query($query, $connection);
		
		while ( $list = mysql_fetch_array($result) ) {
			#echo print_r($list) . "<br/>";
			echo "Task #" . $list[0] . ": " . $list[1] . "<br />";
		}
	}
	# Displays All Visible Tasks
	function getHiddenTask() {
		global $connection;
		$query = "SELECT * FROM todo WHERE visible=0";
		$result = mysql_query($query, $connection);
		
		while ( $list = mysql_fetch_array($result) ) {
			echo "Task #" . $list[0] . ": " . $list[1] . "<br />";
		}
	}
	# Check for task
	if ( isset( $_POST['taskName'] ) && $_POST['taskName'] !== "" ) {		
		$taskName = $_POST['taskName'];
		#echo $taskName;
		setTask( $taskName );
	}
	# Check for hide task number
	if ( isset( $_POST['num'] ) ) {
		$taskNum = $_POST['num'];
		hideTask( $taskNum );
	}
	echo "<form name=\"input\" action=\"todo.php\" method=\"post\" >";
	echo "<input type=\"text\" name=\"taskName\" placeholder=\"enter task here\"/>";
	echo "<br/>";
	#echo "<label>Enter Task Number to Hide: ";
	echo "<input type=\"text\" name=\"num\" placeholder=\"enter task number to hide here\"/>";	
	echo "<input type=\"submit\" name=\"submit\" />";
	echo "</form>";
	echo "<br/><br/>";
	echo "To-Do List: " . "<br/>";
	echo getAllTask();
	echo "<br/>";
	echo "Hidden List: " . "<br/>";
	echo getHiddenTask();
	?>
	</html>