<!DOCTYPE html> 
<html>
<head> 
	<title>CRIME REPORTING SYSTEM</title>
	
	<link rel="stylesheet"  href="css/elements1.css" />
		
 </head> 
<body>

				 </body>
				 </html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
?>

<!-- delete -->
<?php
if(isset($_POST['delete']))
{
    $link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"CRIME");
    $query = "DELETE FROM criminal WHERE criminal_id='$_POST[criminal_id]'";
    
    $result = mysqli_query($link, $query);
    
    if($result)
    {
        header("refresh:1; url=criminal.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($link);
}
?>
<?php
if(isset($_POST['update']))
 {
	 $criminal_id=$_POST['criminal_id'];
	 $criminal_name=$_POST['criminal_name'];
	 $criminal_age=$_POST['criminal_age'];
	 $crime_id=$_POST['crime_id'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$query = "update criminal set criminal_name='$criminal_name',criminal_age='$criminal_age',crime_id='$crime_id' where criminal_id=$criminal_id";
if(mysqli_query($link,$query))
	header("refresh:1; url=criminal.php");
	else
		echo "not updated";
 }
?>