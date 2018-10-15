<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet"  href="css/elements1.css" />
</head/>
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
    $query = "DELETE FROM station_details WHERE station_id='$_POST[station_id]'";
    
    $result = mysqli_query($link, $query);
    
    if($result)
    {
        header("refresh:1; url=station.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($link);
}
?>
<?php
if(isset($_POST['update']))
 {
	 $station_id=$_POST['station_id'];
	 $station_area=$_POST['station_area'];
	 $station_region=$_POST['station_region'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$query = "update station_details set station_area='$station_area',station_region='$station_region' where station_id=$station_id";
if(mysqli_query($link,$query))
	header("refresh:1; url=station.php");
	else
		echo "not updated";
 }
?>