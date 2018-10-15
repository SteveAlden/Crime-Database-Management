<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet"  href="css/elements1.css" />
<style>

</style>
</head>
<body>

				 <input class="button button5" onClick="location.href='index.php'"  value='HOME'>
				 
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
$crime_id=$_POST['crime_id'];
$crime_type=$_POST['crime_type'];
$crime_place=$_POST['crime_place'];
$crime_date=$_POST['crime_date'];

$query=("insert into crime_details values('$fir_id','$crime_id','$crime_type','$crime_place','$crime_date')");
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
$sql = "select * from crime_details";
$records = mysqli_query($link,$sql);

?>

<?php
if(isset($_POST["dis_user"]))
{
	echo "<table>";
			echo "<tr>";
			echo "<th>"; echo "FIR ID"; echo "</th>";
			echo "<th>"; echo "CRIME ID"; echo "</th>";
			echo "<th>"; echo "CRIME TYPE"; echo "</th>";
			echo "<th>"; echo "CRIME PLACE"; echo "</th>";
			echo "<th>"; echo "CRIME DATE"; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			
			echo "</tr>";
	while($row = mysqli_fetch_array($records))
	{	
		
		echo "<tr><form action=updatecrime.php method=post>";
		echo "<td><input type=text name=fir_id value='".$row['fir_id']."'</td>";
		echo "<td><input type=text name=crime_id value='".$row['crime_id']."'</td>";
		echo "<td><input type=text name=crime_type value='".$row['crime_type']."'</td>";
		echo "<td><input type=text name=crime_place value='".$row['crime_place']."'</td>";
		echo "<td><input type=text name=crime_date value='".$row['crime_date']."'</td>";
		
		echo "<td><input type=submit name=update id='send1' value=UPDATE>";
		echo "<td><input type=submit name=delete id='send1' value=DELETE>";
		echo "</form></tr>";
	}
}	
	?>
	</table>
	<input class="button button56" onClick="location.href='crime.php'"  value='BACK'>
	<input class="button button55" onClick="location.href='criminal.php'" value='NEXT'>
