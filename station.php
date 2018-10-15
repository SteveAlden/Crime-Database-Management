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
		<h1>STATION DETAILS</h1>
		<p>PLEASE ENTER THE STATION DETAILS</p>
    </div>
		<form name="form1" action="editstation.php" method="post">
		<input type = "text" name="station_id" value="" placeholder="STATION ID"/>
		<input type = "text" name="station_area" value="" placeholder="STATION AREA"/>
		<input type = "text" name="station_region" value="" placeholder="STATION REGION"/>
		<input type="submit" name="submit1" id="send" value="INSERT"/>
		<input type="submit" name="dis_user" id="send" value="DISPLAY"/>
		</form>
		
 </div> 


 </body> 

 
 </html> 
 
 
 
