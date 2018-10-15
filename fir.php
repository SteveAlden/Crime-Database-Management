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
		<h1>FID DETAILS</h1>
		<p>PLEASE ENTER THE DETAILS</p>
    </div>
	

		<form name="form1" action="editfir.php" method="post">
		<input type = "text" name="fir_id" value="" placeholder="FIR ID"/>
		<input type = "text" name="fir_date" value="" placeholder="FIR DATE"/>
		<input type = "text" name="description" value="" placeholder="DESCRIPTION"/>
		<input type = "text" name="station_id" value="" placeholder="STATION ID"/>
		<input type="submit" name="submit1" id="send" value="INSERT"/>
		<input type="submit" name="dis_user" id="send" value="DISPLAY"/>
		</form>
		
 </div> 



</table>

</form>
</body>
</html>

