<?php
include_once 'conf.inc';
mysql_query("delete from place where id='".$_REQUEST['de1']."'");
mysql_close($con);
echo"<script language='javascript'>
  alert('Zone Deleted Sucessfully  ' )
 window.location = 'deldis.php';
  </script>";
  ?>