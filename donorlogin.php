




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="donor.css" type="text/css"/>
<title>DONOR</title>

</head>


<body background="https://wonderfulengineering.com/wp-content/uploads/2016/02/red-wallpaper-10.jpg">
    
<header>
    <div class="main">
        <ul>
            <li><a href="http://localhost/home.html">Home</a></li>
            <li><a href="http://localhost/Data_display.php">View Request</a></li>
            <li><a href="http://localhost/Contact_Us.html">Contact Us</a></li>
        </ul>
    </div></header><br><br>
    
    <?php

//Database Connection

include("donor_db.php");

if($_GET['savedata'])
{
	$fn=$_GET['fullname'];
	$add=$_GET['address'];
	$ag=$_GET['age'];
  $ge=$_GET['gender'];
  $mn=$_GET['mobile_no'];
  $bgp=$_GET['blood'];
  $we=$_GET['weight'];
  
	

	if($fn!="" && $add!="" && $ag!="" && $ge!="" && $mn!="" && $bgp!="" && $we!="")
	{
		$query="INSERT INTO donor VALUES ('$fn', '$add','$ag', '$ge', '$mn', '$bgp','$we')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
			 echo "<script>alert('Data inserted into Database');</script>";

		}
	}
	else
	{
			echo "<font color='red'>All fields are required";
	}
}

?>          
    <center>        
        <h1 class="slogan" >“Donate your blood for a reason, let the reason to be life”</h1><br>
        
        <form action="" method="GET">
          <p  class="center"> 
          <div class="box" >
          
              <div class="container">
    
                  <div class="row">
                    <div class="col-25">
                      <label for="fname">Name</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="fname" name="fullname" required="" placeholder="Your name..">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-25">
                      <label for="lname">Hospital</label>
                    </div>
                    <div class="col-75">
                      <select type="text" id="Address" name="address" required="" placeholder="Your address.." >
                      <option>Select</option>
                      <option>APOLLO SPECTRA HOSPITAL PVT.</option>
                      <option>MANIPAL HOSPITAL</option>
                      <option>SHALBY HOSPITAL PVT.</option>
                      <option>SADHNA HOSPITAL </option>
                      <option>TAGORE HOSPITAL MANSAROVER </option>
                      <option>FORTIS ESCORTS HOSPITAL</option>
                      <option>JAIPUR HOSPITAL</option>
                      <option>MAHATMA GANDHI HOSPITAL</option>
                      <option>ASOPA HOSPITAL </option>
                      <option>SMS HOSPITAL</option>
                      
                      </select>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-25">
                      <label for="Age">Age</label>
                    </div>
                    <div class="col-75">
                      <input type="number" min="0" id="Age" name="age" required="" placeholder="Your age..">
                    </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-25">
                          <label for="gender">Gender</label>
                      </div>
                      <div class="col-75">                        
                        <select type="text" id="gender" name="gender" required="" placeholder="Your gender.." >
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                                            
                      </select>
                      </div>
                  </div> 
                
                

                  <div class="row">
                    <div class="col-25">
                      <label for="Moble_No">Mobile No.</label>
                    </div>
                    <div class="col-75">
                      <input type="tel" minlength="10" maxlength="10" id="Mobile_no" name="mobile_no" required="" placeholder="Your mobile no...">
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-25">
                      <label for="country">Blood Group</label>
                    </div>
                    <div class="col-75">
                      <select  type="text" id="blood" name="blood" required="" placeholder="Your blood group..">
                        <option value="Select">Select</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                      </select>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-25">
                      <label for="weight">Weight</label>
                    </div>
                    <div class="col-75">
                      <input type="number" id="weight" min=0 oninput="validity.valid||(value='');" name="weight" required="" placeholder="Your weight...">
                    </div>
                  </div><br>
                  <div class="row">
                    <input type="submit" value="submit" class="button_save"  name="savedata" >
                  </div>
                </form>
              </div>
                  
              

          </div>
        </form>
        <br><br><br><br>
    
     </center>
</body>
</html>



<?php
$query="SELECT * FROM donor";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=  0)
{

	?>
    
	<?php
	$ss=mysqli_query($conn,"SELECT * from donor order by age ASC");
	while($row = mysqli_fetch_assoc($ss))
	{
	echo "";
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
