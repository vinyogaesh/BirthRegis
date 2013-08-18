<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['userna']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php');

?>