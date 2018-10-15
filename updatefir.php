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
    $query = "DELETE FROM fir_details WHERE fir_id='$_POST[fir_id]'";
    
    $result = mysqli_query($link, $query);
    
    if($result)
    {
        header("refresh:1; url=fir.php");
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
	 $fir_date=$_POST['fir_date'];
	 $description=$_POST['description'];
	 $station_id=$_POST['station_id'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$query = "update fir_details set fir_date='$fir_date',description='$description' where fir_id=$fir_id";
if(mysqli_query($link,$query))
	header("refresh:1; url=fir.php");
	else
		echo "not updated";
 }
?>