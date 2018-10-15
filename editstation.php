<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet"  href="css/elements1.css" />
<style>

</style>
</head>
<body>

				 <input class="button button5" onClick="location.href='index.php'" value='HOME'>
				 
				 </body>
				 </html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
?>

<?php
if(isset($_POST['submit1']))
 {
$station_id=$_POST['station_id'];
$station_area=$_POST['station_area'];
$station_region=$_POST['station_region'];

$query=("insert into station_details values('$station_id','$station_area','$station_region')");
 $result = mysqli_query($link, $query);
if($result)
{
 echo"Record Successfully Added";
}
else
{

echo"Not Added" ;
}
 }

?>

<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
$sql = "select * from station_details";
$records = mysqli_query($link,$sql);

?>

<?php
if(isset($_POST["dis_user"]))
{
	echo "<table>";
			echo "<tr>";
			echo "<th>"; echo "STATION ID"; echo "</th>";
			echo "<th>"; echo "STATION AREA"; echo "</th>";
			echo "<th>"; echo "STATION REGION"; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			
			echo "</tr>";
	while($row = mysqli_fetch_array($records))
	{	
		
		echo "<tr><form action=updatesta.php method=post>";
		echo "<td><input type=text name=station_id value='".$row['station_id']."'</td>";
		echo "<td><input type=text name=station_area value='".$row['station_area']."'</td>";
		echo "<td><input type=text name=station_region value='".$row['station_region']."'</td>";
		
		echo "<td><input type=submit name=update id='send1' value=UPDATE>";
		echo "<td><input type=submit name=delete id='send1' value=DELETE>";
		echo "</form></tr>";
	}
}	
	?>
	</table>
	<input class="button button56" onClick="location.href='station.php'" value='BACK'>
	<input class="button button55" onClick="location.href='fir.php'" value='NEXT'>