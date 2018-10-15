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
		<h1>CRIME DETAILS</h1>
		<p>PLEASE ENTER THE DETAILS</p>
    </div>
	

		<form name="form1" action="editcrime.php" method="post">
		<input type = "text" name="fir_id" value="" placeholder="FIR ID"/>
		<input type = "text" name="crime_id" value="" placeholder="CRIME ID"/>
		<input type = "text" name="crime_type" value="" placeholder="CRIME TYPE"/>
		<input type = "text" name="crime_place" value="" placeholder="CRIME PLACE"/>
		<input type = "text" name="crime_date" value="" placeholder="CRIME DATE"/>
		<input type="submit" name="submit1" id="send" value="INSERT"/>
		<input type="submit" name="dis_user" id="send" value="DISPLAY"/>
		</form>
		
 </div> 



</table>

</form>
</body>
</html>

