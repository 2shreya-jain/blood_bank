<style>
td
{
	padding:10px;
}
</style>
<?php
//Database Connection
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "nsp_project"; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if($conn->connect_errno)
{
	die('Sorry,we are having some problems');
} 
error_reporting(0);
$query="SELECT * FROM donor";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=  0)
{

	?>
    <html>
	<table>
		<tr>
			
        <th>Age</th>
		<th>Full Name</th>
		<th>Hospital</th>
        <th>Gender</th>
        <th>Mobile no</th>
        <th>Blood Group</th>
		<th>Weight</th>
		<th colspan="2">Operations</th>
		</tr>

	<?php
	$ss=mysqli_query($conn,"SELECT * from donor order by age ASC");
	while($row = mysqli_fetch_assoc($ss))
	{
	echo "<tr>
    <td>".$row['age']."</td>
    <td>".$row['fullname']."</td>
    <td>".$row['address']."</td>
    <td>".$row['mobile_no']."</td>
    <td>".$row['weight']."</td>
    <td><a href='donor_update.php?ag=$row[age]&fn=$row[fullname]&add=$row[address]&ge=$row[gender]&mn=$row[mobile_no]&blood_gp=$row[blood_gp]&we=$row[weight]'>Edit</a></td>
		<td><a href='donor_delete.php?ag=$row[age]' onclick ='return checkdelete()'>Delete</a></td>
    </tr>";
	}
}	
else
{
	echo "<script>alert('No record found');</script>";
}

?>
</table>
</html>
<script>
	function checkdelete()
	{
		return confirm("Are you sure you want to delete this data???");
	}
 </script>
