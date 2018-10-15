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
		<h1>CRIMINAL DETAILS</h1>
		<p>PLEASE ENTER THE DETAILS</p>
    </div>
	

		<form name="form1" action="editcriminal.php" method="post">
		<input type = "text" name="criminal_id" value="" placeholder="CRIMINAL ID"/>
		<input type = "text" name="criminal_name" value="" placeholder="CRIMINAL NAME"/>
		<input type = "text" name="criminal_age" value="" placeholder="CRIMINAL AGE"/>
		<input type = "text" name="crime_id" value="" placeholder="CRIME ID"/>
		<input type="submit" name="submit1" id="send" value="INSERT"/>
		<input type="submit" name="dis_user" id="send" value="DISPLAY"/>
		</form>
		
 </div> 



</table>

</form>
</body>
</html>

