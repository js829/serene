<?php 


$username = $_POST['username'];

$password = $_POST['password'];

$full_name = $_POST['full_name'];

$location = $_POST['location'];

$gender = $_POST['gender'];

$user_info = “mysql_query(INSERT INTO users (username, password, fname, lname, birthday, num, gender) VALUES ('$_POST[username]', '$_POST[password]','$_POST[fname]', '$_POST[lname]', '$_POST[birthday]', '$_POST[num]','$_POST[gender]' )”; echo “Your information was added to the database.”; 
?> 




 