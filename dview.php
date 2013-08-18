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
                <li><a  href="bentry.php" title="">Birth Entry</a></li>
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
                <li><a  href="bentry.php" title="">Birth Entry</a></li>
                <li><a href="deathentry.php" title="">Death Entry</a></li>
                <li><a  href="birthview.php" title="">Birth View</a></li>
                <li><a class="current" href="deathview.php" title="">Death View</a></li>
            </ul>
        </div>       
        
    
    </div><!--end of green box-->
    
    <div id="main_content">
    	<div id="left_content">
        <h2>Online Death Certificate</h2>
        <p>
              </p>
      <?php 
include_once "conf.inc";
$na=$_REQUEST['place'];
//$name=mysql_query("SELECT name FROM users WHEE username='$na'");

$result = mysql_query("SELECT * FROM death_reg WHERE districit='$na'"); 
    if(mysql_num_rows($result) == 0) { 
        ?>
		
		<h4>Select Correct District</h4><a href="deathview.php"><img src="images\refresh.png" width="20" /></a>
		<?php
		 } 
    else 
    { 
        # Print the top of a table 
        echo "<table width='100%' bgcolor='' ><tr>";
		echo "<td><b>Register No</b></td>";
		echo "<td><b>District </b></td>";
		echo "<td><b>Zone</b></td>"; 
		echo "<td><b>Name </b></td>"; 
		echo "<td><b>Sex</b></td>"; 
		echo "<td><b>Date of Death</b></td>"; 
        echo "<td><b>Place of Death</b></td>"; 
        echo "<td><b>Father</b></td>";
		echo "<td><b>Mother</b></td>"; 
		echo "<td><b>Permenant Address</b></td>";
		echo "<td><b>Address time of Birth</b></td>";
		echo "<td><b>Remarks</b></td>";
		echo "<td><b>Date of Register</b></td>";
		echo "<td><b>Date of Generate</b></td>";
		echo "<td><b>Print Document</b></td>";
        echo "</tr>"; 
  
        # Print each file 
        while($row = mysql_fetch_assoc($result)) 
        { 
            # Print file info 
			echo "<tr><td>". $row['Registerno']. "</td>";
            echo "<td>". $row['districit']. "</td>"; 
			echo "<td>". $row['zone']. "</td>"; 
            echo "<td>". $row['name']. "</td>"; 
			echo "<td>". $row['sex']. "</td>"; 
			echo "<td>". $row['dod']. "</td>"; 
			echo "<td>". $row['pod']. "</td>";
			echo "<td>". $row['father']. "</td>"; 
  echo "<td>". $row['mother']. "</td>";
  echo "<td>". $row['p_address']. "</td>";
  echo "<td>". $row['a_t_birth']. "</td>";
  echo "<td>". $row['remark']. "</td>";
  echo "<td>". $row['dor']. "</td>";
  echo "<td>". date("d-m-Y")."</td>";
            # Print download link ?>
            <td><a href="#" onClick="MyWindow=window.open('dgen.php?mobilenoo=<?php echo $row['Registerno'] ; ?>','MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no,width=600,height=800,');
             if (MyWindow) {
                MyWindow.focus(5);
                MyWindow.print();
        }
            
            
             return false;">Print</a>
            <?php echo "</tr>"; 
			 # delete link 
            
        } 
  
        # Close table 
        echo "</table>"; 
    } 
  
    # Free the result 
    mysql_free_result($result); 
 
# Close the mysql connection 
?>
 
        
        </div><!--end of left content-->



    	<div id="right_content">
        	<div class="products_box">
  
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