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
</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0"></a></div><br /><br />
<h1 align="center"><font color="#000000" size="5">ONLINE BIRTH AND DEATH REGISTRATION PORTAL</font></h1>

        
        <div id="menu">
            <ul>                                        
                <li><a href="index.php" title="">Home</a></li>
                <li><a class="current" href="bentry.php" title="">Birth Entry</a></li>
                <li><a href="deathentry.php" title="">Death Entry</a></li>
                <li><a href="birthview.php" title="">Birth Certificate View</a></li>
                <li><a href="deathview.php" title="">Death Certificate View</a></li>
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
                <li><a class="current" href="bentry.php" title="">Birth Entry</a></li>
                <li><a href="deathentry.php" title="">Death Entry</a></li>
                <li><a href="birthview.php" title="">Birth View</a></li>
                <li><a href="deathview.php" title="">Death View</a></li>
            </ul>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Online Birth Registration</h2>
        <p>
              </p>
      <form action="bstor.php" method="post" name="sub" id="sub">
<table border="0" align="center">

<tr><td>Select District</td><td>:</td><td><input type="text" name="dist" value="<?php echo $_POST['dist']; ?>"  /><a href="bentry.php"><img src="images\refresh.png" width="20" /></a></td></tr>
<tr><td>Select Zone</td><td>:</td><td><select name="zone"><option value="">--Select--</option>
<?php
$pname=$_POST['dist'];
$bn="select zone from place where dist='$pname'";
$ans=mysql_query($bn);
   while($row=mysql_fetch_array($ans))
   {?>
	<option value="<?php echo $row['zone'];?>"> <?php echo $row['zone']; } ?></option></select></td></tr>
    
<tr><td>Enter Child Name</td><td>:&nbsp;</td><td><input type="text" name="chname"  /></td></tr>
<tr><td>Select Sex</td><td>:&nbsp;</td><td><select name="sex"><option value="MALE">MALE</option><option value="FEMALE">FEMALE</option></select></td></tr>
<tr><td>Enter Date Of Birth</td><td>:&nbsp;</td><td><input id='bday' class='datepicker' name="bday"></td></tr>
<tr><td>Place Of Birth</td><td>:&nbsp;</td><td><input type="text" name="placebirth"></td></tr>
<tr><td>Name of Father</td><td>:&nbsp;</td><td><input type="text" name="father"></td></tr>
<tr><td>Name of Mother</td><td>:&nbsp;</td><td><input type="text" name="mother"></td></tr>
<tr><td>Permenant Address</td><td>:&nbsp;</td><td> <textarea name="paddress"></textarea></td></tr>
<tr><td>Address At Time Of Birth</td><td>:&nbsp;</td><td><input type="text" name="aaddress"></td></tr>
<tr><td>Remarks</td><td>:&nbsp;</td><td><input type="text" name="remarks"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Store" /></td><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="clear" value="Clear All" /></td></tr>
</table>
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