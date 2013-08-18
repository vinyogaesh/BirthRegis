<?php
$con=mysql_connect("localhost","root","");
if($con==NULL)
 echo "Database server connection error";
 
$val=mysql_select_db("portal",$con);
if($val==NULL)
 echo "Database connection error";
?>