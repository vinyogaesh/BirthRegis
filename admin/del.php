<?php
include_once 'conf.inc';
mysql_query("delete from users where id='".$_REQUEST['de']."'");
mysql_close($con);
echo"<script language='javascript'>
  alert('User Deleted Sucessfully  ' )
 window.location = 'delusr.php';
  </script>";
  ?>