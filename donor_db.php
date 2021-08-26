<?php

//Database Connection

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "nsp_project";
 
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_errno)
{
	die('Sorry,we are having some problems');

}



?>