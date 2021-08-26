<html>
<body>
<?php 
    $id = filter_input(INPUT_POST, 'id');
    $blood_group = filter_input(INPUT_POST, 'blood_group');

    if(!empty($id)){
        if(!empty($blood_group)){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "nsp_project";

            // create connection 
            $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
            
            if(mysqli_connect_error()){
                die('connect error ('.
                    mysqli_connect_errno().')' . 
                    mysqli_connect_error());
            }
            else{
                $sql = " INSERT INTO patient (id , blood_group) values ('$id', '$blood_group')";
                if($conn->query($sql)){
                    echo"New record is inserted successfully";
                     
                }
                else{
                    echo"Error: ". $sql . "<br>". $conn->error;
                }
                $conn->close();
            }

        }
        else{
            echo"BLOOD SHOULD NOT BE EMOTY";
            die();
        }
    }



?>
</body>
</html>




