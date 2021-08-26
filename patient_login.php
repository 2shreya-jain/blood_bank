
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="donor.css" type="text/css"/>
<title>PATIENT</title>

</head>


<body background="https://wonderfulengineering.com/wp-content/uploads/2016/02/red-wallpaper-10.jpg">
    
<header>
    <div class="main">
        <ul>
            <li><a href="http://localhost/home.html">Home</a></li>
            <li><a href="http://localhost/Data_display.php">View Request</a></li>
            <li><a href="http://localhost/Contact_Us.html">Contact Us</a></li>
        </ul>
    </div></header><br><br><br><br>

                
    <center>        
        <h1 class="slogan" >Check The Availability</h1><br>
        
        <form action="patient_connect.php" method="POST">
          <p  class="center"> 
          <div class="box" >
          
              <div class="container">

                
              <div class="row">
                    <div class="col-25">
                      <label for="units">Units</label>
                    </div>
                    <div class="col-75">
                      <input type="number" min="0" name="id" required="" placeholder="Enter Units..">
                    </div>
                  </div>


               
                  <div class="row">
                    <div class="col-25">
                      <label for="country">Blood Group</label>
                    </div>
                    <div class="col-75">
                      <select  type="text" name="blood_group" required="" placeholder="Your blood group..">
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
                  


                  <br>
                  <div class="row">
                    <input type="submit" value="submit" class="button_save"  name="savedata" >
                  </div>
                </form>
              </div>
                  
              

          </div>
        </form>
        
        <table>
          <tr>
              <th>Full Name</th>
              <th>Location</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Mobile No.</th>
              <th>Blood Group</th>
              <th>Weight</th>
          </tr>

        </table>
        <br><br><br><br>
    
     </center>
</body>
</html>

