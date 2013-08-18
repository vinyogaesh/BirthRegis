<?php

// Inialize session
session_start();

// Include database connection settings
include('conf.inc');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM users WHERE (username = '" .$_POST['user'] . "') and (password = '" . md5($_POST['pass']) . "')");
// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
        $_SESSION['user'] = $_POST['user'];
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['grade'] = $_POST['grade'];
		$_SESSION['place'] = $_POST['place'];
        // Jump to secured page
        header('Location: bentry.php');
}
else {
        // Jump to login page
     header('Location: logerr.php');   
	
 }

?>
