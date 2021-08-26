<?php
include("donor_db.php");
?>

<html>
<head>
</head>
<body>
<form action="" method="GET"> 
AGE: <input type="number" name="age" value="<?php echo $_GET['ag']; ?>"/><br><br>
FULL NAME: <input type="text" name="fullname" value="<?php echo $_GET['fn']; ?>"/><br><br>
ADDRESS: <input type="text" name="address" value="<?php echo $_GET['add']; ?>"/><br><br>
GENDER: <input type="text" name="gender" value="<?php echo $_GET['ge']; ?>"/><br><br>
MOBILE NO: <input type="tel" name="mobile_no" value="<?php echo $_GET['mn']; ?>"/><br><br>
BLOOD GROUP: <input type="text" name="blood_gp" value="<?php echo $_GET['blood_gp']; ?>"/><br><br>
WEIGHT: <input type="number" name="weight" value="<?php echo $_GET['we']; ?>"/><br><br>
<input type="submit" name="submit" value="update"/>

</form>


<?php

if($_GET['submit'])
{
    $fullname=$_GET['fullname'];
    $address=$_GET['address'];
    $age=$_GET['age'];
    $ge=$_GET['gender'];
    $mobile_no=$_GET['mobile_no'];
    $blood_gp=$_GET['blood_gp'];
    $weight=$_GET['weight'];

$query="UPDATE donor SET fullname='$fullname', address='$address', gender='$gender', mobile_no='$mobile_no', blood_gp='$blood group', weight='$weight' WHERE age='$age'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<font color='green'>Updated Successfuly.<a href='donorlogin.php'>Check Updated List</a>";
	}
	else
	{
		echo "<font color='red'>Not Updated Data.<a href='donorlogin.php'>Check Updated List</a>";
	}
}
else
{
	echo "<font color='blue'> Click on Update button to change";
}

?>
</body>
</html>