<?php 
$user_info = “INSERT INTO users (username, email) VALUES ('$_POST[username]', '$_POST[password]','$_POST[fname]', '$_POST[lname]', '$_POST[birthday]', '$_POST[num]' )”; echo “Your information was added to the database.”; 

?> 