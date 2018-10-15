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
$criminal_id=$_POST['criminal_id'];
$criminal_name=$_POST['criminal_name'];
$criminal_age=$_POST['criminal_age'];
$crime_id=$_POST['crime_id'];

$query=("insert into criminal values('$criminal_id','$criminal_name','$criminal_age','$crime_id')");
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
$sql = "select * from criminal";
$records = mysqli_query($link,$sql);

?>

<?php
if(isset($_POST["dis_user"]))
{
	echo "<table>";
			echo "<tr>";
			echo "<th>"; echo "CRIMINAL ID"; echo "</th>";
			echo "<th>"; echo "CRIMINAL NAME"; echo "</th>";
			echo "<th>"; echo "CRIME AGE"; echo "</th>";
			echo "<th>"; echo "CRIME ID"; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			
			echo "</tr>";
	while($row = mysqli_fetch_array($records))
	{	
		
		echo "<tr><form action=updatecriminal.php method=post>";
		echo "<td><input type=text name=criminal_id value='".$row['criminal_id']."'</td>";
		echo "<td><input type=text name=criminal_name value='".$row['criminal_name']."'</td>";
		echo "<td><input type=text name=criminal_age value='".$row['criminal_age']."'</td>";
		echo "<td><input type=text name=crime_id value='".$row['crime_id']."'</td>";
		
		echo "<td><input type=submit name=update id='send1' value=UPDATE>";
		echo "<td><input type=submit name=delete id='send1' value=DELETE>";
		echo "</form></tr>";
	}
}	
	?>
	</table>
	<input class="button button56" onClick="location.href='criminal.php'"  value='BACK'>
	<input class="button button55" onClick="location.href='charge.php'" value='NEXT'>
