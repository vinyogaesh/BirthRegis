<?php
include'conf.inc';
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
        header('Location: timeout.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Portal : : Birth Entry</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/datepicker.css" /> 
<script type="text/javascript" src="js/datepicker.js"></script>
<script language="javascript" type="text/javascript">
    function showDist(disti)
	{
        document.form.submit();
    }
</script>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0"></a></div><br /><br />
<h1 align="center"><font color="#000000" size="5">ONLINE BIRTH AND DEATH REGISTRATION PORTAL</font></h1>

        
        <div id="menu">
            <ul>                                        
                <li><a href="index.php" title="">Home</a></li>
                <li><a href="bentry.php" title="">Birth Entry</a></li>
                <li><a href="deathentry.php" title="">Death Entry</a></li>
                <li><a href="birthview.php" title="">Birth Certificate View</a></li>
                <li><a class="current" href="deathview.php" title="">Death Certificate View</a></li>
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
                <li><a href="index.php" title="">Home</a></li>
                <li><a href="bentry.php" title="">Birth Entry</a></li>
                <li><a href="deathentry.php" title="">Death Entry</a></li>
                <li><a href="birthview.php" title="">Birth View</a></li>
                <li><a class="current" href="deathview.php" title="">Death View</a></li>
            </ul>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Online Death Registration</h2>
        <p>
              </p>
      <form action="dview.php" method="post">
Select District Name:-<select name="place"><option value="">-------Select------</option><?php
//$place=$_SESSION['place'];
//echo $place; 
$bnm="select distric from distr ORDER BY id";
$ansv=mysql_query($bnm);
   while($rowa=mysql_fetch_array($ansv))
   {?> <option value="<?php echo $rowa['distric'];?>"> <?php echo $rowa['distric']; } ?></option></select><br /><br />
<input type="submit" name="sub" value="Get Details"  />
</form> 
       
        </div><!--end of left content-->



    	<div id="right_content">
        <h2>Hints To Register</h2>
        	<div class="products_box">
  
            <marquee behavior="slide" direction="up" scrollamount="2">
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Select District then wait less than minute</p>
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Then Select Zone</p>
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Enter Child Name</p>
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Select Sex Type</p>
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Select Date of birth</p>
            <p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Enter Place of Birth</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Enter Father and Mother name</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Enter Permenant Address</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;Enter Address time of child birth</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;&nbsp;If remark avalible means write it</p>
            </marquee>
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