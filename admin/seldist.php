<?php
include'conf.inc';
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userna'])) {
        header('Location: timeout.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Portal : : Home</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<script language="JavaScript" type="text/javascript">
<!--
function validateForm()
{
var x=document.forms["myForm"]["user"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" || y==null || y=="" )
  {
  alert("Enter Username And Password......!");
  return false;
  }
}
//-->
</script>
<script language="JavaScript" type="text/javascript">
<!--
function validateFormAdmin()
{
var x=document.forms["myFormAdmin"]["username"].value;
var y=document.forms["myFormAdmin"]["password"].value;
if (x==null || x=="" || y==null || y=="" )
  {
  alert("Enter Admin Username And Password......!");
  return false;
  }
}
//-->
</script>
</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0"></a></div><br /><br />
<h1 align="center"><font color="#000000" size="5">ONLINE BIRTH AND DEATH REGISTRATION PORTAL</font></h1>

        
        <div id="menu">
            <ul>                                        
                <li><a  href="..\index.php" title="">Home</a></li>
                <li><a href="distentry.php" title="">District & Zone Entry</a></li> 
                <li><a class="current" href="deldis.php" title="">Delete District</a></li>              
                <li><a href="createusr.php" title="">Create User</a></li>
                <li><a href="delusr.php" title="">Delete User</a></li>
                <li><a href="logout.php" title="">Logout</a></li>
            </ul>
        </div>
        
    </div>
    
    <div class="green_box">
    	<div class="clock">
        <img src="images/clock.png" alt="" title="">             
        </div>
        <div class="text_content">
        <h1>Welcome to Online Portal</h1>
        <p class="green">
        We Welcome to you in online portal.its mainly developed and used for register birth and death entries in certain time enter in all over states and printout in fraction of minutes... 
        </p>
        <div class="read_more"><a href="documents\Birth certificate.docx" TARGET="_blank" >read more</a></div>
        </div>
        
        <div id="right_nav">
            <ul>                                        
               <li><a  href="..\index.php" title="">Home</a></li>
                <li><a href="distentry.php" title="">District & Zone Entry</a></li>  
                 <li><a class="current" href="deldis.php" title="">Delete District</a></li>            
                <li><a href="createusr.php" title="">Create User</a></li>
                <li><a href="delusr.php" title="">Delete User</a></li>
                
            </ul>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Welcome to Online Birth and Death Registration</h2>
        <p>
      
        </p>
        
         <div id="left_nav">
            <h3>Delete District</h3>  
            <p>         
        <form action="delds.php" method="post" >
<table border="0" align="center">
<p><?php 
include_once "conf.inc";
$na=$_POST['user'];
//$name=mysql_query("SELECT name FROM users WHEE username='$na'");

$result = mysql_query("SELECT * FROM distr"); 
    if(mysql_num_rows($result) == 0) { 
        echo "<p>Select Correct Option</p>"; 
    } 
    else 
    { 
        # Print the top of a table 
        echo "<table width='100%' bgcolor='' ><tr>";
		echo "<td><b>Distric Name</b></td>";
		echo "<td><b>Select To Delete</b></td>";
		
        echo "</tr>"; 
  
        # Print each file 
        while($row = mysql_fetch_assoc($result)) 
        { 
            # Print file info 
			echo "<tr><td>". $row['distric']. "</td>";
            
			echo"<td><input type='radio' name='de' value=".$row['id']." >";
			 
			            # Print download link echo "</tr>"; 
			 # delete link 
            
        } 
  
        # Close table 
        echo "</table>"; 
    } 
  
    # Free the result 
    mysql_free_result($result); 
		
 
# Close the mysql connection 
?>
</p></td></tr>
<tr><td><input type="submit" name="s" value="Delete Dist"  /></td></tr>
</table>
</form>
        </div>
        
        <p class="clear">
       
        
        
        </div><!--end of left content-->



    	<div id="right_content">
        
        	<div class="products_box">
            <form action="delzon.php" method="post">
   <table border="0" align="center">

<table border="0" align="center">

<tr><td>Select District</td><td>:</td><td><input type="text" name="dist" value="<?php echo $_POST['dist']; ?>"  /><a href="deldis.php"><img src="images\refresh.png" width="20" /></a></td></tr>
<?php 
include_once "conf.inc";
$na=$_POST['dist'];
//$name=mysql_query("SELECT name FROM users WHEE username='$na'");

$result = mysql_query("SELECT * FROM place WHERE dist='$na'"); 
    if(mysql_num_rows($result) == 0) { 
        echo "<p>Select Correct Option</p>"; 
    } 
    else 
    { 
        # Print the top of a table 
        echo "<table width='100%' bgcolor='' ><tr>";
		echo "<td><b>Zone Name</b></td>";
		echo "<td><b>Select To Delete</b></td>";
		
        echo "</tr>"; 
  
        # Print each file 
        while($row = mysql_fetch_assoc($result)) 
        { 
            # Print file info 
			echo "<tr><td>". $row['zone']. "</td>";
            
			echo"<td><input type='radio' name='de1' value=".$row['id']." >";
			 
			            # Print download link echo "</tr>"; 
			 # delete link 
            
        } 
  
        # Close table 
        echo "</table>"; 
    } 
  
    # Free the result 
    mysql_free_result($result); 
		
 
# Close the mysql connection 
?></td></tr>
<tr><td><input type="submit" name="s" value="Delete Zone"  /></td></tr>
    </table> </form>           </p>
            <br />
            </div>
            
            
         	<div class="products_box">
  
 
            </div>
            
            
            </div>  
            
            
            <div class="contact_information">
            <h4>Free Customers Support</h4>
            <p>
            <img src="images/phone_icon.gif" alt="" title="" class="box_img"></p>
            <p><font size="2">99948 65577</font></p><br>
            
            <br><br>
                  
            
            </div>  
        </div><!--end of right content-->


    
    <div style=" clear:both;"></div>
    </div><!--end of main content-->
 

     <div id="footer">
     	<div class="copyright">
<a href="index.php"></a><h1>ViN SYSTEM'S</h1>
        </div>
    	<div class="footer_links"> 
        <a href="about.php">About us</a>
         <a href="privacy.php">Privacy policy</a> 
        <a href="contact.php">Contact us </a>
        <a href="http://vinsystem.in">Website Designer</a>

        </div>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>