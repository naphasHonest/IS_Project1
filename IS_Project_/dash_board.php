<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop off Mtaani</title>
    <link rel="shortcut icon" type="image/png" href="Logo/logo1.png">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php
    if(isset($_POST["save"])){
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $mobile=$_POST["mobile"];
        $destination=$_POST["destination"];    
        $conn= mysqli_connect("localhost" ,"root" ,"odera@1148" ,"package");
        if(!$conn){
           echo "something went wrong"; 
            }
    
        $sql= "INSERT INTO tbl_customers2(Firstname,Secondname,Mobilenumber,Destination)
        VALUES('$fname','$lname', '$mobile', '$destination')";
        $result=mysqli_query($conn,$sql);
    }
    ?>
<body>
    <div class="main">
        <div class="add">
            <h3>welcome to dashboard</h3>
        </div>
        <div class="form">
    
            <form id="rejister" class="input-rejister" action="" method="post"> 
                <input type="text" class="input-field" name="fname" value="" placeholder="First name" >
                <input type="text" class="input-field" name="lname" value="" placeholder="Second name" >
                <input type="number" class="input-field" name="mobile" value="" placeholder="Mobile number" >
                <input type="text" class="input-field" name="destination" value="" placeholder="Destination" > 
                <button type="submit-btn" name="save" value="Add parckage" class="submit-btn">Add parckage</button>    
            </form>
        </div>
    </div>
</body>
</html>
