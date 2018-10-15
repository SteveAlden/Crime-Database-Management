<!DOCTYPE HTML>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
?>


<html>
<head> 
	<title>CRIME REPORTING SYSTEM</title>
	
	<link rel="stylesheet"  href="css/elements1.css" />
		
 </head> 

 <body>
<div class="container">

 <div id="feedback">
 
	<div class="head">
		<h1>CRIME REPORTING SYSTEM</h1>
		<p>PLEASE SELECT THE REQUIRED OPTION</p>
    </div>
	<input type=button onClick="location.href='station.php'" id="send" value='STATION DETAILS'>
	<input type=button onClick="location.href='fir.php'" id="send" value='FIR DETAILS'>
	<input type=button onClick="location.href='crime.php'" id="send" value='CRIME DETAILS'>
	<input type=button onClick="location.href='criminal.php'" id="send" value='CRIMINAL DETAILS'>
	<input type=button onClick="location.href='charge.php'" id="send" value='CHARGE SHEET DETAILS'>

		
 </div> 


 </body> 

 
 </html> 
 
 
 
