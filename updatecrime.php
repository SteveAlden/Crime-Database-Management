<!DOCTYPE html> 
<html>
<head> 
	<title>CRIME REPORTING SYSTEM</title>
	
	<link rel="stylesheet"  href="css/elements1.css" />
		
 </head> 
<body>				 </body>
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
    $query = "DELETE FROM crime_details WHERE crime_id='$_POST[crime_id]'";
    
    $result = mysqli_query($link, $query);
    
    if($result)
    {
        header("refresh:1; url=crime.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($link);
}
?>
<?php
if(isset($_POST['update']))
 {
	 $fir_id=$_POST['fir_id'];
	 $crime_id=$_POST['crime_id'];
	 $crime_type=$_POST['crime_type'];
	 $crime_place=$_POST['crime_place'];
	 $crime_date=$_POST['crime_date'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$query = "update crime_details set fir_id='$fir_id',crime_type='$crime_type',crime_place='$crime_place',crime_date='$crime_date' where crime_id=$crime_id";
if(mysqli_query($link,$query))
	header("refresh:1; url=crime.php");
	else
		echo "not updated";
 }
?>