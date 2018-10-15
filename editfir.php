<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet"  href="css/elements1.css" />
<style>

</style>
</head>
<body>
<body>

				 <input class="button button5" onClick="location.href='index.php'"  value="HOME">
				
				 </body>
				 </html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"CRIME");
?>

<?php
if(isset($_POST['submit1']))
 {
$fir_id=$_POST['fir_id'];
$fir_date=$_POST['fir_date'];
$description=$_POST['description'];
$station_id=$_POST['station_id'];

$query=("insert into fir_details values('$fir_id','$fir_date','$description','$station_id')");
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
$sql = "select * from fir_details";
$records = mysqli_query($link,$sql);

?>

<?php
if(isset($_POST["dis_user"]))
{
	echo "<table>";
			echo "<tr>";
			echo "<th>"; echo "FIR ID"; echo "</th>";
			echo "<th>"; echo "FIR DATE"; echo "</th>";
			echo "<th>"; echo "DESCRIPTION"; echo "</th>";
			echo "<th>"; echo "STATION ID"; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			
			echo "</tr>";
	while($row = mysqli_fetch_array($records))
	{	
		
		echo "<tr><form action=updatefir.php method=post>";
		echo "<td><input type=text name=fir_id value='".$row['fir_id']."'</td>";
		echo "<td><input type=text name=fir_date value='".$row['fir_date']."'</td>";
		echo "<td><input type=text name=description value='".$row['description']."'</td>";
		echo "<td><input type=text name=station_id value='".$row['station_id']."'</td>";
		
		echo "<td><input type=submit name=update id='send1' value=UPDATE>";
		echo "<td><input type=submit name=delete id='send1' value=DELETE>";
		echo "</form></tr>";
	}
}	
	?>
	</table>
	 <input class="button button56" onClick="location.href='fir.php'"  value="BACK">
	<input class="button button55" onClick="location.href='crime.php'" value='NEXT'>
