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
    $query = "DELETE FROM charge_sheet WHERE cs_id='$_POST[cs_id]'";
    
    $result = mysqli_query($link, $query);
    
    if($result)
    {
        header("refresh:1; url=charge.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($link);
}
?>
<?php
if(isset($_POST['update']))
 {
	 $cs_id=$_POST['cs_id'];
	 $fir_id=$_POST['fir_id'];
	 $witness_name=$_POST['witness_name'];
	 $date_registered=$_POST['date_registered'];
	 $criminal_id=$_POST['criminal_id'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$query = "update charge_sheet set fir_id='$fir_id',witness_name='$witness_name',date_registered='$date_registered',criminal_id='$criminal_id' where cs_id=$cs_id";
if(mysqli_query($link,$query))
	header("refresh:1; url=charge.php");
	else
		echo "not updated";
 }
?>