<?php
include_once 'conf.inc';
mysql_query("delete from ausers where id='".$_REQUEST['de']."'");
mysql_close($con);
echo"<script language='javascript'>
  alert('Administratorr Deleted Sucessfully  ' )
 window.location = 'delusr.php';
  </script>";
  ?>