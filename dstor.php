<?php
include'conf.inc';
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
        header('Location: timeout.php');
}

?>
<center>
<?php

include_once 'conf.inc';


$invp=$_SESSION['user'];
$inv="select * from users where username='$invp'";
$ansinv=mysql_query($inv);
   while($row=mysql_fetch_array($ansinv))
   {
	 $invoicepre = $row['ccode'];
 }
 //echo " session counter is " . $_SESSION['counter'];  //echoes current value of counter
$ino="select id from birth_reg";
$ansin=mysql_query($ino);
while($row=mysql_fetch_array($ansin))
   {
	 $no = $row['id'];
 }

$sql2 ="SELECT id FROM death_reg WHERE id > '$id' ORDER by id DESC LIMIT 1";

$resultn = mysql_query($sql2);
$nextrows = mysql_num_rows($resultn);
while ($nextrow = mysql_fetch_array($resultn)) {
$next=$nextrow['id']+1;
}

 $d=date('Y');
 $m=date('M');
 $no=$ino;
 $a=$invoicepre .'/'.$d.'/'.$m.'/'.$next;




$sql="INSERT INTO death_reg (Registerno, districit, zone, name, sex, dod, pod, father, mother, p_address, a_t_birth, remark, dor)
VALUES('$a','$_POST[dist]','$_POST[zone]','$_POST[name]','$_POST[sex]','$_POST[bday]','$_POST[placedeath]','$_POST[father]','$_POST[mother]','$_POST[paddress]','$_POST[aaddress]','$_POST[remarks]',NOW())";
echo $id;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo"<script language='javascript'>
  alert('Death Information Registered Sucessfully' )
 window.location = 'deathentry.php';
  </script>";
  //echo $a;
  //
 
  //echo "<b>Invoice Created Sucessfully........! </b><br><br>";?>
  <?php  //echo"<a href='makebill.php'>Back</a>";

mysql_close($con)
?>
</center>