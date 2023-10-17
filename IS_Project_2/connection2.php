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

    $sql= "INSERT INTO tbl_customers2 (Firstname,Secondname,Mobilenumber,Destination)
    VALUES(?,?,?,?)";
    $result=mysqli_query($conn,$sql);
        }
 
    
    
?>
    
   
 
     
     

     
     
       
