<?php
include("donor_db.php");
$rollno = $_GET['ag'];
$query="DELETE FROM donor WHERE age='$age'";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "<font color='green'>Record is deleted from table";
	?>

	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/donorlogin.php">
	<?php
}
else
{
	echo "<font color='red'>Record is not deleted from table";
} 
//print_r("$rollno");
//die();
?>