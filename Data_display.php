
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="donor.css" type="text/css"/>
    <title>Table with database</title>
        <style >
            #bloodgroup {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:nth-child(odd){background-color: #dbd8d8;}

tr:hover {background-color: white;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(202, 42, 42);
  color: white;
}

        </style>

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
        <h1 class="slogan"  >Availability</h1>
        <table id="bloodgroup">
        <tr>
            <th>Full Name</th>
            <th>Location</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Mobile No.</th>
            <th>Blood Group</th>
            <th>Weight</th>
        </tr>
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "nsp_project");
            if ($conn-> connect){
                die("Connection failed: ". $conn-> connect_error);
            }
            $sql = "SELECT fullname, address, age, gender, mobile_no, blood, weight from donor";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["fullname"]. "</td><td>". $row["address"] . "</td><td>". $row["age"] . "</td><td>". $row["gender"] .  
                    "</td><td>". $row["mobile_no"] . "</td><td>". $row["blood"] . "</td><td>". $row["weight"] . "</td></tr>";

                }
                echo"</table>";
            }
            else {
                echo "0 result";
            }
            $conn-> close();
        ?>
    </table>
        <br><br><br><br>
    
     </center>
</body>
</html>
