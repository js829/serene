<?php
	
	date_default_timezone_set('America/New_York');
	
	
	//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
	$hostname = 'localhost';
	$username = 'mgs_user';
	$password = 'pa55word';
	$database = 'my_guitar_shop1';
	
	
	if (getenv('JAWSDB_URL') != undefined){
		$dbparts = parse_url(getenv('JAWSDB_URL'));
		$hostname = $dbparts['host'];
		$username = $dbparts['user'];
		$password = $dbparts['pass'];
		$database = ltrim($dbparts['path'],'/');	
	}
    try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>