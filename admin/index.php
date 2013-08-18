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
                <li><a class="current" href="..\index.php" title="">Home</a></li>
                <li><a href="distentry.php" title="">District & Zone Entry</a></li>
                
                <li><a href="createusr.php" title="">Create User</a></li>
                <li><a href="delusr.php" title="">Delete User</a></li>
                <li><a href="contact.php" title="">Contactus</a></li>
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
                <li><a class="current" href="..\index.php" title="">Home</a></li>
                <li><a href="distentry.php" title="">District & Zone Entry</a></li>
                
                <li><a href="createusr.php" title="">Create User</a></li>
                <li><a href="delusr.php" title="">Delete User</a></li>
                <li><a href="contact.php" title="">Contactus</a></li>
            </ul>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Welcome to Online Birth and Death Registration</h2>
        <p>
      
        </p>
        
         <div id="left_nav">
            <ul>                                        
                <li><a class="current" href="..\index.php" title="">Home</a></li>
                <li><a href="distentry.php" title="">District & Zone Entry</a></li>
                
                <li><a href="createusr.php" title="">Create User</a></li>
                <li><a href="delusr.php" title="">Delete User</a></li>
            </ul>
        </div>
        
        <p class="clear">
        <img src="images/pic1.jpg" alt="" title="" class="left_img">
        We Welcome to you in online portal.its mainly developed and used for register birth and death entries in certain time enter in all over states and printout in fraction of minutes... 
        </p>   
        <div class="read_more_link"><a href="documents\Birth certificate.docx">read more</a></div>     
        
        
        
        </div><!--end of left content-->



    	<div id="right_content">
        <h2>District Wise Login</h2>
        	<div class="products_box">
  <img src="images/box_icon.gif" alt="" title="" class="box_img">
 <h3>User Only</h3>  
            <p>         
        <form action="..\login.php" method="post" name="myForm" onSubmit="return validateForm()">
<center>
Username :- <input type="text" name="user" /><br /><br />
Password :- <input type="password" name="pass" /><br /><br />
<input type="submit" name="sub" value="Login" />
</center>
</form>
            </p>
            <br />
            </div>
            
            
         	<div class="products_box">
  <img src="images/box_icon.gif" alt="" title="" class="box_img">
 <h3>Admin Login</h3>  
            <p>         
        <form action="login.php" method="post" name="myFormAdmin" onSubmit="return validateFormAdmin()">
<center>
Username :- <input type="text" name="username" /><br /><br />
Password :- <input type="password" name="password" /><br /><br />
<input type="submit" name="sub" value="Login" />
</center>
</form>
            </p>
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