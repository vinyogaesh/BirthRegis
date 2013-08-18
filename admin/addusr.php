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
$pass=md5($_POST['pass']);
$sql="INSERT INTO users (username, password, name, ccode, email, grade, place )
VALUES('$_POST[user]','$pass','$_POST[name]','$_POST[ccode]','$_POST[mail]','$_POST[grade]','$_POST[place]')";
echo $id;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo"<script language='javascript'>
  alert('User Created Sucessfully  ' )
 window.location = 'createusr.php';
  </script>";
  //echo $a;
  //
 
  //echo "<b>Invoice Created Sucessfully........! </b><br><br>";?>
  <?php  //echo"<a href='makebill.php'>Back</a>";

mysql_close($con)
?>