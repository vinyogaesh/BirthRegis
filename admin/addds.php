<?php
include'conf.inc';
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userna'])) {
        header('Location: timeout.php');
}

?>




<?php
include_once"conf.inc";
$sql="INSERT INTO distr (distric)
VALUES('$_POST[dist]')";
echo $id;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo"<script language='javascript'>
  alert('District Created Sucessfully ' )
 window.location = 'distentry.php';
  </script>";
  //echo $a;
  //
 
  //echo "<b>Invoice Created Sucessfully........! </b><br><br>";?>
  <?php  //echo"<a href='makebill.php'>Back</a>";

mysql_close($con)
?>
