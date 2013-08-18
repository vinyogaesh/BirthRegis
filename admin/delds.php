<?php
include_once 'conf.inc';
mysql_query("delete from distr where id='".$_REQUEST['de']."'");
mysql_close($con);
echo"<script language='javascript'>
  alert('District Deleted Sucessfully  ' )
 window.location = 'deldis.php';
  </script>";
  ?>