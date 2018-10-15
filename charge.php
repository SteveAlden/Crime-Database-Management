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
		<h1>CHARGE SHEET DETAILS</h1>
		<p>PLEASE ENTER THE DETAILS</p>
    </div>
	

		<form name="form1" action="editcharge.php" method="post">
		<input type = "text" name="cs_id" value="" placeholder="CHARGE SHEET ID"/>
		<input type = "text" name="fir_id" value="" placeholder="FIR ID"/>
		<input type = "text" name="witness_name" value="" placeholder="WITNESS NAME"/>
		<input type = "text" name="date_registered" value="" placeholder="DATE REGISTERED"/>
		<input type = "text" name="criminal_id" value="" placeholder="CRIMINAL ID"/>
		<input type="submit" name="submit1" id="send" value="INSERT"/>
		<input type="submit" name="dis_user" id="send" value="DISPLAY"/>
		</form>
		
 </div> 



</table>

</form>
</body>
</html>

