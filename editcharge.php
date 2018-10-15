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
$cs_id=$_POST['cs_id'];
$fir_id=$_POST['fir_id'];
$witness_name=$_POST['witness_name'];
$date_registered=$_POST['date_registered'];
$criminal_id=$_POST['criminal_id'];

$query=("insert into charge_sheet values('$cs_id','$fir_id','$witness_name','$date_registered','$criminal_id')");
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
$sql = "select * from charge_sheet";
$records = mysqli_query($link,$sql);

?>

<?php
if(isset($_POST["dis_user"]))
{
	echo "<table>";
			echo "<tr>";
			echo "<th>"; echo "CHARGE SHEET ID"; echo "</th>";
			echo "<th>"; echo "FIR ID"; echo "</th>";
			echo "<th>"; echo "WITNESS NAME"; echo "</th>";
			echo "<th>"; echo "DATE"; echo "</th>";
			echo "<th>"; echo "CRIMINAL ID"; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			echo "<th>"; echo ""; echo "</th>";
			
			echo "</tr>";
	while($row = mysqli_fetch_array($records))
	{	
		
		echo "<tr><form action=updatecharge.php method=post>";
		echo "<td><input type=text name=cs_id value='".$row['cs_id']."'</td>";
		echo "<td><input type=text name=fir_id value='".$row['fir_id']."'</td>";
		echo "<td><input type=text name=witness_name value='".$row['witness_name']."'</td>";
		echo "<td><input type=text name=date_registered value='".$row['date_registered']."'</td>";
		echo "<td><input type=text name=criminal_id value='".$row['criminal_id']."'</td>";
		
		echo "<td><input type=submit name=update id='send1' value=UPDATE>";
		echo "<td><input type=submit name=delete id='send1' value=DELETE>";
		echo "</form></tr>";
	}
}	
	?>
	</table>
	<input class="button button56" onClick="location.href='charge.php'"  value='BACK'>
	<input class="button button55" onClick="location.href='index.php'"  value='NEXT'>
